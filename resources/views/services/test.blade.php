{{-- 


@extends('component.app')

@section('content')




<body>
  <h1>Liste des services</h1>
  <ul>
    @foreach ($services as $service)
        <li>
            <strong>Titre :</strong> {{ $service['acf']['titre'] ?? 'Non défini' }}<br>
            <strong>Description :</strong> {{ $service['acf']['description'] ?? 'Non définie' }}
        </li>
    @endforeach
</ul>

</body>


@endsection --}}
