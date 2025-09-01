<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <main class="d-flex flex-nowrap">
        @include('layouts.partials.sidebar')
        <div class="b-example-divider b-example-vr p-4 border w-100" style="margin-left: 280px;">
            @yield('content')
        </div>
    </main>
</body>

</html>
