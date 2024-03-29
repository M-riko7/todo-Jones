<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        header {
            text-align: left;
            padding: 10px;
            background-color: #ffff;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #ffff;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: space-around; /* リンクを等間隔に配置 */
        }

        .be-journal {
            font-family: 'Brush Script MT', cursive;
            font-size: 40px;
        }

        footer a {
            margin-right: 10px;
            text-decoration: none; /* 下線を消す */
            color: black; /* 文字色を黒に設定 */
            font-family: 'Brush Script MT', cursive; 
        }
    </style>
</head>

<body>
    <header><span class="be-journal">be Journal</span></header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer>
        <a href="#">Home</a>
        <a href="#">Messages</a>
        <a href="#">Search</a>
        <a href="#">Profile</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>