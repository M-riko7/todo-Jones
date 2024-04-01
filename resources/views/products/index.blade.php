@extends('products.app-jones')

@section('content')
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            flex: 0 0 calc(20% - 20px); /* カードの幅を20%に設定 */
            margin-bottom: 20px; /* カード間のマージン */
        }

        .card img {
            width: 100%;
            height: auto;
        }

        @media (max-width: 1000px) {
            .card {
                flex-basis: calc(25% - 20px); /* カードの幅を25%に変更 */
            }
        }

        @media (max-width: 800px) {
            .card {
                flex-basis: calc(33.33% - 20px); /* カードの幅を33.33%に変更 */
            }
        }

        @media (max-width: 600px) {
            .card {
                flex-basis: calc(50% - 20px); /* カードの幅を50%に変更 */
            }
        }

        @media (max-width: 400px) {
            .card {
                flex-basis: calc(100% - 20px); /* カードの幅を100%に変更 */
            }
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
                    <a href="{{ route('products.edit', ['post' => $post->id]) }}" class="btn btn-primary">Edit Product</a>

                    @endif
                </div>
            </div>
        @endforeach
    </div>
{{-- @endsection --}}
