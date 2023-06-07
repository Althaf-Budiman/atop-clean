<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Atop Clean</title>
    <style>
        * {
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="float-left w-max">
        @include('components.sidebar')
    </div>
    @yield('main')
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>