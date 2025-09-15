@extends('layouts.app')

@section('template_title', 'Invitados')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between align-items-center">
            <span id="card_title">Invitados</span>
            <div class="float-right">
              <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm">Crear</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="tablaInvitados">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nombre</th>
                  <th>Estatus</th>
                  <th>Invitados Adultos</th>
                  <th>Invitados Niños</th>
                  <th>Telefono</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              @foreach ($clients as $client)
                <tr>
                  <td></td> {{-- se numera con DataTables --}}
                  <td>{{ $client->nombre }}</td>
                  <td>
                    @if ($client->estatus == 0)
                      <span class="badge bg-danger" style="font-size:13px;">Sin Confirmar</span>
                    @else
                      <span class="badge bg-success" style="font-size:15px;">Confirmado</span>
                    @endif
                  </td>
                  <td>{{ $client->num_invitados_confirm ?? '-' }}</td>
                  <td>{{ $client->num_invitados_confirm_n ?? '-' }}</td>
                  <td>{{ $client->telefono }}</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('single.inv', $client->code) }}" target="_blank">
                      Ver Invitacion
                    </a>

                    <a href="#"
                       class="btn btn-sm btn-wa-modal"
                       data-phone="{{ $client->telefono }}"
                       data-name="{{ $client->nombre }}"
                       data-url="{{ route('single.inv', $client->code) }}"
                       data-default-code="{{ $client->country_code ?? $client->lada ?? '52' }}"
                       style="background:#00BB2D; color:#fff">
                       WhatsApp
                    </a>

                    <a class="btn btn-sm btn-success" href="{{ route('clients.edit',$client->id) }}">
                      <i class="fa fa-fw fa-edit"></i> Editar
                    </a>
                    <a class="btn btn-sm btn-primary" href="{{ route('clients.show',$client->id) }}">
                      <i class="fa fa-fw fa-eye"></i> Ver
                    </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>

        {{-- ❌ No uses la paginación de Laravel aquí --}}
        {{-- {!! $clients->links() !!} --}}
      </div>
    </div>
  </div>
</div>


@include('client.whatsappmodal')

@endsection

@push('scripts')
<script>
$(function () {
  const table = $('#tablaInvitados').DataTable({
    pageLength: 100,
    lengthMenu: [[100, 200, 500, -1], ['100', '200', '500', 'Todos']],
    order: [],
    language: { url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-MX.json' },
    columnDefs: [
      { targets: 0, orderable: false }
    ]
  });

  table.on('draw.dt', function () {
    const info = table.page.info();
    table.column(0, { page: 'current' }).nodes().each(function (cell, i) {
      cell.innerHTML = info.start + i + 1;
    });
  }).draw();
});
</script>

<script>
(function(){
  let modalEl, modal, $msg, $code, $phone, $preview, $sendBtn;

  document.addEventListener('DOMContentLoaded', function(){
    modalEl  = document.getElementById('waModal');
    modal    = new bootstrap.Modal(modalEl);
    $msg     = $('#waMessage');
    $code    = $('#waCountryCode');
    $phone   = $('#waPhone');
    $preview = $('#waPreview');
    $sendBtn = $('#waSendBtn');

    $(document).on('click', '.btn-wa-modal', function(e){
      e.preventDefault();
      const phone   = ($(this).data('phone') || '').toString().trim();
      const name    = ($(this).data('name')  || '').toString().trim();
      const url     = ($(this).data('url')   || '').toString().trim();
      const defCode = ($(this).data('default-code') || '52').toString().replace(/\D+/g,'');

      $code.val(defCode);
      $phone.val(phone.replace(/\s+/g,''));
      $msg.val(getDefaultMessage(name, url));

      refreshPreview();
      modal.show();
    });

    $phone.on('input', function(){
      const v = this.value.trim();
      if (v.startsWith('+') || v.startsWith('00')) {
        let cleaned = v.startsWith('+') ? '+' + v.slice(1).replace(/\D+/g,'')
                                        : '00' + v.slice(2).replace(/\D+/g,'');
        this.value = cleaned;
      } else {
        this.value = v.replace(/\D+/g,'');
      }
      refreshPreview();
    });

    $code.on('input', function(){
      this.value = this.value.replace(/\D+/g,'');
      refreshPreview();
    });

    $msg.on('input', refreshPreview);

    $sendBtn.on('click', function(e){
      const href = $sendBtn.attr('href');
      if (!href || href === '#') {
        e.preventDefault();
        Swal?.fire?.('Teléfono inválido','Revisa el número antes de enviar.','warning') || alert('Teléfono inválido');
        return;
      }
      modal.hide();
    });
  });

    function getDefaultMessage(
    nombre,
    link,
    fechaBoda = '22 de noviembre',
    fechaLimite = '22 de octubre'
    ) {
    const n = nombre ? ` ${nombre}` : '';
    const l = link ? `\n${link}` : '';
    return (
        `¡Hola${n}!\n` +
        `¡Se acerca el gran día!\n` +
        `Con mucha ilusión queremos invitarlos a nuestra boda el ${fechaBoda} 💍\n` +
        `Será un momento súper especial y nos encantaría que nos acompañen.\n` +
        `Por favor confirmen su asistencia antes del ${fechaLimite}.\n` +
        `Aquí tienen la invitación digital con todos los detalles,\n` +
        `🎉 ¡Saludos! 👨‍❤️‍👨` +
        l
    );
    }

  function buildWaNumber(){
    const raw = ($phone.val() || '').trim();
    if (!raw) return '';
    if (raw.startsWith('+'))  return raw.replace(/\D+/g,'');
    if (raw.startsWith('00')) return raw.replace(/\D+/g,'').replace(/^00/,'');
    const code = ($code.val() || '52').replace(/\D+/g,'') || '52';
    const digits = raw.replace(/\D+/g,'');
    return code + digits;
  }

  function refreshPreview(){
    const waNum = buildWaNumber();
    const msg   = ($msg.val() || '').trim();
    if (!waNum) {
      $preview.text('—');
      $preview.attr('href', '#');
      $sendBtn.attr('href', '#');
      return;
    }
    const href = 'https://wa.me/' + waNum + '?text=' + encodeURIComponent(msg);
    $preview.text(href);
    $preview.attr('href', href);
    $sendBtn.attr('href', href);
  }
})();
</script>
@endpush
