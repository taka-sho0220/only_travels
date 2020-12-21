<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>一人でいけるモン（旅日記）</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="bg-light p-5">
    <form action="<?php echo e(route('create')); ?>" method="post" class="needs-validation" onSubmit="return checkSubmit()" enctype='multipart/form-data' novalidate>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-row mb-4">
            <div class="col-md-12">
                <label for="Name">ニックネーム</label>
                <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>" id="Name" placeholder="ニックネーム" autofocus required>
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
            <select name="place" class="form-control <?php if($errors->has('place')): ?> is-invalid <?php endif; ?>" id="inputPlace" placeholder="都道府県" required>
            <option value="" selected <?php if(old('age')==''): ?> selected  <?php endif; ?>>選択してください</option>
            <option value="北海道" <?php if( old('place') =='北海道'): ?> selected  <?php endif; ?>>北海道</option>
            <option value="青森県" <?php if(old('place')=='青森県'): ?> selected  <?php endif; ?>>青森県</option>
            <option value="岩手県" <?php if(old('place')=='岩手県'): ?> selected  <?php endif; ?>>岩手県</option>
            <option value="宮城県" <?php if(old('place')=='宮城県'): ?> selected  <?php endif; ?>>宮城県</option>
            <option value="山形県" <?php if(old('place')=='山形県'): ?> selected  <?php endif; ?>>山形県</option>
            <option value="秋田県" <?php if(old('place')=='秋田件'): ?> selected  <?php endif; ?>>秋田県</option>
            <option value="福島県" <?php if(old('place')=='福島県'): ?> selected  <?php endif; ?>>福島県</option>
            <option value="茨城県" <?php if(old('place')=='茨城県'): ?> selected  <?php endif; ?>>茨城県</option>
            <option value="栃木県" <?php if(old('place')=='栃木県'): ?> selected  <?php endif; ?>>栃木県</option>
            <option value="群馬県" <?php if(old('place')=='群馬県'): ?> selected  <?php endif; ?>>群馬県</option>
            <option value="埼玉県" <?php if(old('place')=='埼玉県'): ?> selected  <?php endif; ?>>埼玉県</option>
            <option value="千葉県" <?php if(old('place')=='千葉県'): ?> selected  <?php endif; ?>>千葉県</option>
            <option value="東京都" <?php if(old('place')=='東京都'): ?> selected  <?php endif; ?>>東京都</option>
            <option value="神奈川県" <?php if(old('place')=='神奈川県'): ?> selected  <?php endif; ?>>神奈川県</option>
            <option value="新潟県" <?php if(old('place')=='新潟県'): ?> selected  <?php endif; ?>>新潟県</option>
            <option value="富山県" <?php if(old('place')=='富山県'): ?> selected  <?php endif; ?>>富山県</option>
            <option value="石川県" <?php if(old('place')=='石川県'): ?> selected  <?php endif; ?>>石川県</option>
            <option value="福井県" <?php if(old('place')=='福井県'): ?> selected  <?php endif; ?>>福井県</option>
            <option value="山梨県" <?php if(old('place')=='山梨県'): ?> selected  <?php endif; ?>>山梨県</option>
            <option value="長野県" <?php if(old('place')=='長野県'): ?> selected  <?php endif; ?>>長野県</option>
            <option value="岐阜県" <?php if(old('place')=='岐阜県'): ?> selected  <?php endif; ?>>岐阜県</option>
            <option value="静岡県" <?php if(old('place')=='静岡県'): ?> selected  <?php endif; ?>>静岡県</option>
            <option value="愛知県" <?php if(old('place')=='愛知県'): ?> selected  <?php endif; ?>>愛知県</option>
            <option value="三重県" <?php if(old('place')=='三重県'): ?> selected  <?php endif; ?>>三重県</option>
            <option value="滋賀県" <?php if(old('place')=='滋賀県'): ?> selected  <?php endif; ?>>滋賀県</option>
            <option value="京都府" <?php if(old('place')=='京都府'): ?> selected  <?php endif; ?>>京都府</option>
            <option value="大阪府" <?php if(old('place')=='大阪府'): ?> selected  <?php endif; ?>>大阪府</option>
            <option value="兵庫県" <?php if(old('place')=='兵庫県'): ?> selected  <?php endif; ?>>兵庫県</option>
            <option value="奈良県" <?php if(old('place')=='奈良県'): ?> selected  <?php endif; ?>>奈良県</option>
            <option value="和歌山県" <?php if(old('place')=='和歌山県'): ?> selected  <?php endif; ?>>和歌山県</option>
            <option value="鳥取県" <?php if(old('place')=='鳥取県'): ?> selected  <?php endif; ?>>鳥取県</option>
            <option value="島根県" <?php if(old('place')=='島根県'): ?> selected  <?php endif; ?>>島根県</option>
            <option value="岡山県" <?php if(old('place')=='岡山県'): ?> selected  <?php endif; ?>>岡山県</option>
            <option value="広島県" <?php if(old('place')=='広島県'): ?> selected  <?php endif; ?>>広島県</option>
            <option value="山口県" <?php if(old('place')=='山口県'): ?> selected  <?php endif; ?>>山口県</option>
            <option value="徳島県" <?php if(old('place')=='徳島県'): ?> selected  <?php endif; ?>>徳島県</option>
            <option value="香川県" <?php if(old('place')=='香川県'): ?> selected  <?php endif; ?>>香川県</option>
            <option value="愛媛県" <?php if(old('place')=='愛媛県'): ?> selected  <?php endif; ?>>愛媛県</option>
            <option value="高知県" <?php if(old('place')=='高知県'): ?> selected  <?php endif; ?>>高知県</option>
            <option value="福岡県" <?php if(old('place')=='福岡県'): ?> selected  <?php endif; ?>>福岡県</option>
            <option value="佐賀県" <?php if(old('place')=='佐賀県'): ?> selected  <?php endif; ?>>佐賀県</option>
            <option value="長崎県" <?php if(old('place')=='長崎県'): ?> selected  <?php endif; ?>>長崎県</option>
            <option value="熊本県" <?php if(old('place')=='熊本県'): ?> selected  <?php endif; ?>>熊本県</option>
            <option value="大分県" <?php if(old('place')=='大分県'): ?> selected  <?php endif; ?>>大分県</option>
            <option value="宮崎県" <?php if(old('place')=='宮崎県'): ?> selected  <?php endif; ?>>宮崎県</option>
            <option value="鹿児島県" <?php if(old('place')=='鹿児島県'): ?> selected  <?php endif; ?>>鹿児島県</option>
            <option value="沖縄県" <?php if(old('place')=='沖縄県'): ?> selected  <?php endif; ?>>沖縄県</option>
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
                <select name="age" class="form-control <?php if($errors->has('age')): ?> is-invalid <?php endif; ?>" id="inputAge" placeholder="年齢層を選択" required>
                    <option value="" selected <?php if(old('age')==''): ?> selected  <?php endif; ?>>選択してください</option>
                    <option value="20歳未満" <?php if(old('age')=='20歳未満'): ?> selected  <?php endif; ?>>20歳未満</option>
                    <option value="20-29歳" <?php if(old('age')=='20-30歳'): ?> selected <?php endif; ?>>20-29歳</option>
                    <option value="30-39歳" <?php if(old('age')=='30-39歳'): ?> selected <?php endif; ?>>30-39歳</option>
                    <option value="40-49歳" <?php if(old('age')=='40-49歳'): ?> selected <?php endif; ?>>40-49歳</option>
                    <option value="50-59歳" <?php if(old('age')=='50-59歳'): ?> selected <?php endif; ?>>50-59歳</option>
                    <option value="60-69歳" <?php if(old('age')=='60-69歳'): ?> selected <?php endif; ?>>60-69歳</option>
                    <option value="70-79歳" <?php if(old('age')=='70-79歳'): ?> selected <?php endif; ?>>70-79歳</option>
                    <option value="80歳以上" <?php if(old('age')=='80歳以上'): ?> selected <?php endif; ?>>80歳以上</option>
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
                    <input type="radio" name="evaluation" value="最高" class="custom-control-input" id="customCheck1" <?php if( old('evaluation')=='good'): ?> checked="checked" <?php endif; ?> required>
                    <label class="custom-control-label" for="customCheck1">最高！</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="evaluation" value="普通" class="custom-control-input" id="customCheck2" <?php if( old('evaluation')=='normal'): ?> checked="checked" <?php endif; ?> required>
                    <label class="custom-control-label" for="customCheck2">普通</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="evaluation" value="最悪" class="custom-control-input" id="customCheck3" <?php if( old('evaluation')=='bad'): ?> checked="checked" <?php endif; ?> required>
                    <label class="custom-control-label" for="customCheck3">最悪。</label>
                </div>
                <?php if($errors->has('evaluation')): ?>
                    <div class="text-danger">どれかチェックをしてください</div>
                <?php endif; ?>
            </div>
        </div>

        <!--感想欄-->
        <div class="form-group pb-3">
            <label for="Textarea">感想欄</label>
            <textarea name="impressions" class="form-control <?php if($errors->has('impressions')): ?> is-invalid <?php endif; ?>" id="Textarea" rows="3" placeholder="感想等を記載してください。"required><?php echo e(old('impressions')); ?></textarea>
            <?php if($errors->has('impressions')): ?>
                <div class="invalid-feedback"><?php echo e($errors->first('impressions')); ?></div>
            <?php else: ?>
                <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
            <?php endif; ?>
        </div>

        <div class="input-group">
            <label class="input-group-btn">
                <span class="btn btn-primary">
                    Choose File<input type="file" class="form-control <?php if($errors->has('photos')): ?> is-invalid <?php endif; ?>" name="photos" style="display:none">
                </span>
            </label>
            <input type="text" class="form-control" name="photos" readonly="">
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
    
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-info btn-block">確認</button>
            </div>
        </div>


    </form>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
$(document).on('change', ':file', function() {
    var input = $(this),
    numFiles = input.get(0).files ? input.get(0).files.length : 1,
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.parent().parent().next(':text').val(label);
});
function checkSubmit(){
    if(window.confirm('送信してよろしいですか？')){
        return true;
    } else {
        return false;
    }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/form.blade.php ENDPATH**/ ?>