<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader ?? 'Huellitas Saludables'" :descriptionSubHeader="$descriptionSubHeader ?? 'Veterinaria'">
    <div>
       {!! Form::open(['route' => ['clientes.store'], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
       <div class="row">
          <div class="col-xl-12 col-lg-8">
             <div class="card">

                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Alta de empleado</h4>
                   </div>
                   <div class="card-action">
                         <a href="{{route('clientes.index')}}" class="btn btn-sm btn-primary" role="button">Regresar</a>
                   </div>
                </div>

                <div class="card-body">
                   <div class="new-user-info">
                         <div class="row">
                            <div class="form-group col-md-6">
                               <label class="form-label" for="name">Nombre: <span class="text-danger">*</span></label>
                               {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="last_name">Apellido: <span class="text-danger">*</span></label>
                               {{ Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => 'Apellido' ,'required']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="address">Dirección:</label>
                               {{ Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => 'Dirección']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="ciudad">Ciudad:</label>
                               {{ Form::text('ciudad', old('ciudad'), ['class' => 'form-control', 'placeholder' => 'Ciudad']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="email">Correo Electrónico: <span class="text-danger">*</span></label>
                               {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Ingrese correo electrónico', 'required']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="phone_number">Número de Teléfono:</label>
                               {{ Form::text('phone_number', old('phone_number'), ['class' => 'form-control', 'placeholder' => 'Número de Teléfono']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="alternative_contact_name">Nombre de Contacto Alternativo:</label>
                               {{ Form::text('alternative_contact_name', old('alternative_contact_name'), ['class' => 'form-control', 'placeholder' => 'Nombre de Contacto Alternativo']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="alternative_contact_phone_number">Número de Teléfono de Contacto Alternativo:</label>
                               {{ Form::text('alternative_contact_phone_number', old('alternative_contact_phone_number'), ['class' => 'form-control', 'placeholder' => 'Número de Teléfono de Contacto Alternativo']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="position_type_id">ID de Tipo de Posición:</label>
                               {{ Form::number('position_type_id', old('position_type_id'), ['class' => 'form-control', 'placeholder' => 'ID de Tipo de Posición']) }}
                            </div>
                         </div>
                         <hr>
                         <h5 class="mb-3">Seguridad</h5>
                         <div class="row">
                            <div class="form-group col-md-12">
                               <label class="form-label" for="username">Nombre de Usuario: <span class="text-danger">*</span></label>
                               {{ Form::text('username', old('username'), ['class' => 'form-control', 'required', 'placeholder' => 'Ingrese nombre de usuario']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="password">Contraseña:</label>
                               {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="password_confirmation">Repetir Contraseña:</label>
                               {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Repetir Contraseña']) }}
                            </div>
                         </div>
                         <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                   </div>
                </div>

             </div>
          </div>
         </div>
         {!! Form::close() !!}
    </div>
 </x-app-layout>

