<?php echo $__env->make('parts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
    <div class="row">
        <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">孤独を愛し、孤独に愛された者たちの、一人旅サイト</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
            <div class="form-row">
                <div class="col-12 col-md-6 mb-2 mb-md-0">
                    <a type="submit" class="btn btn-block btn-lg btn-primary" href="<?php echo e(url('/home')); ?>">ゲストで始める</a>
                </div>
                <div class="col-12 col-md-6">
                    <a type="submit" class="btn btn-block btn-lg btn-primary" href="<?php echo e(route('register')); ?>">新規登録して始める</a>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</header><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/parts/header.blade.php ENDPATH**/ ?>