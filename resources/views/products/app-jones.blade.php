<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
        rel="stylesheet"
    />
        

    <style>
        header {
            text-align: left;
            padding: 10px;
            background-color: #000000;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #000000;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: space-around; /* リンクを等間隔に配置 */
        }

        .be-journal {
            font-family: 'cursive', cursive;
            color: #ffff;
            font-size: 40px;
        }

        body {
             margin-top: 100px;
             margin-bottom: 100px;
             }

        footer a {
            margin-right: 10px;
            text-decoration: none; /* 下線を消す */
            color: #ffff; /* 文字色を黒に設定 */
            font-family: 'cursive', cursive; 
        }
    </style>
</head>

<body>

    {{-- @include('components.application-logo', ['attributes' => ['class' => 'icon-class']])

    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" {!! $attributes->merge(['class' => 'icon-class'])->map(function ($value, $key) { return $key.'="'.$value.'"'; })->implode(' ') !!}>
        <!-- Jの上部の水平な部分 -->
        <path d="M10,20 H40" stroke="black" stroke-width="2"/>
        <!-- Jの縦の部分 -->
        <path d="M25,20 V80" stroke="black" stroke-width="2"/>
        <!-- Jの下部の曲線 -->
        <path d="M25,80 Q30,90 40,80" stroke="black" stroke-width="2"/>
    </svg> --}}
    



    <header><span class="be-journal">be Journal</span></header>
    @yield('content')
    <div class="container mt-4">
        
    </div>

    <footer>
        <a href="#"><i class="ri-home-8-line"></i></a>
        <a href="#"><i class="ri-chat-1-line"></i></a>
        <a href="{{ route('products.search') }}"><i class="ri-search-line"></i></a>
        <a href="#"><i class="ri-profile-line"></i></a>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>