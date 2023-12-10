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

<body>
    <nav class="fixed top-0 inset-x-0 bg-white py-4 z-50">
        <div class="container flex justify-between items-center">
            <a href="/" class="text-lg text-zinc-800 font-black">LearnDhis<span
                    class="text-2xl text-indigo-600">.</span></a>

            <div class="flex gap-6 items-center">
                <?php if(auth()->check()): ?>
                    
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="py-2 font-bold px-6 rounded bg-red-600 text-white">Logout</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <?php echo e($slot); ?>

    <footer class="py-4 border-t">
        <div class="container">
            <p>&copy; LearnDhis 2023</p>
        </div>
    </footer>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    <?php echo e($js ?? ''); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\wabw\LearnDhis\resources\views/components/main-layout.blade.php ENDPATH**/ ?>