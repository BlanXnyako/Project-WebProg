<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php $__env->startSection('content'); ?>

        <h1 class="text-center my-5">Populer</h1>
        
        <form method="GET" action="<?php echo e(url('/terbaru')); ?>" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search articles by title" value="<?php echo e(request()->input('search')); ?>">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>

        <div class="row">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 h-50 mb-4">
                    <div class="card h-100 border border-danger shadow-lg rounded-lg">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="<?php echo e($article['image']); ?>" class="img-fluid" alt="<?php echo e($article['title']); ?>" style="width: 300px; height: 200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo e($article['title']); ?></h4>
                                    <p class="card-text"><?php echo e($article['date']); ?></p>
                                    <p class="card-text"><?php echo e($article['likes']); ?> likes</p>
                                    <a href="<?php echo e(url($article['link'])); ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joshu\Documents\Project WebProg\Laravel 11\resources\views/populer.blade.php ENDPATH**/ ?>