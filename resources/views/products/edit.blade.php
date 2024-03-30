<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
        </ul>
      @endif
    </div>
    <form method="post" action="{{ route('post.update',['post' => $post]) }}">
        @csrf
        @method('put')
        <div>
            <label>title</label>
            <input type="text" name="title" placeholder="title" value="{{ $post->title }}" />
        </div>
        <div>
            <label>img</label>
            <input type="text" name="img" placeholder="img" value="{{ $post->img }}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" value="{{ $post->description }}" />
        </div>
        <div>
            <input type="submit" value="update /">
        </div>
    </form>
</body>
</html>