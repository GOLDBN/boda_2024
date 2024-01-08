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
                                                    <a class="btn btn-sm btn-primary" href="{{ route('single.inv', $client->code) }}" target="_blanck">Ver</a>
                                                    <a type="button" class="btn btn-sm" target="_blank"
                                                            href="https://wa.me/52{{$client->telefono}}?text=%C2%A1Hola!%20%F0%9F%98%84%20Nacho%20y%20yo%20estamos%20emocionados%20de%20informarles%20que%20celebraremos%20nuestro%20matrimonio%20el%20*7%20de%20junio%20de%202024%20en%20Acapulco*.%20Si%20a%C3%BAn%20no%20has%20confirmado%20tu%20asistencia,%20no%20te%20preocupes;%20a%C3%BAn%20tienes%20tiempo%20hasta%20el%20*30%20de%20abril*%20para%20hacerlo.%20%C2%A1Les%20deseamos%20un%20maravilloso%20a%C3%B1o%20y%20esperamos%20con%20ansias%20su%20presencia%20en%20este%20d%C3%ADa%20tan%20especial!%20%F0%9F%8E%89%20%C2%A1Saludos!%20%F0%9F%91%B0%F0%9F%A4%B0%E2%80%8D%E2%99%82%EF%B8%8F%20%0A%F0%9F%91%89%20{{ urlencode(route('single.inv', $client->code)) }}"
                                                            style="background: #00BB2D; color: #ffff">Enviar</a>
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
                {!! $clients->links() !!}
            </div>
        </div>
    </div>
@endsection
