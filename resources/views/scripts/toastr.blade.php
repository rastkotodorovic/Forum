<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>


@if (Session::has('success'))
    <script>
        toastr.success("{{ session("success") }}");
    </script>
@endif

@if (Session::has('info'))
    <script>
        toastr.info("{{ session("info") }}");
    </script>
@endif

@if (Session::has('warning'))
    <script>
        toastr.warning("{{ session("warning") }}");
    </script>
@endif

@if (Session::has('error'))
    <script>
        toastr.error("{{ session("error") }}");
    </script>
@endif