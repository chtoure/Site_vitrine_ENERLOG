<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toute notre eqipe</title>
    <style>
        .member {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h1>Toute notre équipe</h1>

    @if(empty($equipes))
        <p>Aucun membre trouvé.</p>
    @else
        @foreach($equipes as $equipe)
            <div class="member">
                <img src="{{ asset($equipe['image']) }}" alt="{{ $equipe['first_name'] }} {{ $equipe['last_name'] }}">
                <div>
                    <h3>{{ $equipe['first_name'] }} {{ $equipe['last_name'] }}</h3>
                    <p><strong>Poste :</strong> {{ $equipe['poste'] }}</p>
                    <p><strong>ID :</strong> {{ $equipe['id'] }}</p>
                </div>
            </div>
        @endforeach
    @endif
</body>
</html>