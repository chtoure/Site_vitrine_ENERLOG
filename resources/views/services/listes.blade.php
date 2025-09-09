@extends('component.app')

@section('content')

    @foreach ($dataServices as $service)
        <p>
            <td>ID: {{ $service['id'] }}</td>
            <td>Name: {{ $service['name'] }}</td>
            <td>Description: {{ $service['description'] }}</td>
            <td>
    Images:
    @if(is_array($service['images']))
        <ul>
            @foreach($service['images'] as $img)
                <li>{{ $img }}</li>
            @endforeach
        </ul>
    @else
        {{ $service['images'] }}
    @endif
</td>
            <td>
    Content:
    @if(is_array($service['content']))
        <ul>
            @foreach($service['content'] as $content)
                <li>{{ $content }}</li>
            @endforeach
        </ul>
    @else
        {{ $service['content'] }}
    @endif
</td>
        </p>
    @endforeach

@endsection