<html lang="ru-RU">
    <head>
        <meta charset="UTF-8">
        <title>Гостевая книга</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"

    </head>
    <body>

        <div class="container">
             <h1 class="text-center"><?php echo e($massager); ?></h1></hr>
              <?php $__currentLoopData = $db; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <h2><?php echo e($test->name); ?></h2>
              <h3><?php echo e($test->password); ?></h3>
              <a href="<?php echo e(route('homeUser', ['id' => $test->id])); ?>">ссылка</a>
              <form action="<?php echo e(route('pageDelete', ['test' => $test->id])); ?>" method="POST">
                 <?php echo e(method_field('DELETE')); ?>

                 <?php echo e(csrf_field()); ?>

                  <button type="submit" >
                      DELETE
                  </button>
              </form>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>


