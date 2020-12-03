<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('core.partials.header')
    {{--  include : inclue un fichier partial a l'aide dun chemin qui ressemble  folder-N0.floder-N1.view --}}

    @yield('mainContent')
    {{--  @yield('NameBlock') appelle un bloque (@section('NameBlock') ... @endsection ) definit dans la view qui a extend ce layout --}}
    
    @include('core.partials.footer')

</body>
</html>