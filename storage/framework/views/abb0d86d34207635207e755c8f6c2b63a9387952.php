
<?php echo e($contacts['name']); ?>さん

お問い合わせありがとうございます。
送信された内容は以下になります。

__________________________________________________


名前：<?php echo e($contacts['name']); ?>


Eメール：<?php echo e($contacts['email']); ?>


件名：<?php echo e($contacts['subject']); ?>


お問い合わせ内容：

<?php echo e($contacts['message']); ?>

__________________________________________________
<?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/contact/mail.blade.php ENDPATH**/ ?>