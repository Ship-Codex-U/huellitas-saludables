document.addEventListener('DOMContentLoaded', function() {
    var formData = document.getElementById("customerForm");
    var formDataMD = document.getElementById("customerFormMD");

    var calendarEl = document.getElementById('calendar-a');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        locale:"es",
        displayEventTime:false,
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'listWeek,timeGridWeek,dayGridMonth'
        },
        views: {
            dayGridMonth: {
              titleFormat: {
                    year: 'numeric',
                    month: 'long'
                }
            },
            timeGridWeek: {
                eventOverlap: true,
                expandRows: true,
                slotEventOverlap: true,
                titleFormat: {
                }
            }
        },
        slotMinTime: '08:00:00',  // Hora de inicio
        slotMaxTime: '18:00:00',  // Hora de finalización
        slotDuration: '01:00:00', // Intervalo de tiempo de 1 hora
        height: 'auto',  // Ajusta la altura automáticamente
        contentHeight: 'auto',  // Ajusta la altura del contenido automáticamente
        validRange: {
            start: new Date(),  // Fecha de inicio válida
            end: new Date().setFullYear(new Date().getFullYear() + 1)  // Un año a partir de hoy
        },
        businessHours: {
            // Configurar horario laboral: lunes a sábado de 8 AM a 6 PM
            daysOfWeek: [1, 2, 3, 4, 5, 6],  // Lunes a sábado
            startTime: '08:00',  // 8 AM
            endTime: '18:00'  // 6 PM
        },
        events: "/citas/todos",
        dateClick:function(info){
            if ($("#eventM").length) {
                // Limpiar todos los campos del formulario
                $('#customerForm')[0].reset();

                 // Obtener la fecha y hora seleccionada por el usuario
                var selectedDate = info.date;

                // Convertir la fecha y hora a la zona horaria de México/Guadalajara
                var mexicoDate = new Date(selectedDate.toLocaleString('en-US', {timeZone: 'America/Mexico_City'}));

                // Obtener día, mes y año por separado
                var day = ('0' + mexicoDate.getDate()).slice(-2); // Agregar cero al día si es necesario
                var month = ('0' + (mexicoDate.getMonth() + 1)).slice(-2); // Agregar cero al mes si es necesario
                var year = mexicoDate.getFullYear();

                // Construir la cadena de fecha en formato d/m/Y
                var selectedDateStr = `${day}/${month}/${year}`;

                // Obtener la fecha y hora por separado
                var selectedTimeStr = selectedDate.toLocaleTimeString('es-MX', {hour: '2-digit', minute:'2-digit'}); // Formato de hora

                // Establecer los valores de inicio y fin en los campos ocultos del formulario
                formData.elements["startDate"].setAttribute('value', selectedDateStr);
                formData.elements["startTime"].setAttribute('value', selectedTimeStr);

                $("#eventM").modal("show");

                // Deshabilitar el campo de búsqueda de mascotas
                $('#searchPetInput').prop('disabled', true);

                // Limpiar listas de sugerencias
                $('#suggestionCustomerList').empty();
                $('#suggestionPetList').empty();
                $('#suggestionVeterinarianList').empty();

                // Deshabilitar el campo de búsqueda de mascotas
                $('#searchPetInput').prop('disabled', true);

                // Limpiar los campos hidden
                $('#selectedCustomerId').val('');
                $('#selectedPetId').val('');
                $('#selectedEmployeeId').val('');
                $('#selectedVeterinarianId').val('');

                formData.elements["title"].setAttribute('value', 'Veterinario -> ' + selectedTimeStr);
                formData.elements["idCustomer"].setAttribute('value', '');
                formData.elements["nameCustomer"].setAttribute('value', '');
                formData.elements["idPet"].setAttribute('value', '');
                formData.elements["namePet"].setAttribute('value', '');
                formData.elements["idVeterian"].setAttribute('value', '');
                formData.elements["nameVeterian"].setAttribute('value', '');
                formData.elements["comments"].setAttribute('value', '');
            }


        },
        eventClick:function(info){
            fetch("/citas/" + info.event.id + "/editar")
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }else{
                    $("#eventMD").modal("show");
                }
                return response.json();
            })
            .then(event => {
                // Deshabilitar el campo de búsqueda de mascotas
                $('#searchPetInputMD').prop('disabled', false);


                formDataMD.elements["idEventMD"].setAttribute('value', event.id);
                formDataMD.elements["startDateMD"].setAttribute('value', event.startDate);
                formDataMD.elements["startTimeMD"].setAttribute('value', event.startTime);
                formDataMD.elements["titleMD"].setAttribute('value', event.title);
                formDataMD.elements["idCustomerMD"].setAttribute('value', event.idCustomer);
                formDataMD.elements["nameCustomerMD"].setAttribute('value', event.customer);
                formDataMD.elements["idPetMD"].setAttribute('value', event.idPet);
                formDataMD.elements["namePetMD"].setAttribute('value', event.pet);
                formDataMD.elements["idVeterianMD"].setAttribute('value', event.idVeterian);
                formDataMD.elements["nameVeterianMD"].setAttribute('value', event.veterian);
                formDataMD.elements["commentsMD"].setAttribute('value', event.comments);
                formDataMD.elements["status_eMD"].value = event.status;
            })
            .catch(error => console.error('Error:', error));
        },
        slotLabelInterval: '01:00:00',
        slotLabelFormat: {
            hour: 'numeric',
            minute: '2-digit',
            omitZeroMinute: false,
            meridiem: false,
            hour12: true  // Formato de 24 horas
        },
        dayHeaderFormat: {
            weekday: 'long',  // "lunes"
            day: 'numeric'  // "20"
        },
        eventDidMount: function(info) {
            var estatus = info.event.extendedProps.appointment_status_id;
            var color;
            switch (estatus) {
                case 1:
                    color = '#3498db';
                    break;
                case 2:
                    color = '#2ecc71';
                    break;
                case 3:
                    color = '#e74c3c';
                    break;
                case 4:
                    color = '#f39c12';
                    break;
                case 5:
                    color = '#9b59b6';
                    break;
                case 6:
                    color = '#00943F';
                    break;

                default:
                    color = 'blue';
            }
            info.el.style.backgroundColor = color;
        },
    });

    calendar.render();

    setInterval(function() {
        calendar.refetchEvents();
    }, 10000);

    if (document.getElementById("saveButton")) {
        document.getElementById("saveButton").addEventListener("click", function() {
            const dataForm = new FormData(formData);
            //console.log(...dataForm); // Desplegamos el contenido de FormData para visualizar los pares clave-valor

            // Convertir FormData a un objeto para poder enviar como JSON
            const formDataObj = Object.fromEntries(dataForm.entries());

            //var csrfToken = dataForm.get("_token");
            var csrfToken = formData.querySelector('input[name="_token"]').value;

            // Enviar datos al servidor usando Fetch
            fetch("/citas", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken
                },
                body: JSON.stringify(formDataObj)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }else{
                    calendar.refetchEvents();
                    $("#eventM").modal("hide");

                    // Deshabilitar el campo de búsqueda de mascotas
                    $('#searchPetInput').prop('disabled', true);

                    // Limpiar todos los campos del formulario
                    $('#customerForm')[0].reset();

                    // Limpiar listas de sugerencias
                    $('#suggestionCustomerList').empty();
                    $('#suggestionPetList').empty();
                    $('#suggestionVeterinarianList').empty();

                    // Deshabilitar el campo de búsqueda de mascotas
                    $('#searchPetInput').prop('disabled', true);

                    // Limpiar los campos hidden
                    $('#selectedCustomerId').val('');
                    $('#selectedPetId').val('');
                    $('#selectedEmployeeId').val('');
                    $('#selectedVeterinarianId').val('');
                }
                return response.json();
            })
            .then(data => {
                console.log("Success:", data);
            })
            .catch((error) => {
                console.error("Error:", error);
            });

        });
    }

    document.getElementById("editButtonMD").addEventListener("click", function() {
        const dataFormMD = new FormData(formDataMD);
        var id = dataFormMD.get('idEventMD');

        console.log(...dataFormMD); // Desplegamos el contenido de FormData para visualizar los pares clave-valor

        dataFormMD.append('_method', 'PUT'); // Agrega el método PUT

        // Convertir FormData a un objeto para poder enviar como JSON
        const formDataObj = Object.fromEntries(dataFormMD.entries());

        //var csrfToken = dataForm.get("_token");
        var csrfToken = formDataMD.querySelector('input[name="_token"]').value;

        // Enviar datos al servidor usando Fetch
        fetch("/citas/" + id, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken
            },
            body: JSON.stringify(formDataObj)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }else{
                calendar.refetchEvents();

                // Deshabilitar el campo de búsqueda de mascotas
                $('#searchPetInputMD').prop('disabled', true);

                // Limpiar todos los campos del formulario
                $('#customerFormMD')[0].reset();

                // Limpiar listas de sugerencias
                $('#suggestionCustomerListMD').empty();
                $('#suggestionPetListMD').empty();
                $('#suggestionVeterinarianListMD').empty();


                // Limpiar los campos hidden
                $('#selectedEventIdMD').val('');
                $('#selectedCustomerIdMD').val('');
                $('#selectedPetIdMD').val('');
                $('#selectedEmployeeIdMD').val('');
                $('#selectedVeterinarianIdMD').val('');
                $("#eventMD").modal("hide");
            }
            return response.json();
        })
        .then(data => {
            console.log("Success:", data);
        })
        .catch((error) => {
            console.error("Error:", error);
        });

    });


    document.getElementById("deleteButtonMD").addEventListener("click", function() {
        const dataForm = new FormData(formDataMD);
        var id = dataForm.get('idEventMD');

        //console.log(...dataForm); // Desplegamos el contenido de FormData para visualizar los pares clave-valor

        dataForm.append('_method', 'DELETE'); // Agrega el método DELETE

        //var csrfToken = dataForm.get("_token");
        var csrfToken = formData.querySelector('input[name="_token"]').value;

        fetch("/citas/" + id, { // Asegúrate de reemplazar 'id' con el ID del registro que deseas eliminar
            method: "DELETE", // Laravel soporta el método POST con un campo _method para DELETE
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken
            },
            body: dataForm // Usa dataForm en lugar de formDataObj
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }else{
                calendar.refetchEvents();
                $("#eventMD").modal("hide");
                $('#customerFormMD')[0].reset();
            }
            return response.json();
        })
        .then(data => {
            console.log("Success:", data);
        })
        .catch((error) => {
            console.error("Error:", error);
        });

    });

    if (document.getElementById("clearButton")) {
        document.getElementById("clearButton").addEventListener("click", function() {
            var startInfo = formData.elements["startDate"].value;
            var endInfo = formData.elements["startTime"].value;
            formData.elements["startDate"].setAttribute('value', startInfo);
            formData.elements["startTime"].setAttribute('value', endInfo);

            // Deshabilitar el campo de búsqueda de mascotas
            $('#searchPetInput').prop('disabled', true);

            // Limpiar todos los campos del formulario
            $('#customerForm')[0].reset();

            // Limpiar listas de sugerencias
            $('#suggestionCustomerList').empty();
            $('#suggestionPetList').empty();
            $('#suggestionVeterinarianList').empty();

            // Deshabilitar el campo de búsqueda de mascotas
            $('#searchPetInput').prop('disabled', true);

            // Limpiar los campos hidden
            $('#selectedCustomerId').val('');
            $('#selectedPetId').val('');
            $('#selectedEmployeeId').val('');
            $('#selectedVeterinarianId').val('');

            formData.elements["title"].setAttribute('value', '');
            formData.elements["idCustomer"].setAttribute('value', '');
            formData.elements["nameCustomer"].setAttribute('value', '');
            formData.elements["idPet"].setAttribute('value', '');
            formData.elements["namePet"].setAttribute('value', '');
            formData.elements["idVeterian"].setAttribute('value', '');
            formData.elements["nameVeterian"].setAttribute('value', '');
            formData.elements["comments"].setAttribute('value', '');

        });


        document.getElementById("clearButtonMD").addEventListener("click", function() {
            var startInfoMD = formDataMD.elements["startDateMD"].value;
            var endInfoMD = formDataMD.elements["startTimeMD"].value;
            formDataMD.elements["startDateMD"].setAttribute('value', startInfoMD);
            formDataMD.elements["startTimeMD"].setAttribute('value', endInfoMD);

            // Deshabilitar el campo de búsqueda de mascotas
            $('#searchPetInputMD').prop('disabled', true);

            // Limpiar todos los campos del formulario
            $('#customerFormMD')[0].reset();

            // Limpiar listas de sugerencias
            $('#suggestionCustomerListMD').empty();
            $('#suggestionPetListMD').empty();
            $('#suggestionVeterinarianListMD').empty();

            // Deshabilitar el campo de búsqueda de mascotas
            $('#searchPetInputMD').prop('disabled', true);

            // Limpiar los campos hidden
            $('#selectedCustomerIdMD').val('');
            $('#selectedPetIdMD').val('');
            $('#selectedEmployeeIdMD').val('');
            $('#selectedVeterinarianIdMD').val('');

            formDataMD.elements["idEventMD"].setAttribute('value', '');
            formDataMD.elements["titleMD"].setAttribute('value', '');
            formDataMD.elements["idCustomerMD"].setAttribute('value', '');
            formDataMD.elements["nameCustomerMD"].setAttribute('value', '');
            formDataMD.elements["idPetMD"].setAttribute('value', '');
            formDataMD.elements["namePetMD"].setAttribute('value', '');
            formDataMD.elements["idVeterianMD"].setAttribute('value', '');
            formDataMD.elements["nameVeterianMD"].setAttribute('value', '');
            formDataMD.elements["commentsMD"].setAttribute('value', '');

        });
    }


});
