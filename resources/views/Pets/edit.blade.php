<x-app-layout>
    <div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Editar Mascota</h4>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('mascotas.index') }}" class="btn btn-sm btn-primary" role="button">Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="new-pet-info">
                                <h5 class="mb-3">Información de la Mascota</h5>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="customer_id">Cliente: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="customer_search" placeholder="Buscar Cliente" value="{{ $mascota->customer->name }}" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="name">Nombre: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ $mascota->name }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="pet_type">Tipo de Mascota: <span class="text-danger">*</span></label>
                                        <select class="form-select" name="pet_type" id="pet_type">
                                            <option value="">Seleccionar</option>
                                            <option value="Canino" @if($mascota->pet_type == 'Canino') selected @endif>Canino</option>
                                            <option value="Felino" @if($mascota->pet_type == 'Felino') selected @endif>Felino</option>
                                            <option value="Ave" @if($mascota->pet_type == 'Ave') selected @endif>Ave</option>
                                            <option value="Roedor" @if($mascota->pet_type == 'Roedor') selected @endif>Roedor</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="breed">Raza: <span class="text-danger">*</span></label>
                                        <select class="form-select" name="breed" id="breed">
                                            <option value="">Seleccionar</option>
                                            <option value="Mestizo" @if($mascota->breed == 'Mestizo') selected @endif>Mestizo</option>
                                            <option value="Otro" @if($mascota->breed == 'Otro') selected @endif>Otro</option>
                                        </select>
                                        <input type="text" class="form-control mt-2" id="other_breed" name="other_breed" placeholder="Especificar otra raza" value="{{ $mascota->breed }}" style="display: none;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="weight">Peso:</label>
                                        <input type="text" class="form-control" id="weight" name="weight" placeholder="Peso" value="{{ $mascota->weight }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="height">Altura:</label>
                                        <input type="text" class="form-control" id="height" name="height" placeholder="Altura" value="{{ $mascota->height }}">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary">Actualizar Mascota</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function(){
        $('#pet_type').on('change', function(){
            var selectedPetType = $(this).val();
            var commonBreeds = [];
            switch(selectedPetType) {
                case 'Canino':
                    commonBreeds = ['Labrador Retriever', 'Bulldog', 'Beagle', 'Poodle', 'Golden Retriever', 'German Shepherd', 'Boxer', 'Siberian Husky', 'Dachshund', 'Yorkshire Terrier', 'Chihuahua', 'Shih Tzu', 'Pug', 'Rottweiler', 'Doberman Pinscher', 'Mestizo', 'Otro'];
                    break;
                case 'Felino':
                    commonBreeds = ['Maine Coon', 'Siamese', 'Persian', 'Ragdoll', 'British Shorthair', 'Sphynx', 'Bengal', 'Abyssinian', 'Scottish Fold', 'Norwegian Forest Cat', 'Birman', 'Russian Blue', 'Devon Rex', 'Manx', 'American Shorthair', 'Mestizo', 'Otro'];
                    break;
                case 'Ave':
                    commonBreeds = ['Periquito', 'Canario', 'Agapornis', 'Cacatúa', 'Loro', 'Cotorra', 'Ninfa', 'Jilguero', 'Diamante Mandarín', 'Paloma', 'Papagayo', 'Guacamayo', 'Ninfálide', 'Cardenal', 'Pardillo', 'Mestizo', 'Otro'];
                    break;
                case 'Roedor':
                    commonBreeds = ['Hamster', 'Conejo', 'Cobaya', 'Ratón', 'Jerbo', 'Hámster Ruso', 'Hámster Dorado', 'Chinchilla', 'Degú', 'Rata', 'Hurón', 'Erizo', 'Ardilla', 'Marmota', 'Capibara', 'Mestizo', 'Otro'];
                    break;
                default:
                    commonBreeds = ['Mestizo', 'Otro'];
            }
            var breedSelect = $('#breed');
            breedSelect.empty().append('<option value="">Seleccionar</option>');
            $.each(commonBreeds, function(index, value){
                breedSelect.append('<option value="' + value + '">' + value + '</option>');
            });
            // Show or hide the input field for other breed based on selection
            if (selectedPetType === 'Otro') {
                $('#other_breed').show();
            } else {
                $('#other_breed').hide();
            }
        });
    });
</script>
