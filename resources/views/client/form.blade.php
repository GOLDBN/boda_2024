
         <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $client->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

         <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
            {{ Form::label('telefono') }}
            {{ Form::number('telefono', $client->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

         <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
            {{ Form::label('Num de invitados Permitidos (Adultos)') }}
            {{ Form::number('num_invitados_perm', $client->num_invitados_perm, ['class' => 'form-control' . ($errors->has('num_invitados_perm') ? ' is-invalid' : ''), 'placeholder' => 'Adultos']) }}
            {!! $errors->first('num_invitados_perm', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
            {{ Form::label('Num de invitados Permitidos (Niños)') }}
            {{ Form::number('num_invitados_perm_n', $client->num_invitados_perm_n, ['class' => 'form-control' . ($errors->has('num_invitados_perm_n') ? ' is-invalid' : ''), 'placeholder' => 'Niños']) }}
            {!! $errors->first('num_invitados_perm_n', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
            {{ Form::label('QR') }}
            {{ Form::file('qr', $client->qr, ['class' => 'form-control' . ($errors->has('qr') ? ' is-invalid' : ''), 'placeholder' => 'Niños']) }}
            {!! $errors->first('qr', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
           <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

