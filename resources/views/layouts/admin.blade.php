<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    >
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin</title>
    @livewireStyles

</head>
<body class="text-blueGray-700 antialiased">
    <div id="root">
        @include('admin.partials.navbar')
        @include('admin.partials.header')
        @yield('content')
        @include('admin.partials.footer')
    </div>
    @include('admin.partials.scripts')
    @livewireScripts

</body>
</html>
