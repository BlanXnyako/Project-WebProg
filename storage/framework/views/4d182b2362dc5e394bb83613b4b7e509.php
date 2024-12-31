

<?php $__env->startSection('content'); ?>
    

    <div class="jumbotron position-relative">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
        <div class="container position-relative mt-5">
            <h1 class="pt-5 text-light fw-bold text-center display-4">My Profile</h1>
            <img src="/images/profilepicture.png" class="img-fluid d-block mx-auto mt-5" alt="profile picture" style="width: 240px; height: 200px;">
            <p class="d-block mx-auto text-light text-justify mt-5 fs-5" style="max-width: 400px;">
                Username : <?php echo e(Auth::user()->name); ?>

            </p>
            <p class="d-block mx-auto text-light text-justify mt-5 fs-5" style="max-width: 400px;">
                Email : <?php echo e(Auth::user()->email); ?>

            </p>
            <p class="d-block mx-auto text-light text-justify mt-5 fs-5" style="max-width: 400px;">
                Gender : <?php echo e(Auth::user()->gender); ?>

            </p>
            <p class="d-block mx-auto text-light text-justify mt-5 fs-5 pb-5" style="max-width: 400px;">
                Date of Birth : <?php echo e(Auth::user()->date_of_birth); ?>

            </p>

            <div class="d-flex justify-content-center pb-5">
                <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            </div>
    </div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joshu\Documents\Project WebProg\Laravel 11\resources\views/profile.blade.php ENDPATH**/ ?>