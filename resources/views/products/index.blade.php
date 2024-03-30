<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <h1>新規登録</h1>

    <div>
      <table border="1">
          <tr>
              <th>ID</th>
              <th>title</th>
              <th>Image</th>
              <th>Description</th>
              <th>Edit</th>
          </tr>
          @foreach($products as $post)
              <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>
                      @if($post->img_at)
                          <img src="{{ asset('uploads/' . $post->img_at) }}" alt="Post Image" style="max-width: 100px;">
                      @else
                          No Image
                      @endif
                  </td>
                  <td>{{ $post->description }}</td>
                  <td>
                    <a href="{{ route('post.edit', ['post' => $post]) }}">Edit</a>
                  </td>
              </tr>
      
          @endforeach
      </table>
  </div>
  
</body>
</html>