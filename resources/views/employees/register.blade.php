<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader" :descriptionSubHeader="$descriptionSubHeader">
    <div>
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="card">

                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Registrar Empleado</h4>
                        </div>
                        <div class="card-action">
                            <a href="{{route('empleados.index')}}" class="btn btn-sm btn-primary"
                                role="button">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{route('empleados.store')}}" method="POST">
                            @csrf

                            <div class="new-employee-info">
                                <h5 class="mb-3">Información del Empleado</h5>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="name">Nombre: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nombre" value="{{old('name')}}">
                                        @error('name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="last_name">Apellidos: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            placeholder="Apellidos" value="{{old('last_name')}}">
                                        @error('last_name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="date_of_birth">Fecha de nacimiento: <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                            value="{{old('date_of_birth')}}">
                                        @error('date_of_birth')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="email">Correo Electronico: <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="mail@example.com" value="{{old('email')}}">
                                        @error('email')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="phone_number">Numero de Telefono: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                            placeholder="Numero de telefono" value="{{old('phone_number')}}">
                                        @error('phone_number')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">

                                    <hr>
                                    <h5 class="mb-3">Domicilio</h5>

                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="state">Estado: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="state" name="state"
                                            placeholder="Estado" value="{{old('state')}}">
                                        @error('state')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="city">Municipio: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Municipio" value="{{old('city')}}">
                                        @error('city')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="street_number">Calle y numero: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="street_number" name="street_number"
                                            placeholder="Calle #" value="{{old('street_number')}}">
                                        @error('street_number')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <hr>
                                <h5 class="mb-3">Contacto Alternativo</h5>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="alternative_contact_name">Nombre: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="alternative_contact_name"
                                            name="alternative_contact_name" placeholder="Nombre Completo"
                                            value="{{old('alternative_contact_name')}}">
                                        @error('alternative_contact_name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="alternative_contact_phone_number">Numero de
                                            Telefono: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="alternative_contact_phone_number"
                                            name="alternative_contact_phone_number" placeholder="3333221144"
                                            value="{{old('alternative_contact_phone_number')}}">
                                        @error('alternative_contact_phone_number')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <hr>
                                <h5 class="mb-3">Información Puesto</h5>

                                <!-- <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="role">Rol: <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" name="role" id="role">
                                            <option value="">Seleccione un rol</option>
                                            <option value="secretario">Secretario</option>
                                            <option value="administrador">Administrador</option>
                                            <option value="doctor">Doctor</option>
                                        </select>
                                        @error('role')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div> -->


                                <hr>

                                <div class="row">
                                    <div class="form-group col-mb-3">
                                        <input type="checkbox" class="form-check-input" id="send_confirmation_mail"
                                            name="send_confirmation_mail" value="1">
                                        <label class="form-check-label" for="send_confirmation_mail">Enviar correo de
                                            confirmación al empleado</label>
                                    </div>
                                </div>

                                <hr>

                                <button type="submit" class="btn btn-primary">Registrar Empleado</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>