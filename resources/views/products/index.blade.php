@extends('products.app-jones')
@section('content')

<style>
        /* カード */
    .card {
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .card img {
        width: 100%;
        height: auto;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 1rem;
        color: #666;
    }

    /* モーダル */
    .modal-content {
        border-radius: 8px;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-title {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    /* モバイルレスポンシブ */
    @media (max-width: 767px) {
        .card {
            width: calc(50% - 20px);
        }
    }

    @media (max-width: 575px) {
        .card {
            width: calc(100% - 20px);
        }
    }
    /* モーダルのスタイル */
        .modal-dialog {
            max-width: 600px; /* モーダルの最大幅 */
        }

        .modal-content {
            border-radius: 20px; /* モーダルの角を丸くする */
        }

        .modal-header {
            background-color: #007bff; /* ヘッダーの背景色 */
            color: #fff; /* ヘッダーテキストの色 */
            border-radius: 20px 20px 0 0; /* ヘッダーの角を丸くする */
        }

        .modal-title {
            font-size: 1.5rem; /* タイトルのフォントサイズ */
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            background-color: #f7f7f7; /* フッターの背景色 */
            border-radius: 0 0 20px 20px; /* フッターの角を丸くする */
        }

        /* フォームのスタイル */
        form {
            margin-top: 20px;
        }

        form label {
            font-weight: bold; /* ラベルのテキストを太字にする */
        }

        form input[type="text"],
        form textarea {
            width: 100%; /* 入力フィールドの幅を100%にする */
            padding: 10px; /* 入力フィールドの内側の余白 */
            margin-bottom: 20px; /* 入力フィールドの下マージン */
            border-radius: 5px; /* 入力フィールドの角を丸くする */
            border: 1px solid #ddd; /* 入力フィールドの境界線 */
        }



        form img {
            max-width: 200px; /* 画像の最大幅 */
            max-height: 200px; /* 画像の最大高さ */
            margin-bottom: 10px; /* 画像の下マージン */
        }

        form textarea {
            height: 100px; /* テキストエリアの高さ */
        }

        form .modal-footer button {
            margin-right: 10px; /* ボタンの右マージン */
        }

</style>


    <h1>新規登録</h1>

    <div class="card-container">
        @foreach($products as $post)
            <div class="card">
                <img src="{{ asset('uploads/' . $post->img_at) }}" class="card-img-top" alt="Post Image">
                
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    @if($post->user_id == Auth::id())
                    {{-- Edit Button --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $post->id }}">
                        Edit Product
                    </button>
                    @endif
                </div>
            </div>

            {{--Edit Modal --}}
            <div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('products.update',  $post->id ) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="title">タイトル</label>
                                <input type="text" name="title" value="{{ $post->title }}">
                            </div>
                            <div>
                                <label for="image accept="image/png,image/jpeg,image/jpg"></label>
                                <img src="{{ asset('uploads/' . $post->img_at) }}" alt="" srcset="" style="max-width: 200px; max-height: 200px;">
                                <input type="file" name="image" value="{{ asset('uploads/' . $post->img_at) }}">
                            </div>
                            @error('image')
                            {{ $message }}
                            @enderror
                            <div>
                        
                        
                                <label for="description">詳細</label>
                                <textarea name="description" rows="5">{{ $post->description }}</textarea>
                            </div>
                            @error('description')
                            {{ $message }}
                            @enderror
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Update Product</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        @endforeach
    </div>
{{-- @endsection --}}


