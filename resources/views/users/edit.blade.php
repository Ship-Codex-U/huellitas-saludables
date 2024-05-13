<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader" :descriptionSubHeader="$descriptionSubHeader">
    <div>
       <div class="row">
            <form action="{{route('usuarios.update', $user->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Información General  - Empleado</h4>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="idemployee">ID del empleado:</label>
                                    <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{old('employee_id', $user->employee->id)}}" readonly>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-label" for="add1">Puesto de trabajo:</label>
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Posición" value="{{old('position', $user->employee->positionType->type)}}" readonly>
                                    @error('position')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-label" name="name" for="fname">Nombre:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name', $user->employee->name)}}" readonly>
                                    @error('name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="lname">Apellido Paterno:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" value="{{old('last_name', $user->employee->last_name)}}" readonly>
                                    @error('last_name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-8">
                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Actualización - Usuario</h4>
                                </div>
                                <div class="card-action">
                                        <a href="{{route('usuarios.index')}}" class="btn btn-sm btn-primary" role="button">Regresar</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="new-user-info">

                                    <h5 class="mb-3">Cambio de Rol</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="position">Rol: <span class="text-danger">*</span></label></label>
                                            <select class="form-select" data-trigger name="role" id="role" value="{{old('role')}}" @if($diableRoleInput) disabled @endif>
                                                <option value="">Seleccione una opción</option>

                                                @foreach ($userRoles as $type => $id)
                                                    <option value="{{$id}}"  @if(old('role', $user->roles->first()->id) == $id) selected @endif>{{$type}}</option>
                                                @endforeach

                                            </select>
                                            @error('role')
                                                <div>
                                                    <span class="text-danger">{{$message}}</span>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <h5 class="mb-3">Estatus</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="position">Estatus: <span class="text-danger">*</span></label></label>
                                            <select class="form-select" data-trigger name="status_e" id="status_e" @if($diableStatusInput) disabled @endif>
                                                <option value="">Seleccione una opción</option>

                                                @foreach ($userStatus as $status => $id)
                                                    <option value="{{$id}}"  @if(old('status_e', $user->user_status_id) == $id) selected @endif>{{$status}}</option>
                                                @endforeach

                                            </select>
                                            @error('status_e')
                                                <div>
                                                    <span class="text-danger">{{$message}}</span>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <hr>
                                    <h5 class="mb-3">Credenciales</h5>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                        <label class="form-label" for="uname">Correo: <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="mail@example.com" value="{{old('email', $user->email)}}" autocomplete="off">
                                        @error('email')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="pass">Contraseña:</label>
                                            <input class="form-control" type="password" placeholder="Nueva Contraseña"  name="password" id="password" @error('password') is-invalid @enderror autocomplete="current-password">
                                            @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                            @error('password')
                                                <div>
                                                    <span class="text-danger">{{$message}}</span>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="rpass">Repite la Contraseña:</label>
                                            <input class="form-control" type="password" placeholder="Confirmar Contraseña"  name="password_confirmation" id="password_confirmation" @error('password') is-invalid @enderror autocomplete="current-password">
                                        </div>
                                    </div>
                                    <hr><hr>
                                    <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                                </div>

                            </div>
                        </div>

                    </div>
            </form>
        </div>
        <hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
    </div>
 </x-app-layout>
