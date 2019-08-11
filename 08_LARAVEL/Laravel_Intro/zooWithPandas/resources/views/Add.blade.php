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

<h1>Hello Add</h1>

{!! Form::open(['action' => 'AnimalController@store']) !!}

{!! Form::label('name', 'name') !!}
{!! Form::text('name') !!}

{!! Form::label('type', 'type') !!}
{!! Form::text('type') !!}

{!! Form::label('gender', 'gender') !!}
{!! Form::text('gender') !!}

{!! Form::label('age', 'age') !!}
{!! Form::text('age') !!}

{!! Form::label('height', 'height') !!}
{!! Form::text('height') !!}

{!! Form::submit('submit') !!}

{!! Form::close() !!}

    <!-- Scripts -->

    <script src="/js/app.js"></script>

</body>

</html>