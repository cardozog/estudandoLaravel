<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>

<body>

    {{$slot}}

    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>