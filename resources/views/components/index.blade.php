<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <script src="{{ asset('js/login.css') }}"></script>   
    <title>{{$title}}</title>
</head>
<body>
    {{$slot}}
    <footer>
        <div>
            <h4>Johana Peña Parra</h4>
            <label>jhoanna_96@hotmail.com </label>
        </div>
        <div>
            <h4>Nevardo Cardona Pemberty</h4>
            <label>nevardocp@gmail.com </label>
        </div>
        <div>
            <h4>Daniela Gómez Murillo</h4>
            <label>daniela.gomez@misena.edu.co</label>
        </div>
    </footer>
    @livewireScripts
</body>
</html>