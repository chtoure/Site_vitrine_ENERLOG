<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Je suis dans la page de détail de l'équipe : 
    <strong>{{ $equipe['first_name'] }} {{ $equipe['last_name'] }}</strong>
    <br>
    Poste : {{ $equipe['poste'] }}
    <br>
    ID : {{ $equipe['id'] }}
</body>
</html>