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
                                                <form action="{{ route('clients.destroy',$client->code) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('single.inv', $client->code) }}" target="_blanck"><i class="fas fa-signature"></i> </a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clients.show',$client->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clients.edit',$client->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
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
