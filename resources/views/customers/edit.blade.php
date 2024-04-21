<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader" :descriptionSubHeader="$descriptionSubHeader">
    <div>
       <div class="row">
          <div class="col-xl-12 col-lg-8">
             <div class="card">

                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Actualizar Cliente</h4>
                   </div>
                   <div class="card-action">
                         <a href="{{route('clientes.index')}}" class="btn btn-sm btn-primary" role="button">Regresar</a>
                   </div>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('clientes.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="new-user-info">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="name">Nombre: <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required value="{{old('name', $customer->name)}}">
                                    @error('name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="last_name">Apellido: <span class="text-danger">*</span></label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Apellido" required value="{{old('last_name', $customer->last_name)}}">
                                    @error('last_name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="address">Dirección:</label>
                                    <input type="text" name="address" class="form-control" placeholder="Dirección" value="{{old('address', $customer->address)}}">
                                    @error('address')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="city">Ciudad:</label>
                                    <input type="text" name="city" class="form-control" placeholder="Ciudad" value="{{old('city', $customer->city)}}">
                                    @error('city')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="email">Correo electrónico: <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Correo electrónico" value="{{old('email', $customer->email)}}">
                                    @error('email')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="phone_number">Número de teléfono:</label>
                                    <input type="text" name="phone_number" class="form-control" placeholder="Número de teléfono" value="{{old('phone_number', $customer->phone_number)}}">
                                    @error('phone_number')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="alternative_contact_name">Nombre de contacto alternativo:</label>
                                    <input type="text" name="alternative_contact_name" class="form-control" placeholder="Nombre de contacto alternativo" value="{{old('alternative_contact_name', $customer->alternative_contact_name)}}">
                                    @error('alternative_contact_name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="alternative_contact_phone_number">Número de teléfono de contacto alternativo:</label>
                                    <input type="text" name="alternative_contact_phone_number" class="form-control" placeholder="Número de teléfono de contacto alternativo" value="{{old('alternative_contact_phone_number', $customer->alternative_contact_phone_number)}}">
                                    @error('alternative_contact_phone_number')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                        </div>
                    </form>
                </div>
             </div>
          </div>
         </div>
    </div>
 </x-app-layout>
