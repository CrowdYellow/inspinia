@foreach (['error', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
        <script type="text/javascript">
            var shortCutFunction = '{{ $msg }}';
            var msg = '{{ session()->get($msg) }}';
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "progressBar": true,
                "preventDuplicates": false,
                "positionClass": "toast-top-left",
                "onclick": null,
                "showDuration": "400",
                "hideDuration": "2000",
                "timeOut": "7000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr[shortCutFunction](msg);
        </script>
    @endif
@endforeach