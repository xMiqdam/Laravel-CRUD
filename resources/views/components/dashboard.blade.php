<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Dashboard</title>
</head>
<body>

    <x-admin-navbar></x-admin-navbar>
    <x-admin-sidebar></x-admin-sidebar>
    <div class="p-4 md:ml-64 h-auto pt-20" >{{$slot}}</div>

</body>
</html>
