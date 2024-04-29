<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader" :descriptionSubHeader="$descriptionSubHeader">
     <div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Actualización de Datos</h4>
                    </div>
                    <div class="card-action">
                            <a href="{{route('empleados.index')}}" class="btn btn-sm btn-primary" role="button">Regresar</a>
                    </div>
                    </div>

                    <div class="card-body">

                        <form action="{{route('empleados.update', $employee->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="new-employee-info">
                                <h5 class="mb-3">Información del Empleado</h5>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="name">Nombre: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name', $employee->name)}}">
                                        @error('name')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="last_name">Apellidos: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" value="{{old('last_name', $employee->last_name)}}">
                                        @error('last_name')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="date_of_birth">Fecha de nacimiento: <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{old('date_of_birth',  $employee->date_birthday)}}">
                                        @error('date_of_birth')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="email">Correo Electronico: <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="mail@example.com" value="{{old('email', $employee->email)}}">
                                        @error('email')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="phone_number">Numero de Telefono: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="3333221144" value="{{old('phone_number', $employee->phone_number)}}">
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
                                        <label class="form-label" for="state">Estado: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="state" name="state" placeholder="Estado" value="{{old('state', $employee->state)}}">
                                        @error('state')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="city">Municipio: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Municipio" value="{{old('city', $employee->city)}}">
                                        @error('city')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="street_number">Calle y numero: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="street_number" name="street_number" placeholder="Moderna 55" value="{{old('street_number', $employee->street_number)}}">
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
                                        <label class="form-label" for="alternative_contact_name">Nombre: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="alternative_contact_name" name="alternative_contact_name" placeholder="Nombre Completo" value="{{old('alternative_contact_name', $employee->alternative_contact_name)}}">
                                        @error('alternative_contact_name')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="alternative_contact_phone_number">Numero de Telefono: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="alternative_contact_phone_number" name="alternative_contact_phone_number" placeholder="3333221144" value="{{old('alternative_contact_phone_number', $employee->alternative_contact_phone_number)}}">
                                        @error('alternative_contact_phone_number')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>

                                </div>

                                <hr>
                                <h5 class="mb-3">Información Puesto</h5>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="position">Puesto de Trabajo: <span class="text-danger">*</span></label></label>
                                        <select class="form-select" data-trigger name="position" id="position">
                                            <option value="">Seleccione una opción</option>

                                            @foreach ($positionType as $type => $id)
                                                <option value="{{$id}}" @if(old('position', $employee->position_type_id) == $id) selected @endif>{{$type}}</option>
                                            @endforeach

                                        </select>

                                        @error('position')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror

                                    </div>
                                </div>
                                @if (auth()->user()->employee->id !== $employee->id)
                                    <hr>
                                    <h5 class="mb-3">Estatus del empleado</h5>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="status_e">Estatus: <span class="text-danger">*</span></label></label>
                                            <select class="form-select" data-trigger name="status_e" id="status_e">
                                                <option value="">Seleccione una opción</option>

                                                @foreach ($employeeStatus as $status => $id)
                                                    <option value="{{$id}}" @if(old('status_e', $employee->employee_status_id) == $id) selected @endif>{{$status}}</option>
                                                @endforeach

                                            </select>

                                            @error('status_e')
                                                <div>
                                                    <span class="text-danger">{{$message}}</span>
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                @endif

                                <hr>

                                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
 </x-app-layout>
