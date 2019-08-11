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


<table>
    <tr>
        <th>Type</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Height</th>
    </tr>
    
    @foreach ($animals as $animal)
    <tr>
        <th>{{$animal->type}}</th>
        <th>{{$animal->name}}</th>
        <th>{{$animal->gender}}</th>
        <th>{{$animal->age}}</th>
        <th>{{$animal->height}}</th>
    </tr>   
    @endforeach


</table>
    <!-- Scripts -->

    <script src="/js/app.js"></script>

</body>

</html>