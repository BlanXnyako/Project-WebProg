<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')); ?>">
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
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="<?php echo e(route('profile')); ?>">Profile</a>
                        </li>
                    <?php endif; ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="footer bottom-0 start-0 w-100 mt-5 py-4 text-white bg-*" style="background-color: #953D55;">
        <div class="container text-center">
            <p>2024 MentalHelp. All rights reserved.</p>
        </div>
    </footer>

    <script src="<?php echo e(asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
<?php /**PATH C:\Users\joshu\Documents\Project WebProg\Laravel 11\resources\views/layouts/app.blade.php ENDPATH**/ ?>