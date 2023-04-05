@extends('layouts.app')

@section('template_title')
    Ver Invitado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Invitado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $client->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            @if ($client->estatus == 0)
                                Sin Confirmar
                            @else
                                Confirmado
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Invitados Confirmados Adultos:</strong>
                            {{ $client->num_invitados_confirm }}
                        </div>
                        <div class="form-group">
                            <strong>Invitados Confirmados Niños:</strong>
                            {{ $client->num_invitados_confirm_n }}
                        </div>
                        <div class="form-group">
                            <strong>Invitados Permitidos Adultos:</strong>
                            {{ $client->num_invitados_perm }}
                        </div>
                        <div class="form-group">
                            <strong>Invitados Permitidos Niños:</strong>
                            {{ $client->num_invitados_perm_n }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $client->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
