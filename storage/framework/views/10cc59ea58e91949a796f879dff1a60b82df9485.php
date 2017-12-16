<html lang="ru-RU">
    <head>
        <meta charset="UTF-8">
        <title>Гостевая книга</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"

    </head>
    <body>

        <div class="container">
             <h1 class="text-center"><?php echo e($massager); ?></h1></hr>

              <?php if($dbres): ?>
              <h2><?php echo e($dbres->name); ?></h2>
              <h3><?php echo e($dbres->password); ?></h3>
              <h4><?php echo e($dbres->id); ?></h4>
              
              <?php endif; ?>
        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
