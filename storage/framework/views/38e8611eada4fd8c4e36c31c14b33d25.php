<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title ?? 'LearnDhis'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-indigo-600">
    <div class="min-h-screen py-10 flex items-center justify-center">
        <div class="container">
            <?php echo e($slot); ?>

        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\wabw\LearnDhis\resources\views/components/auth-layout.blade.php ENDPATH**/ ?>