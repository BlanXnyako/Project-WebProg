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

        <div class="jumbotron position-relative">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
            <div class="container position-relative mt-5">
            <h1 class="text-center mt-5 text-light pt-4">Article 3</h1>
            <p class="d-block mx-auto text-light text-center mt-3 fs-5">Posted At : 21 December 2024</p>
            <img src="<?php echo e(asset('images/article3.png')); ?>" class="img-fluid mt-4 d-block mx-auto border border-danger" alt="Example Image">
            <div class="d-flex justify-content-center">
               <a class="btn btn-danger mt-3">Like Article</a>
            </div>
                <p class="d-block mx-auto text-light text-justify mt-4 fs-5 pb-5" style="max-width: 1000px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar hendrerit ante ut dapibus. Duis finibus nulla at hendrerit mollis. Aenean imperdiet quam vel molestie fermentum. Fusce cursus tellus ac condimentum mollis. Vestibulum et tempor sem. Nullam elementum pulvinar magna a hendrerit. In fermentum molestie augue, non condimentum mi vestibulum et. Fusce porttitor vulputate metus, ac consequat libero posuere et.
                </p>
            </div>
        </div>

    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joshu\Documents\Project WebProg\Laravel 11\resources\views/articles/article3.blade.php ENDPATH**/ ?>