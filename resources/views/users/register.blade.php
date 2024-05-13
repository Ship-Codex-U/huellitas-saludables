<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader" :descriptionSubHeader="$descriptionSubHeader">
    <div>
       <div class="row">
          <div class="col-xl-3 col-lg-4">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Buscar Empleado</h4>
                   </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="idemployee">ID del empleado: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="employee_id" name="employee_id">
                    </div>
                    <div class="form-group">
                        <button type="button" id="search_employee" class="btn btn-primary">Buscar Empleado</button>
                    </div>
                </div>
             </div>
         </div>
          <div class="col-xl-9 col-lg-8">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Registro nuevo usuario</h4>
                   </div>
                   <div class="card-action">
                         <a href="{{route('usuarios.index')}}" class="btn btn-sm btn-primary" role="button">Regresar</a>
                   </div>
                </div>
                <div class="card-body">
                    <form action="{{route('usuarios.store')}}" method="POST">
                        @csrf

                        <div class="new-user-info">
                            <hr>
                            <h5 class="mb-3">Información del usuario</h5>
                            <div class="row">
                                <input type="hidden" id="number_r" name="number_r"value="{{old('number_r')}}" readonly>

                                <div class="form-group col-md-6">
                                <label class="form-label" name="name" for="fname">Nombre: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name')}}" readonly>
                                @error('name')
                                    <div>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                </div>
                                <div class="form-group col-md-6">
                                <label class="form-label" for="lname">Apellido Paterno: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" value="{{old('last_name')}}" readonly>
                                @error('last_name')
                                    <div>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                </div>
                                <div class="form-group col-md-6">
                                <label class="form-label" for="add1">Posición o puesto de trabajo:</label>
                                <input type="text" class="form-control" id="position" name="position" placeholder="Posición" value="{{old('position')}}" readonly>
                                @error('position')
                                    <div>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                </div>
                            </div>

                            <hr>
                            <h5 class="mb-3">Asignación de Rol</h5>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="position">Rol: <span class="text-danger">*</span></label></label>
                                    <select class="form-select" data-trigger name="role" id="role" value="{{old('role')}}">
                                        <option value="">Seleccione una opción</option>

                                        @foreach ($userRoles as $type => $id)
                                            <option value="{{$id}}"  @if(old('role') == $id) selected @endif>{{$type}}</option>
                                        @endforeach

                                    </select>
                                    @error('role')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>

                            <hr>
                            <h5 class="mb-3">Credenciales</h5>
                            <div class="row">
                                <div class="form-group col-md-12">
                                <label class="form-label" for="uname">Correo: <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="mail@example.com" value="{{old('email')}}" readonly autocomplete="off">
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
                            <button type="submit" class="btn btn-primary">Registrar Usuario</button>
                        </div>

                    </form>

                </div>
             </div>
          </div>
         </div>
    </div>

    <!-- JQuery -->
    <script src="{{asset('js/jquery.js') }} "></script>

    <script>
    $(document).ready(function(){
    // Agrega un event listener al hacer clic en el botón
        $('#search_employee').on('click', function(){

        var regex = /^[0-9]+$/;
        var employeeID = $('#employee_id').val();

        if(regex.test(employeeID)){

            $.ajax({
                type:'GET',
                url:'/empleado/' + employeeID,
                success:function(data){
                    if(data.status == '404'){
                        showAlertWarning("No se encontró ningún empleado con ese ID.");
                    }else if(data.status == '405'){
                        showAlertWarning("Este empleado ya tiene un usuario asignado.");
                    }else if(data.status == '406'){
                        showAlertWarning("Este empleado tiene el estatus de baja.");
                    }else{
                        $('#name').val(data.name);
                        $('#last_name').val(data.last_name);
                        $('#position').val(data.positionType);
                        $('#number_r').val(data.number_r);
                        $('#email').val(data.email);
                    }
                }
              });
        } else {
            showAlertWarning("Por favor ingrese un numero de empleado valido");
        }
        });
    });

    function showAlertWarning($message){
        Swal.fire({
                title: 'Advertencia',
                text: $message,
                icon: 'warning',
                confirmButtonColor: "#3a57e8"
            });
    }
    </script>
 </x-app-layout>
