


@extends('component.app')

@section('content')




<body>
  <h1>Liste des services</h1>
  <ul>
    @foreach ($services as $service)
      <li> Description : {{ $service['acf']['description'] ?? 'Non défini' }}</li>
    @endforeach
  </ul>
</body>


@endsection
