<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.11.0/Sortable.min.js"></script> --}}
    {{-- <script src="{{ asset('js/tasks.js') }}"></script> --}}

</head>
<body>

    @yield('content')
</body>
</html>
