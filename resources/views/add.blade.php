<html lang="ru-RU">
    <head>
        <meta charset="UTF-8">
        <title>Гостевая книга</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"

    </head>
    <body>

        <div class="container">
             <h1 class="text-center">{{ $massager }}</h1></hr>

             @if(count($errors) > 0)
             
             @foreach($errors->all() as $error)
                {{ $error }}
             @endforeach
             
             @endif
             <form method="POST" action="{{route('addStore')}}">
                 <label for="name">Логин</label>
                 <input type="text" id="name" name="name">
                 <label for="password">Пароль</label>
                 <input type="text" id="password" name="password">
                 <button type="submit">Подтвердить</button>
                 {{ csrf_field() }}
             </form>
             
        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
