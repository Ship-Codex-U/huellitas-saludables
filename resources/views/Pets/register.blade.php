<x-app-layout>
    <div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Registrar Mascota</h4>
                        </div>
                        <div class="card-action">
                            <a href="{{route('mascotas.index')}}" class="btn btn-sm btn-primary"
                                role="button">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{route('mascotas.store')}}" method="POST">
                            @csrf

                            <div class="new-pet-info">
                                <h5 class="mb-3">Información de la Mascota</h5>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="customer_id">Cliente: <span class="text-danger">*</span></label>
                                        <select class="form-select" name="customer_id" id="customer_id">
                                            <option value="">Seleccionar Cliente</option>
                                            @foreach($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('customer_id')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="name">Nombre: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nombre" value="{{old('name')}}">
                                        @error('name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="pet_type">Tipo de Mascota: <span class="text-danger">*</span></label>
                                        <select class="form-select" name="pet_type" id="pet_type">
                                            <option value="">Seleccionar</option>
                                            <option value="Canino" @if(old('pet_type') == 'Canino') selected @endif>Canino</option>
                                            <option value="Felino" @if(old('pet_type') == 'Felino') selected @endif>Felino</option>
                                            <option value="Ave" @if(old('pet_type') == 'Ave') selected @endif>Ave</option>
                                            <option value="Roedor" @if(old('pet_type') == 'Roedor') selected @endif>Roedor</option>
                                        </select>
                                        @error('pet_type')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="breed">Raza: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="breed" name="breed"
                                            placeholder="Raza" value="{{old('breed')}}">
                                        @error('breed')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="weight">Peso:</label>
                                        <input type="text" class="form-control" id="weight" name="weight"
                                            placeholder="Peso" value="{{old('weight')}}">
                                        @error('weight')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="height">Altura:</label>
                                        <input type="text" class="form-control" id="height" name="height"
                                            placeholder="Altura" value="{{old('height')}}">
                                        @error('height')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="form-group col-mb-3">
                                        <input type="checkbox" class="form-check-input" id="stay_on_this_page" name="stay_on_this_page" value="1" @checked(old('stay_on_this_page'))>
                                        <label class="form-check-label" for="stay_on_this_page">Quedarse en esta misma página</label>
                                        @error('stay_on_this_page')
                                            <div>
                                                <span class="text-danger">{{$message}}</span>
                                             </div>
                                        @enderror
                                    </div>
                                </div>

                                <hr>

                                <button type="submit" class="btn btn-primary">Registrar Mascota</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

