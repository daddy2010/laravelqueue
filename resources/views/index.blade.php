<html lang="ru-RU">
    <head>
        <meta charset="UTF-8">
        <title>Гостевая книга</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"

    </head>
    <body>

        <div class="container">
             <h1 class="text-center">{{ $massager }}</h1></hr>
              @foreach($db as $test)
              
              <h2>{{ $test->name }}</h2>
              <h3>{{ $test->password }}</h3>
              <a href="{{ route('homeUser', ['id' => $test->id]) }}">ссылка</a>
              <form action="{{route('pageDelete', ['test' => $test->id]) }}" method="POST">
                 {{ method_field('DELETE') }}
                 {{ csrf_field() }}
                  <button type="submit" >
                      DELETE
                  </button>
              </form>
              </div>
              @endforeach
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>


