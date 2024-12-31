<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')); ?>">
    <title>Document</title>
    <style>
        body {
            background-color: #ebe0de; /* Static background color */
        }
    </style>
</head>
<body>
    <nav style="background-color: #953D55;" class="navbar navbar-expand-lg navbar-dark bg-*"> 
        <a class="navbar-brand mx-3" href="/">MentalHelp</a> 
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/events">Events</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/populer">Populer</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/terbaru">Terbaru</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/about">About Us</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2"><a class="nav-link" href="/landing">Login</a></li>
                <!-- <li class="nav-item mx-2"><a class="nav-link" href="/profile">Profile</a></li> -->
            </ul>
        </div>
    </nav>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="mt-5 py-4 text-white bg-*" style="background-color: #953D55;">
        <div class="container text-center">
            <p>2024 MentalHelp. All rights reserved.</p>
        </div>
    </footer>

    <script src="<?php echo e(asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\joshu\Documents\Project WebProg\Laravel 11\resources\views/layouts/layout.blade.php ENDPATH**/ ?>