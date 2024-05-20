<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader" :descriptionSubHeader="$descriptionSubHeader">
    <div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Citas</h4>
                        </div>
                    </div>

                    <div class="card-body" id="calendar-a">

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('dev'))
        <div class="modal fade" id="eventM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" name="modalTitle">Registrar Cita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <style>
                        .suggestionCustomerList {
                            padding: 5px;
                            cursor: pointer;
                        }

                        .suggestionCustomerList:hover {
                            background-color: #f0f0f0;
                        }
                    </style>
                    <div class="modal-body">
                        <form action="" id="customerForm">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="start">Fecha</label>
                                    <input type="text" class="form-control" id="startDate" name="startDate" aria-describedby="helpId">
                                    @error('idCustomer')
                                        <div>
                                            <span class="text-danger">Inserta una fecha</span>
                                        </div>
                                    @enderror

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="end">Hora</label>
                                    <input type="text" class="form-control" id="startTime" name="startTime" aria-describedby="helpId">
                                    @error('idCustomer')
                                        <div>
                                            <span class="text-danger">inserta una fecha</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="title">Titulo</label>
                                    <input type="text" class="form-control" id="title" name="title" aria-describedby="helpId" value="Cita" placeholder="Titulo">
                                    @error('title')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                            </div>
                                    @enderror

                                    <input type="hidden" id="selectedCustomerId" name="idCustomer">
                                    <label class="form-label" for="name">Cliente: <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="searchCustomerInput" name="nameCustomer" placeholder="Buscar Cliente" value="">
                                    <ul id="suggestionCustomerList"></ul>
                                    @error('idCustomer')
                                        <div>
                                            <span class="text-danger">Seleccione un cliente</span>
                                        </div>
                                    @enderror

                                    <input type="hidden" id="selectedPetId" name="idPet">
                                    <label class="form-label" for="name" value="">Mascota: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="searchPetInput" name="namePet" placeholder="Buscar Mascota">
                                    <ul id="suggestionPetList"></ul>
                                    @error('idPet')
                                        <div>
                                            <span class="text-danger">Seleccione una mascota</span>
                                        </div>
                                    @enderror

                                    <input type="hidden" id="selectedVeterinarianId" name="idVeterian">
                                    <label class="form-label" for="name" value="">veterinarix: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="searchVeterinarianInput" name="nameVeterian" placeholder="Buscar Veterinarix">
                                    <ul id="suggestionVeterinarianList"></ul>
                                    @error('idVeterian')
                                        <div>
                                            <span class="text-danger">Seleccione un veterinario</span>
                                        </div>
                                    @enderror

                                    <label class="form-label" for="last_name">Comentarios: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="comments" name="comments" placeholder="Comentarios">

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-mb-3">
                                    <input type="checkbox" class="form-check-input" id="send_confirmation_mail" name="send_confirmation_mail" value="1" @checked(old('send_confirmation_mail'))>
                                    <label class="form-check-label" for="send_confirmation_mail">Enviar correo de confirmación al cliente</label>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="clearButton">Limpiar</button>
                        <button type="button" class="btn btn-success" id="saveButton">Registrar Cita</button>
                    </div>
                </div>
            </div>
        </div>
        @endif


        <!-- Modal -->
        <div class="modal fade" id="eventMD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" name="modalTitle">Información Cita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <style>
                        .suggestionCustomerList {
                            padding: 5px;
                            cursor: pointer;
                        }

                        .suggestionCustomerList:hover {
                            background-color: #f0f0f0;
                        }
                    </style>
                    <div class="modal-body">
                        <form action="" id="customerFormMD">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="hidden" id="selectedEventIdMD" name="idEventMD">
                                    <label for="start">Inicio</label>
                                    <input type="text" class="form-control" id="startDateMD" name="startDateMD" aria-describedby="helpId">
                                    @error('idCustomer')
                                        <div>
                                            <span class="text-danger">Inserta una fecha</span>
                                        </div>
                                    @enderror

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="end">Fin</label>
                                    <input type="text" class="form-control" id="startTimeMD" name="startTimeMD" aria-describedby="helpId">
                                    @error('idCustomer')
                                        <div>
                                            <span class="text-danger">inserta una fecha</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="title">Titulo</label>
                                    <input type="text" class="form-control" id="titleMD" name="titleMD" aria-describedby="helpId" value="Cita" placeholder="Titulo">
                                    @error('title')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                            </div>
                                    @enderror

                                    <input type="hidden" id="selectedCustomerIdMD" name="idCustomerMD">
                                    <label class="form-label" for="name">Cliente: <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="searchCustomerInputMD" name="nameCustomerMD" placeholder="Buscar Cliente" value="">
                                    <ul id="suggestionCustomerListMD"></ul>
                                    @error('idCustomer')
                                        <div>
                                            <span class="text-danger">Seleccione un cliente</span>
                                        </div>
                                    @enderror

                                    <input type="hidden" id="selectedPetIdMD" name="idPetMD">
                                    <label class="form-label" for="name" value="">Mascota: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="searchPetInputMD" name="namePetMD" placeholder="Buscar Mascota">
                                    <ul id="suggestionPetListMD"></ul>
                                    @error('idPet')
                                        <div>
                                            <span class="text-danger">Seleccione una mascota</span>
                                        </div>
                                    @enderror

                                    <input type="hidden" id="selectedVeterinarianIdMD" name="idVeterianMD">
                                    <label class="form-label" for="name" value="">veterinarix: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="searchVeterinarianInputMD" name="nameVeterianMD" placeholder="Buscar Veterinarix">
                                    <ul id="suggestionVeterinarianListMD"></ul>
                                    @error('idVeterian')
                                        <div>
                                            <span class="text-danger">Seleccione un veterinario</span>
                                        </div>
                                    @enderror

                                    <label class="form-label" for="">Comentarios: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="commentsMD" name="commentsMD" placeholder="Comentarios">

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="status_e">Estatus: <span class="text-danger">*</span></label></label>
                                    <select class="form-select" data-trigger name="status_eMD" id="status_eMD">
                                        <option value="">Seleccione una opción</option>

                                        @foreach ($appointmentStatus as $status => $id)
                                            <option value="{{$id}}" >{{$status}}</option>
                                        @endforeach

                                    </select>

                                    @error('status_e')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-mb-3">
                                    <input type="checkbox" class="form-check-input" id="send_update_mailMD" name="send_update_mailMD" value="1" @checked(old('send_confirmation_mail'))>
                                    <label class="form-check-label" for="send_confirmation_mail">Enviar correo de actualización al cliente</label>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="clearButtonMD">Limpiar</button>
                        <button type="button" class="btn btn-danger" id="deleteButtonMD">Eliminar</button>
                        <button type="button" class="btn btn-warning" id="editButtonMD">Modificar</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/calendar/calendar.js')}}"></script>
        <script>
            $(document).ready(function() {
                // JavaScript con jQuery - Formulario Create
                $('#searchCustomerInput').on('input', function() {
                    var searchQuery = $(this).val();

                    if (searchQuery.trim() === '') {
                        // Si el campo de búsqueda está vacío, limpiamos la lista de sugerencias
                        $('#suggestionCustomerList').empty();
                        $('#searchPetInput').prop('disabled', true);
                        return;
                    }

                    $.ajax({
                        url: '/clientes/buscar-clientes',
                        method: 'GET',
                        data: {
                            searchQuery: searchQuery
                        },
                        success: function(response) {
                            displayCustomerSuggestions(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al obtener sugerencias de clientes:', error);
                        }
                    });
                });

                // Buscar veterinarios cuando el campo recibe foco
                $('#searchPetInput').on('focus', function() {
                    if ($('#searchPetInput').val().trim() === '') {
                        $.ajax({
                            url: '/clientes/' + selectedCustomerId + '/mascotas',
                            method: 'GET',
                            success: function(response) {
                                displayPetSuggestions(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error al obtener sugerencias de veterinarios:', error);
                            }
                        });
                    }
                });

                $('#searchPetInput').on('input', function() {
                    var searchQuery = $(this).val();

                    if (searchQuery.trim() === '' || !selectedCustomerId) {
                        // Si el campo de búsqueda está vacío o no hay un cliente seleccionado, limpiamos la lista de sugerencias
                        $('#suggestionPetList').empty();
                        return;
                    }

                    $.ajax({
                        url: '/clientes/' + selectedCustomerId + '/mascotas',
                        method: 'GET',
                        success: function(response) {
                            displayPetSuggestions(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al obtener sugerencias de mascotas:', error);
                        }
                    });
                });

                // Buscar veterinarios cuando el campo recibe foco
                $('#searchVeterinarianInput').on('focus', function() {
                    if ($('#searchVeterinarianInput').val().trim() === '') {
                        $.ajax({
                            url: '/empleado/buscar-veterinarios',
                            method: 'GET',
                            data: { searchQuery: '' }, // Enviamos una cadena vacía para obtener todos los veterinarios
                            success: function(response) {
                                displayVeterinarianSuggestions(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error al obtener sugerencias de veterinarios:', error);
                            }
                        });
                    }
                });

                $('#searchVeterinarianInput').on('input', function() {
                    var searchQuery = $(this).val();

                    if (searchQuery.trim() === '') {
                        $('#suggestionVeterinarianList').empty();
                        return;
                    }

                    $.ajax({
                        url: '/empleado/buscar-veterinarios',
                        method: 'GET',
                        data: { searchQuery: searchQuery },
                        success: function(response) {
                            displayVeterinarianSuggestions(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al obtener sugerencias de veterinarios:', error);
                        }
                    });
                });

                function displayCustomerSuggestions(suggestions) {
                    var suggestionList = $('#suggestionCustomerList');
                    suggestionList.empty();
                    $.each(suggestions, function(index, customer) {
                        var listItem = $('<li>').text(customer.id + ' - ' + customer.full_name);
                        listItem.addClass('suggestion-item');
                        listItem.click(function() {
                            $('#searchCustomerInput').val(customer.full_name);
                            $('#selectedCustomerId').val(customer.id);

                            selectedCustomerId = customer.id;
                            suggestionList.empty(); // Limpiar las sugerencias de clientes
                            $('#searchPetInput').val(''); // Limpiar el campo de búsqueda de mascotas
                            $('#suggestionPetList').empty(); // Limpiar la lista de sugerencias de mascotas

                            $.ajax({
                                url: '/clientes/' + selectedCustomerId + '/mascotas',
                                method: 'GET',
                                success: function(response) {
                                    if (response.length === 0) {
                                        // Si no se encontraron mascotas, deshabilitar el campo de búsqueda de mascotas
                                        $('#searchPetInput').prop('disabled', true);
                                    } else {
                                        $('#searchPetInput').prop('disabled', false); // Habilitar campo si hay mascotas
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error('Error al obtener sugerencias de mascotas:', error);
                                }
                            });
                        });
                        suggestionList.append(listItem);
                    });
                }

                function displayPetSuggestions(pets) {
                    var petList = $('#suggestionPetList');
                    petList.empty();
                    $.each(pets, function(index, pet) {
                        var fullName = pet.name; // Concatenar nombre y apellido de la mascota
                        var listItem = $('<li>').text(fullName);
                        listItem.addClass('suggestion-item');
                        listItem.click(function() {
                            $('#searchPetInput').val(fullName);
                            $('#selectedPetId').val(pet.id);
                            petList.empty(); // Limpiar las sugerencias de mascotas
                        });
                        petList.append(listItem);
                    });
                }

                function displayVeterinarianSuggestions(veterinarians) {
                    var vetList = $('#suggestionVeterinarianList');
                    vetList.empty();
                    $.each(veterinarians, function(index, veterinarian) {
                        var listItem = $('<li>').text(veterinarian.id + ' ' + veterinarian.full_name);
                        listItem.addClass('suggestion-item');
                        listItem.click(function() {
                            var time = $("#startTime").val();
                            $('#title').val(veterinarian.name + " -> " + time);
                            $('#searchVeterinarianInput').val(veterinarian.full_name);
                            $('#selectedVeterinarianId').val(veterinarian.id);
                            vetList.empty();
                        });
                        vetList.append(listItem);
                    });
                }



                // JavaScript con jQuery - Formulario Modify-Delete
                $('#searchCustomerInputMD').on('input', function() {
                    var searchQuery = $(this).val();

                    if (searchQuery.trim() === '') {
                        // Si el campo de búsqueda está vacío, limpiamos la lista de sugerencias
                        $('#suggestionCustomerListMD').empty();
                        $('#searchPetInputMD').prop('disabled', true);
                        return;
                    }

                    $.ajax({
                        url: '/clientes/buscar-clientes',
                        method: 'GET',
                        data: {
                            searchQuery: searchQuery
                        },
                        success: function(response) {
                            displayCustomerSuggestionsMD(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al obtener sugerencias de clientes:', error);
                        }
                    });
                });

                // Buscar veterinarios cuando el campo recibe foco
                $('#searchPetInputMD').on('focus', function() {
                    if ($('#searchPetInputMD').val().trim() === '') {
                        $.ajax({
                            url: '/clientes/' + selectedCustomerId + '/mascotas',
                            method: 'GET',
                            success: function(response) {
                                displayPetSuggestionsMD(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error al obtener sugerencias de veterinarios:', error);
                            }
                        });
                    }
                });

                $('#searchPetInputMD').on('input', function() {
                    var searchQuery = $(this).val();

                    if (searchQuery.trim() === '' || !selectedCustomerId) {
                        // Si el campo de búsqueda está vacío o no hay un cliente seleccionado, limpiamos la lista de sugerencias
                        $('#suggestionPetListMD').empty();
                        return;
                    }

                    $.ajax({
                        url: '/clientes/' + selectedCustomerId + '/mascotas',
                        method: 'GET',
                        success: function(response) {
                            displayPetSuggestionsMD(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al obtener sugerencias de mascotas:', error);
                        }
                    });
                });

                // Buscar veterinarios cuando el campo recibe foco
                $('#searchVeterinarianInputMD').on('focus', function() {
                    if ($('#searchVeterinarianInputMD').val().trim() === '') {
                        $.ajax({
                            url: '/empleado/buscar-veterinarios',
                            method: 'GET',
                            data: { searchQuery: '' }, // Enviamos una cadena vacía para obtener todos los veterinarios
                            success: function(response) {
                                displayVeterinarianSuggestionsMD(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error al obtener sugerencias de veterinarios:', error);
                            }
                        });
                    }
                });

                $('#searchVeterinarianInputMD').on('input', function() {
                    var searchQuery = $(this).val();

                    if (searchQuery.trim() === '') {
                        $('#suggestionVeterinarianListMD').empty();
                        return;
                    }

                    $.ajax({
                        url: '/empleado/buscar-veterinarios',
                        method: 'GET',
                        data: { searchQuery: searchQuery },
                        success: function(response) {
                            displayVeterinarianSuggestionsMD(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al obtener sugerencias de veterinarios:', error);
                        }
                    });
                });

                function displayCustomerSuggestionsMD(suggestions) {
                    var suggestionList = $('#suggestionCustomerListMD');
                    suggestionList.empty();
                    $.each(suggestions, function(index, customer) {
                        var listItem = $('<li>').text(customer.id + ' - ' + customer.full_name);
                        listItem.addClass('suggestion-item');
                        listItem.click(function() {
                            $('#searchCustomerInputMD').val(customer.full_name);
                            $('#selectedCustomerIdMD').val(customer.id);

                            selectedCustomerId = customer.id;
                            suggestionList.empty(); // Limpiar las sugerencias de clientes
                            $('#searchPetInputMD').val(''); // Limpiar el campo de búsqueda de mascotas
                            $('#suggestionPetListMD').empty(); // Limpiar la lista de sugerencias de mascotas

                            $.ajax({
                                url: '/clientes/' + selectedCustomerId + '/mascotas',
                                method: 'GET',
                                success: function(response) {
                                    if (response.length === 0) {
                                        // Si no se encontraron mascotas, deshabilitar el campo de búsqueda de mascotas
                                        $('#searchPetInputMD').prop('disabled', true);
                                    } else {
                                        $('#searchPetInputMD').prop('disabled', false); // Habilitar campo si hay mascotas
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error('Error al obtener sugerencias de mascotas:', error);
                                }
                            });
                        });
                        suggestionList.append(listItem);
                    });
                }

                function displayPetSuggestionsMD(pets) {
                    var petList = $('#suggestionPetListMD');
                    petList.empty();
                    $.each(pets, function(index, pet) {
                        var fullName = pet.name; // Concatenar nombre y apellido de la mascota
                        var listItem = $('<li>').text(fullName);
                        listItem.addClass('suggestion-item');
                        listItem.click(function() {
                            $('#searchPetInputMD').val(fullName);
                            $('#selectedPetIdMD').val(pet.id);
                            petList.empty(); // Limpiar las sugerencias de mascotas
                        });
                        petList.append(listItem);
                    });
                }

                function displayVeterinarianSuggestionsMD(veterinarians) {
                    var vetList = $('#suggestionVeterinarianListMD');
                    vetList.empty();
                    $.each(veterinarians, function(index, veterinarian) {
                        var listItem = $('<li>').text(veterinarian.id + ' ' + veterinarian.full_name);
                        listItem.addClass('suggestion-item');
                        listItem.click(function() {
                            var time = $("#startTimeMD").val();
                            $('#titleMD').val(veterinarian.name + " -> " + time);
                            $('#searchVeterinarianInputMD').val(veterinarian.full_name);
                            $('#selectedVeterinarianIdMD').val(veterinarian.id);
                            vetList.empty();
                        });
                        vetList.append(listItem);
                    });
                }




















            });
        </script>
    </div>
</x-app-layout>
