@extends('layouts.app')

@section('template_title')
    Invitados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Invitados
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Crear
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table_id">
                                <thead class="thead">
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
                                            <td>{{ ++$i }}</td>

											<td>{{ $client->nombre }}</td>
                                            @if ($client->estatus == 0)
                                                <td> <label class="badge badge-danger" style="font-size: 13px;">Sin Confirmar</label> </td>
                                            @else
                                                <td> <label class="badge badge-success" style="font-size: 15px;">Confirmado</label> </td>
                                            @endif

                                            @if ($client->num_invitados_confirm == NULL)
                                                <td> - </td>
                                            @else
                                                <td> {{ $client->num_invitados_confirm }} </td>
                                            @endif

                                            @if ($client->num_invitados_confirm_n == NULL)
                                                <td> - </td>
                                            @else
                                                <td> {{ $client->num_invitados_confirm_n }} </td>
                                            @endif
											<td>{{ $client->telefono }}</td>

                                            <td>



                                                    <a class="btn btn-sm btn-primary" href="{{ route('single.inv', $client->code) }}" target="_blanck">Ver Invitacion</a>
<a href="#"
   class="btn btn-sm btn-wa-modal"
   data-phone="{{ $client->telefono }}"
   data-name="{{ $client->nombre }}"
   data-url="{{ route('single.inv', $client->code) }}"
   data-default-code="{{ $client->country_code ?? $client->lada ?? '52' }}"
   style="background:#00BB2D; color:#fff">
   WhatsApp
</a>

                                                    <a class="btn btn-sm btn-success" href="{{ route('clients.edit',$client->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clients.show',$client->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
<!-- Modal WhatsApp Config -->
<div class="modal fade" id="waModal" tabindex="-1" aria-labelledby="waModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header py-2">
        <h5 class="modal-title" id="waModalLabel">Enviar WhatsApp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <div class="modal-body">
        <div class="mb-2">
          <label class="form-label">Código de país (LADA)</label>
          <input type="text" id="waCountryCode" class="form-control" placeholder="52" list="ladaList">
          <datalist id="ladaList">
            <option value="52">México</option>
            <option value="1">EE.UU./Canadá</option>
            <option value="34">España</option>
            <option value="57">Colombia</option>
            <option value="54">Argentina</option>
            <option value="56">Chile</option>
            <option value="51">Perú</option>
            <option value="593">Ecuador</option>
            <option value="502">Guatemala</option>
            <option value="506">Costa Rica</option>
          </datalist>
          <small class="text-muted d-block mt-1">
            Si el teléfono empieza con “+” o “00”, se usará como internacional y se ignorará la LADA.
          </small>
        </div>

        <div class="mb-2">
          <label class="form-label">Teléfono</label>
          <input type="text" id="waPhone" class="form-control" placeholder="5555555555">
        </div>

        <div class="mb-2">
          <label class="form-label">Mensaje</label>
          <textarea id="waMessage" rows="5" class="form-control"></textarea>
        </div>

        <div class="border rounded p-2 mt-3">
          <div class="small text-muted">Vista previa del enlace:</div>
          <a id="waPreview" href="#" target="_blank" class="small text-break d-inline-block" style="max-width:100%;">—</a>
        </div>
      </div>

      <div class="modal-footer py-2">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a id="waSendBtn" href="#" target="_blank" class="btn btn-success">Enviar por WhatsApp</a>
      </div>
    </div>
  </div>
</div>


                {!! $clients->links() !!}
            </div>
        </div>
    </div>
@endsection

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

    // Abrir modal desde cada fila
    $(document).on('click', '.btn-wa-modal', function(e){
      e.preventDefault();

      const phone   = ($(this).data('phone') || '').toString().trim();
      const name    = ($(this).data('name')  || '').toString().trim();
      const url     = ($(this).data('url')   || '').toString().trim();
      const defCode = ($(this).data('default-code') || '52').toString().replace(/\D+/g,'');

      // Prellenar campos
      $code.val(defCode);
      $phone.val(phone.replace(/\s+/g,''));
      $msg.val(getDefaultMessage(name, url));

      // Refrescar preview y mostrar modal
      refreshPreview();
      modal.show();
    });

    // Limpiar a dígitos mientras escriben (no toca el “+” inicial si existe)
    $phone.on('input', function(){
      const v = this.value.trim();
      if (v.startsWith('+') || v.startsWith('00')) {
        // Permitimos + o 00, el resto a dígitos
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

    // Enviar (abre en nueva pestaña el mismo href del preview)
    $sendBtn.on('click', function(e){
      const href = $sendBtn.attr('href');
      if (!href || href === '#') {
        e.preventDefault();
        Swal?.fire?.('Teléfono inválido','Revisa el número antes de enviar.','warning') || alert('Teléfono inválido');
        return;
      }
      // Modal se puede cerrar al clic
      modal.hide();
    });
  });

    function getDefaultMessage(nombre, link, fechaBoda = '22 de Noviembre de 2025', fechaLimite = '22 de Octubre') {
    const n = nombre ? ` ${nombre}` : '';
    const l = link ? link : '';
    return `¡Hola${n}! 😄 Estamos emocionados de informarles que celebraremos nuestro matrimonio el ${fechaBoda}. ` +
            `Si aún no han confirmado su asistencia, no se preocupen; pueden hacerlo mediante este link con el nombre al inicio, ` +
            `tienen hasta el ${fechaLimite}. ¡Les deseamos un maravilloso año y esperamos contar con su presencia en este día tan especial! ` +
            `🎉 ¡Saludos! 👨‍❤️‍👨\n👉 ${l}`;
    }


  function buildWaNumber(){
    const raw = ($phone.val() || '').trim();
    if (!raw) return '';

    if (raw.startsWith('+')) {
      return raw.replace(/\D+/g,''); // quita '+'
    }
    if (raw.startsWith('00')) {
      return raw.replace(/\D+/g,'').replace(/^00/,''); // quita '00'
    }
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
