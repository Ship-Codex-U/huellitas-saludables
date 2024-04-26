<x-app-layout>
    <div>
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Registrar nueva Mascota</h4>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('mascotas.index') }}" class="btn btn-sm btn-primary" role="button">Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mascotas.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="new-customer-info">
                                <div class="row">
                                    <div class="form-group col-md-6" id="nameField" style="display: none;">
                                        <label class="form-label" for="name">Nombre: <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required value="{{ old('name') }}">
                                        @error('name')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="customer_id">Cliente: <span class="text-danger">*</span></label>
                                        <!-- Agrega un campo de selección para el cliente -->
                                        <select name="customer_id" class="form-control" id="customerSelect" required>
                                            <option value="">Seleccionar</option>
                                            <!-- Aquí puedes mostrar la lista de clientes disponibles -->
                                            <!-- Ejemplo: -->
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('customer_id')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Agregar div condicional para mostrar las opciones de mascota -->
                                    <div id="petOptions" style="display: none;">
                                        <!-- Aquí los campos para seleccionar el tipo de mascota y la raza -->
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="pet_type_id">Tipo de mascota: <span class="text-danger">*</span></label>
                                            <!-- Agrega un campo de selección para el tipo de mascota -->
                                            <select name="pet_type_id" class="form-control" id="petTypeSelect" required>
                                                <option value="">Seleccionar</option>
                                                <option value="1">Canino</option>
                                                <option value="2">Felino</option>
                                                <option value="3">Ave</option>
                                                <option value="4">Roedor</option>
                                            </select>
                                            @error('pet_type_id')
                                                <div>
                                                    <span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6" id="breedSelectField" style="display: none;">
                                            <label class="form-label" for="breed">Raza: <span class="text-danger">*</span></label>
                                            <!-- Agregar un campo de selección para la raza -->
                                            <select name="breed" class="form-control" id="breedSelect" required>
                                                <option value="">Seleccionar</option>
                                                <!-- Agregar opciones de razas para cada tipo de mascota -->
                                            </select>
                                            <!-- Agregar una caja de texto para la raza "Otro" -->
                                            <input type="text" name="other_breed" class="form-control mt-2" id="otherBreedInput" placeholder="Especificar otra raza" style="display: none;">
                                            @error('breed')
                                                <div>
                                                    <span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="weight">Peso:</label>
                                            <input type="text" name="weight" class="form-control" placeholder="Peso" value="{{ old('weight') }}">
                                            @error('weight')
                                                <div>
                                                    <span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="height">Altura:</label>
                                            <input type="text" name="height" class="form-control" placeholder="Altura" value="{{ old('height') }}">
                                            @error('height')
                                                <div>
                                                    <span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Registrar Mascota</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    // Objeto JavaScript que contiene las razas para cada tipo de mascota
    var breedOptions = {
        1: ['Golden Retriever', 'Labrador Retriever', 'Bulldog', 'Poodle', 'German Shepherd', 'Beagle', 'Rottweiler', 'Yorkshire Terrier', 'Dachshund', 'Mestizo','Otro'],
        2: ['Maine Coon', 'Siamese', 'Persian', 'Ragdoll', 'British Shorthair', 'Sphynx', 'Bengal', 'Russian Blue', 'Scottish Fold', 'Mestizo','Otro'],
        3: ['Canario', 'Periquito', 'Cacatúa', 'Loro', 'Papagayo', 'Ninfas', 'Agapornis', 'Loros Amazonas', 'Looros Pionus', 'Loros Mestizo', 'Otro'],
        4: ['Hámster', 'Cobaya', 'Conejo', 'Chinchilla', 'Jerbo', 'Rata', 'Ratón', 'Erizo', 'Hurón', 'Degú', 'Otro']
    };

    // Función para actualizar las opciones de raza según el tipo de mascota seleccionado
    document.getElementById('petTypeSelect').addEventListener('change', function() {
        var breedSelectField = document.getElementById('breedSelectField');
        var breedSelect = document.getElementById('breedSelect');
        var otherBreedInput = document.getElementById('otherBreedInput');
        breedSelect.innerHTML = ''; // Limpiar opciones anteriores
        var selectedType = this.value;
        if (selectedType !== '') {
            breedOptions[selectedType].forEach(function(breed) {
                var option = document.createElement('option');
                option.value = breed;
                option.text = breed;
                breedSelect.appendChild(option);
            });
            breedSelectField.style.display = 'block'; // Mostrar el campo de selección de raza
        } else {
            breedSelectField.style.display = 'none'; // Ocultar el campo de selección de raza si no se selecciona ningún tipo de mascota
        }
    });

    // Función para mostrar u ocultar la caja de texto para la raza "Otros"
    document.getElementById('breedSelect').addEventListener('change', function() {
        var otherBreedInput = document.getElementById('otherBreedInput');
        if (this.value === 'Otro') {
            otherBreedInput.style.display = 'block'; // Mostrar la caja de texto para "Otros"
        } else {
            otherBreedInput.style.display = 'none'; // Ocultar la caja de texto si se selecciona una raza diferente
        }
    });

    // Función para mostrar u ocultar el campo de nombre y las opciones de mascota según el cliente seleccionado
    document.getElementById('customerSelect').addEventListener('change', function() {
        var petOptions = document.getElementById('petOptions');
        var nameField = document.getElementById('nameField');
        if (this.value !== '') {
            petOptions.style.display = 'block';
            nameField.style.display = 'block';
        } else {
            petOptions.style.display = 'none';
            nameField.style.display = 'none';
        }
    });
</script>
