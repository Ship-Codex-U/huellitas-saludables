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
                   <div class="new-user-info">
                         <hr>
                         <h5 class="mb-3">Información del empleado</h5>
                         <div class="row">
                            <div class="form-group col-md-6">
                               <label class="form-label" for="fname">Nombre: <span class="text-danger">*</span></label>
                               <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name')}}" readonly disabled>
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="lname">Apellido Paterno: <span class="text-danger">*</span></label>
                               <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" value="{{old('last_name')}}" readonly disabled>
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="add1">Posición o puesto de trabajo:</label>
                               <input type="text" class="form-control" id="position" name="position" placeholder="Posición" value="{{old('last_name')}}" readonly disabled>
                            </div>
                         </div>

                         <hr>
                         <h5 class="mb-3">Estatus y Rol</h5>
                         <div class="row">
                             <div class="form-group col-md-6">
                                 <label class="form-label" for="position">Rol: <span class="text-danger">*</span></label></label>
                                 <select class="form-select" data-trigger name="position" id="position" value="{{old('position_type_id')}}">
                                     <option value="">Seleccione una opción</option>

                                     {{--
                                     @foreach ($positionType as $type => $id)
                                         <option value="{{$id}}">{{$type}}</option>
                                     @endforeach
                                     --}}

                                 </select>
                             </div>
                             <div class="form-group col-md-6">
                                 <label class="form-label" for="position">Estatus: <span class="text-danger">*</span></label></label>
                                 <select class="form-select" data-trigger name="position" id="position" value="{{old('position_type_id')}}">
                                     <option value="">Seleccione una opción</option>

                                     {{--
                                     @foreach ($positionType as $type => $id)
                                         <option value="{{$id}}">{{$type}}</option>
                                     @endforeach
                                     --}}

                                 </select>
                             </div>
                          </div>

                         <hr>
                         <h5 class="mb-3">Credenciales</h5>
                         <div class="row">
                            <div class="form-group col-md-12">
                               <label class="form-label" for="uname">Correo: <span class="text-danger">*</span></label>
                               <input type="email" class="form-control" id="email" name="email" placeholder="mail@example.com" value="{{old('email')}}" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="pass">Contraseña:</label>
                               <input class="form-control" type="password" placeholder="********"  name="password" value="{{''}}" required autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="rpass">Repite la Contraseña:</label>
                               <input class="form-control" type="password" placeholder="********"  name="password" value="{{''}}" required autocomplete="off">
                            </div>
                         </div>
                         <button type="submit" class="btn btn-primary">Registrar Usuario</button>
                   </div>
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
                url:'/empleados/' + employeeID,
                success:function(data){
                    if(data.status == '404'){
                        alert('No se encontró ningún empleado con ese ID');
                    }else{
                        if(data.status == '405'){
                            alert('Este empleado ya tiene un rol asignado');
                        }else{
                            $('#name').val(data.name);
                            $('#last_name').val(data.last_name);
                            $('#position').val(data.positionType);
                            $('email').val(data.email);
                        }
                    }
                    }
                });
        } else {
            alert('Por favor ingrese el numero de empleado valido');
        }
        });
    });
    </script>
 </x-app-layout>
