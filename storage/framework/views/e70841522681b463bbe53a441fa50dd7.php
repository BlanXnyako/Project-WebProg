<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')); ?>">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Login')); ?></div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="email"><?php echo e(__('Email Address')); ?></label>
                                <input type="email" class="form-control" id="email" name="email" required autofocus>
                            </div>
                            <div class="form-group mt-3">
                                <label for="password"><?php echo e(__('Password')); ?></label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4"><?php echo e(__('Login')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="<?php echo e(asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\joshu\Documents\Project WebProg\Laravel 11\resources\views/login.blade.php ENDPATH**/ ?>