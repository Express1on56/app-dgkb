<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск</title>
</head>
<body>
<php>
@foreach ($results as $result)
    <div>{{ $result->surname }} {{ $result->name }} {{ $result->patronymic }}</div>
@endforeach
</php>
</body>
</html>
