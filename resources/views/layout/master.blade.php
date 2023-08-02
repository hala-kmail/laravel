<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('name')</title>
</head>
<body>
    {{-- ما حطيتها بسكشن لانو ما بدي اعمل override  --}}
    @include('layout.navbar')
    <div>@yield('content')</div>

    {{-- سكشن لانو دعمل override  --}}
    {{-- @section('sidebar')
        hala kamillll
    @show --}}
    @include('layout.sidebar')
</body>
</html>