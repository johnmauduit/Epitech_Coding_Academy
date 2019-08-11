<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<div>
    <h1>Hello {{$animal->name}} </h1>
        <strong>{{$animal->name}} is a {{$animal->type}} {{$animal->gender}} of {{$animal->age}} years. 
        @if ($animal->gender == 'male')
            He
        @elseif ($animal->gender == 'female')
            She
        @else
            He/She 
        @endif
        is {{$animal->height}} m height.</strong></br>
</div>


    <!-- Scripts -->

    <script src="/js/app.js"></script>

</body>

</html>