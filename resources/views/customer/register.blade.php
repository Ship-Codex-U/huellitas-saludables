<x-app-layout>
    <div>
       <form method="POST" action="{{ route('clientes.store') }}" enctype="multipart/form-data">
       @csrf
       <div class="row">
          <div class="col-xl-12 col-lg-8">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Registrar nuevo Cliente</h4>
                   </div>
                   <div class="card-action">
                         <a href="{{route('clientes.index')}}" class="btn btn-sm btn-primary" role="button">Back</a>
                   </div>
                </div>
                <div class="card-body">
                   <div class="new-user-info">
                         <div class="row">
                            <div class="form-group col-md-6">
                               <label class="form-label" for="name">Nombre: <span class="text-danger">*</span></label>
                               <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="last_name">Apellido: <span class="text-danger">*</span></label>
                               <input type="text" name="last_name" class="form-control" placeholder="Apellido" required>
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="address">Dirección:</label>
                               <input type="text" name="address" class="form-control" placeholder="Dirección">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="ciudad">Ciudad:</label>
                               <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="email">Correo electrónico: <span class="text-danger">*</span></label>
                               <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="phone_number">Número de teléfono:</label>
                               <input type="text" name="phone_number" class="form-control" placeholder="Número de teléfono">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="alternative_contact_name">Nombre de contacto alternativo:</label>
                               <input type="text" name="alternative_contact_name" class="form-control" placeholder="Nombre de contacto alternativo">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="alternative_contact_phone_number">Número de teléfono de contacto alternativo:</label>
                               <input type="text" name="alternative_contact_phone_number" class="form-control" placeholder="Número de teléfono de contacto alternativo">
                            </div>
                         </div>

                         <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                   </div>
                </div>
             </div>
          </div>
         </div>
       </form>
    </div>
 </x-app-layout>
