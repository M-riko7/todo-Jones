@extends('products.app-jones')

@section('content')


<form action="{{ route('products.search') }}" method="GET">
    @csrf
    <input type="text" name="name" placeholder="名前を入力">
    <button type="submit">検索</button>
</form>

@if (isset($message))
    <p>{{ $message }}</p>
@endif

{{-- @if (isset($users))
    <h1>{{ $users[0]->name }}</h1>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>img_at</th>
        </tr>
        @foreach($users[0]->posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->img_at }}</td>
            </tr>
        @endforeach
    </table>
    {{-- @foreach($posts as $post)

    @endforeach --}}
{{-- @endif --}} 

@if (isset($users))
    <h1>{{ $users[0]->name }}</h1>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>image</th>
        </tr>
        @foreach($users[0]->posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td><img src="{{ $post->img_at }}" alt="Post Image"></td>
            </tr>
        @endforeach
    </table>
@endif

@if (isset($message1))
    <p>{{ $message1 }}</p>
@endif

@endsection