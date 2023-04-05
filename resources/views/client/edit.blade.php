@extends('layouts.app')

@section('template_title')
    Editar Invitado
@endsection

@section('content')

<div class="container-fluid mt-3">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-3">Editar Invitado</h3>
               <a class="btn btn-primary" href="{{ route('clients.index') }}"> Cancelar</a>
                    @includeif('partials.errors')
            </div>

            <div class="card-body mb-5">

                <form method="POST" action="{{ route('clients.update', $client->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf
                     <div class="row">
                        @include('client.form')
                     </div>
                </form>

            </div>

          </div>
        </div>
      </div>
</div>

@endsection
