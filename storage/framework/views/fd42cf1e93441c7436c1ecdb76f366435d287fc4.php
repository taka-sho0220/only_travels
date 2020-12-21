<?php echo $__env->make('mains.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <?php echo $__env->make('mains.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>

        <div class="container">
            <div class="row mt3 presentation">
                <div class="centered">
                <img class="camera aligncenter" src="<?php echo e(asset('img/only.jpg')); ?>" alt="">
                    <h1>CONTACT US</h1>
                    <hr>
                </div>
            </div>
            <!-- /row -->

        </div>

        <div class="container">
            <div class="row presentation">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-12 col-md-12 contact-form">
                <?php if(session('err_msg')): ?>
                    <p class="text-success"><?php echo e(session('err_msg')); ?></p>
                <?php endif; ?>
                <form action="<?php echo e(route('mail')); ?>" method="post" class="needs-validation" onSubmit="return checkSubmit()" enctype='multipart/form-data' novalidate>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="name" name="name" value="<?php echo e(old('name')); ?>" class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>" id="name" placeholder="名前" autofocus required>
                            <?php if($errors->has('name')): ?>
                                <div class="invalid-feedback"><?php echo e($errors->first('name')); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email"  value="<?php echo e(old('email')); ?>" class="form-control <?php if($errors->has('email')): ?> is-invalid <?php endif; ?>" id="email" placeholder="メールアドレス" autofocus required>
                            <?php if($errors->has('email')): ?>
                                <div class="invalid-feedback"><?php echo e($errors->first('email')); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" value="<?php echo e(old('subject')); ?>" class="form-control <?php if($errors->has('subject')): ?> is-invalid <?php endif; ?>" id="subject" placeholder="件名" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                            <?php if($errors->has('subject')): ?>
                                <div class="invalid-feedback"><?php echo e($errors->first('subject')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-control <?php if($errors->has('message')): ?> is-invalid <?php endif; ?>" id="message" placeholder="お問い合わせ内容を記載してください" rows="5" required><?php echo e(old('message')); ?></textarea>
                            <?php if($errors->has('message')): ?>
                                <div class="invalid-feedback"><?php echo e($errors->first('message')); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-send">
                            <button type="submit" class="btn btn-lg btn-transparent">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <section id="end" class="section-footer">
            <?php echo $__env->make('mains.conta-foo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>

        <!-- JavaScript Libraries -->
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/modernizr.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/cubeportfolio.js')); ?>"></script>
        <script src="<?php echo e(asset('js/classie.js')); ?>"></script>
        <script src="<?php echo e(asset('js/fullpage-menu.js')); ?>"></script>
        <script src="<?php echo e(asset('js/superslides.js')); ?>"></script>
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>

    </body><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/mains/contact.blade.php ENDPATH**/ ?>