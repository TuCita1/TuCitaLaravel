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
            <h4>Daniela Gómez Murillo</h4>
            <label>daniela.gomez@misena.edu.co</label>
        </div>
        <div>
            <h4>Daniela Gómez Murillo</h4>
            <label>daniela.gomez@misena.edu.co</label>
        </div>
        <div>
            <h4>Daniela Gómez Murillo</h4>
            <label>daniela.gomez@misena.edu.co</label>
        </div>
    </footer>
</body>
</html>