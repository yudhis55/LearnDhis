<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main-layout','data' => ['title' => 'Learniverse - Edit Modul '.e($subject->id).' / '.e($subject->title).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Learniverse - Edit Modul '.e($subject->id).' / '.e($subject->title).'']); ?>
    <main class="pt-28 pb-10 container">
        <div class="max-w-2xl mx-auto">
            <div class="flex justify-between items-center gap-2">
                <h1 class="text-2xl font-black mt-2 mb-4">Edit Modul</h1>
                <a href="<?php echo e(route('index')); ?>"
                    class="py-2 font-bold px-6 rounded bg-zinc-100 text-zinc-600 text-sm">Back</a>
            </div>
            <form action="<?php echo e(route('subjects.update', $subject->id)); ?>" method="POST" class="space-y-4">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="grid gap-1">
                    <label for="title" class="font-medium text-zinc-800">Title</label>
                    <input type="text" name="title" id="title" value="<?php echo e(old('subject', $subject->title)); ?>"
                        class="py-2 px-4 rounded border focus:outline-none">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-600 text-sm font-medium"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="grid gap-1">
                        <label for="level" class="font-medium text-zinc-800">Level</label>
                        <input type="text" name="level" id="level" value="<?php echo e(old('level', $subject->level)); ?>"
                            class="py-2 px-4 rounded border focus:outline-none">
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red-600 text-sm font-medium"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="grid gap-1">
                        <label for="subject" class="font-medium text-zinc-800">Subject</label>
                        <input type="text" name="subject" id="subject"
                            value="<?php echo e(old('subject', $subject->subject)); ?>"
                            class="py-2 px-4 rounded border focus:outline-none">
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red-600 text-sm font-medium"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="space-y-1">
                    <label for="content" class="font-medium text-zinc-800">Content</label>
                    <textarea name="content" id="content"><?php echo e(old('content', $subject->content)); ?></textarea>
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-600 text-sm font-medium"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button
                    class="py-2 font-bold px-6 rounded bg-indigo-100 text-indigo-600 text-sm">Submit</button>
            </form>
        </div>
    </main>
     <?php $__env->slot('js', null, []); ?> 
        <script>
            ClassicEditor
                .create(document.querySelector('#content'), {
                    licenseKey: '',
                })
                .then(editor => {
                    window.editor = editor;
                })
                .catch(error => {
                    console.error('Oops, something went wrong!');
                    console.error(
                        'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                    );
                    console.warn('Build id: l4dyuz3v73cu-g0a98aaq8txd');
                    console.error(error);
                });
        </script>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\wabw\LearnDhis\resources\views/subjects/edit.blade.php ENDPATH**/ ?>