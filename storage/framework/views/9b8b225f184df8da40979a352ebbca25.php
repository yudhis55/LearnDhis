<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main-layout','data' => ['title' => 'LearnDhis - Modul berdasarkan jengang '.e($level).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'LearnDhis - Modul berdasarkan jengang '.e($level).'']); ?>
    <main class="pt-28 pb-10">
        <div class="container">
            <div class="flex justify-between items-center mb-4 gap-2">
                <h1 class="text-2xl font-black">Modul berdasarkan jenjang <?php echo e($level); ?>!</h1>
                <a href="<?php echo e(route('index')); ?>"
                    class="py-2 font-bold px-6 rounded bg-zinc-100 text-zinc-600 text-sm">Back</a>
            </div>
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4">
                <?php $__empty_1 = true; $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('subjects.show', $row->id)); ?>" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1"><?php echo e($row->title); ?></h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: <?php echo e($row->level); ?></p>
                            <span
                                class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white"><?php echo e($row->subject); ?></span>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>empty</p>
                <?php endif; ?>
            </div>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\wabw\LearnDhis\resources\views/level.blade.php ENDPATH**/ ?>