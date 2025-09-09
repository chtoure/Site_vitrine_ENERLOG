@extends('component.app')

@section('content')

    @foreach ($dataNews as $news)
        <p>
            <td>ID: {{ $news['id'] }}</td>
            <td>Name: {{ $news['name'] }}</td>
            <td >
                <ul>Content :</ul> 
                <ul> {{ $news['content'] }} </ul>
            </td>
            <td>
                Images:
                @if(is_array($news['images']))
                    <ul>
                        @foreach($news['images'] as $img)
                            <li>{{ $img }}</li>
                        @endforeach
                    </ul>
                @else
                    {{ $news['images'] }}
                @endif
            </td>
            <td>
                Link:
                @if(is_array($news['link']))
                    <ul>
                        @foreach($news['link'] as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                @else
                    {{ $news['link'] }}
                @endif
            </td>
        </p>
    @endforeach

@endsection