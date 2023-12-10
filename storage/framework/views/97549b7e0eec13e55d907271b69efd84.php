<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main-layout','data' => ['title' => 'Learniverse - '.e($subject->title).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Learniverse - '.e($subject->title).'']); ?>
    <main class="pt-28 pb-10 container">
        <div class="max-w-2xl mx-auto">
            <div class="flex justify-between items-center gap-2">
                <h1 class="sm:text-4xl text-2xl font-black"><?php echo e($subject->title); ?></h1>
                <a href="<?php echo e(route('index')); ?>"
                    class="py-2 font-bold px-6 rounded bg-zinc-100 text-zinc-600 text-sm">Back</a>
            </div>
            <div class="flex items-center gap-1 mt-4 mb-8">
                <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white"><?php echo e($subject->subject); ?></span>
                <p class="text-sm">Jenjang: <?php echo e($subject->level); ?></p>
            </div>
            <div class="prose prose-zinc sm:prose-base prose-sm">
                <?php echo $subject->content; ?>

            </div>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\wabw\LearnDhis\resources\views/subjects/show.blade.php ENDPATH**/ ?>