<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUD</title>

    <!-- Tailwind CSS Link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>

<body class="bg-green-500">
    <!-- Body -->
    <div id="app">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
