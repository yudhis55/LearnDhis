<main class="pt-28 pb-10">
    <div class="container">
        <span class="text-zinc-600">Selamat datang <?php echo e(auth()->user()->name); ?>!</span>
        <h1 class="text-2xl font-black mt-2 mb-4">Rekomendasi Untukmu!</h1>
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4">
            <?php $__empty_1 = true; $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route('subjects.show', $row->id)); ?>" class="p-6 rounded-xl border">
                    <h2 class="text-xl font-bold mb-1"><?php echo e($row->title); ?></h2>
                    <div class="flex items-center justify-between gap-1">
                        <p class="text-sm">Jenjang: <?php echo e($row->level); ?></p>
                        <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white"><?php echo e($row->subject); ?></span>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>empty</p>
            <?php endif; ?>
        </div>
    </div>
</main>
<section class="py-20">
    <div class="container">
        <h1 class="text-2xl font-black mb-4">Filter berdasarkan jenjang / mata pelajaran:</h1>
        <div class="flex flex-wrap gap-2">
            <?php $__empty_1 = true; $__currentLoopData = [...$levels, ...$subjects]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route($row->level ? 'level' : 'subject', $row->level ? $row->level : $row->subject)); ?>"
                    class="text-lg py-2 px-4 rounded-full border text-zinc-800"><?php echo e($row->level ? $row->level : $row->subject); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Empty</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\wabw\LearnDhis\resources\views/components/landing-user.blade.php ENDPATH**/ ?>