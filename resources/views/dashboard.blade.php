<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
        <form method="POST" action="{{ route('index') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old("title") }}">
        </div>  
    
        <div>
            <label for="image" accept="image/png,image/jpeg,image/jpg">ファイルを選択</label>
            <input type="file" name="img_at" value="{{ old("img_at") }}">
        </div>
    
        <div>
            <label for="description">詳細</label>
            <textarea name="description" id="" rows="5">{{ old('description') }}</textarea>
        </div>
    
        <button type="submit">保存</button>
    
    </form> 
    
    
    
    </body>
    </html>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
