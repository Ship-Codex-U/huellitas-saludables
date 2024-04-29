<script type="text/javascript">
    {{-- Success Message --}}
    @if (Session::has('success'))
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: '{{ Session::get("success") }}',
    confirmButtonColor: "#3a57e8"
    });
    @endif

    {{-- Warning Message --}}
    @if (Session::has('warning'))
    Swal.fire({
    icon: 'warning',
    title: 'Advertencia',
    text: '{{ Session::get("warning") }}',
    confirmButtonColor: "#3a57e8"
    });
    @endif


    {{-- Errors Message --}}
    @if (Session::has('error'))
    Swal.fire({
    icon: 'error',
    title: 'Opps!!!',
    text: '{{Session::get("error")}}',
    confirmButtonColor: "#3a57e8"
    });
    @endif

    {{-- Undefined Message --}}
    @if (Session::has('undefinied'))
    Swal.fire({
    icon: 'warning',
    title: 'Advertencia',
    text: '{{ Session::get("undefinied") }}',
    confirmButtonColor: "#3a57e8"
    });
    @endif

    /*
    @if(Session::has('errors') || ( isset($errors) && is_array($errors) && $errors->any()))
    Swal.fire({
    icon: 'error',
    title: 'Opps!!!',
    text: '{{Session::get("errors")->first() }}',
    confirmButtonColor: "#3a57e8"
    });
    @endif
    */

    @if(Session::has('errors') || ( isset($errors) && is_array($errors) && $errors->any()))
        Swal.fire({
        icon: 'error',
        title: 'Opps, unos pedillos!!!',
        text: 'Algunos campos tienen errores, por favor resuelvalos.',
        confirmButtonColor: "#3a57e8"
        });

    @endif
</script>

