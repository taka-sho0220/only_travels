<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>一人でいけるモン（旅日記）</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="bg-light p-5">
    <form action="<?php echo e(route('travel/confirm')); ?>" method="post" class="needs-validation" novalidate>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-row mb-4">
            <div class="col-md-12">
                <label for="Name">ニックネーム</label>
                <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>" id="Name" placeholder="ニックネーム" required>
                <?php if($errors->has('name')): ?>
                    <div class="invalid-feedback"><?php echo e($errors->first('name')); ?></div>
                <?php else: ?>
                    <div class="invalid-feedback">必須項目です</div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="selectplace" class="col-sm-2 col-form-label">場所</label>
            <div class="col-sm-10">
            <select name="place" value="<?php echo e(old('place')); ?>" class="form-control <?php if($errors->has('place')): ?> is-invalid <?php endif; ?>" id="inputPlace" placeholder="都道府県" required>
            <option value="">選択してください</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
        </select>
                <?php if($errors->has('place')): ?>
                    <div class="invalid-feedback"><?php echo e($errors->first('place')); ?></div>
                <?php else: ?>
                    <div class="invalid-feedback">必須項目です</div>
                <?php endif; ?>
            </div>
        </div>


        <!--性別-->
        <div class="form-group row">
            <label class="col-sm-2">性別</label>
            <div class="col-sm-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="gender" value="女性" id="customRadioInline1" class="custom-control-input" <?php if( old('gender')=='女性'): ?> checked="checked" <?php endif; ?> required>
                    <label class="custom-control-label" for="customRadioInline1">女性</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="gender" value="男性" id="customRadioInline2" class="custom-control-input" <?php if( old('gender')=='男性'): ?> checked="checked" <?php endif; ?>>
                    <label class="custom-control-label" for="customRadioInline2">男性</label>
                </div>
            <?php if($errors->has('gender')): ?>
                <div class="text-danger">どちらかチェックをしてください</div>
            <?php endif; ?>
            </div>
        </div>
        <!--年齢-->
        <div class="form-group row">
            <label for="selectage" class="col-sm-2 col-form-label">年齢</label>
            <div class="col-sm-10">
                <select name="age" value="<?php echo e(old('age')); ?>" class="form-control <?php if($errors->has('age')): ?> is-invalid <?php endif; ?>" id="inputage" placeholder="年齢層" required>
                    <option value="">選択してください</option>
                    <option value="20歳未満">20歳未満</option>
                    <option value="20-29歳">20-29歳</option>
                    <option value="30-39歳">30-39歳</option>
                    <option value="40-49歳">40-49歳</option>
                    <option value="50-59歳">50-59歳</option>
                    <option value="60-69歳">60-69歳</option>
                    <option value="70-79歳">70-79歳</option>
                    <option value="80歳以上">80歳以上</option>
                </select>
                <?php if($errors->has('age')): ?>
                    <div class="invalid-feedback"><?php echo e($errors->first('age')); ?></div>
                <?php else: ?>
                    <div class="invalid-feedback">必須項目です</div>
                <?php endif; ?>
            </div>
        </div>

        <!--評価-->
        <div class="form-group row">
            <label class="col-sm-2">評価</label>
            <div class="col-sm-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="evaluation" value="good" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">想像以上！最高！</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="evaluation" value="normal" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">想像通り、普通</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="evaluation" value="bad" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">想像以下。最悪。</label>
                </div>
                <?php if($errors->has('evaluation')): ?>
                    <div class="text-danger">どれかチェックをしてください</div>
                <?php endif; ?>
            </div>
        </div>

        <!--感想欄-->
        <div class="form-group pb-3">
            <label for="Textarea">感想欄</label>
            <textarea name="impressions" class="form-control <?php if($errors->has('impressions')): ?> is-invalid <?php endif; ?>" id="Textarea" rows="3" placeholder="感想等を記載してください。" required><?php echo e(old('impressions')); ?></textarea>
            <?php if($errors->has('impressions')): ?>
                <div class="invalid-feedback"><?php echo e($errors->first('impressions')); ?></div>
            <?php else: ?>
                <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
            <?php endif; ?>
        </div>

        <!--利用規約-->
        <div class="form-group pb-3">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input <?php if($errors->has('terms')): ?> is-invalid <?php endif; ?>" type="checkbox" name="terms" value="利用規約に同意します" id="invalidCheck" required>
                <label class="custom-control-label" for="invalidCheck">
                    利用規約に同意する
                </label>
                <?php if($errors->has('terms')): ?>
                    <div class="invalid-feedback mb-3"><?php echo e($errors->first('terms')); ?></div>
                <?php else: ?>
                    <div class="invalid-feedback mb-3">提出する前に同意する必要があります</div><!--HTMLバリデーション-->
                <?php endif; ?>
            </div>
        </div>
        <!--/利用規約-->

        <!--ボタンブロック-->
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-info btn-block">確認</button>
            </div>
        </div>
        <!--/ボタンブロック-->

    </form>
    </section>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/admin-page/form.blade.php ENDPATH**/ ?>