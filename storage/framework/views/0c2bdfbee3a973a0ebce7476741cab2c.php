<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-layout','data' => ['title' => 'Learniverse - Register']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Learniverse - Register']); ?>
    <form action="<?php echo e(route('newUser')); ?>" method="POST" class="max-w-sm bg-white p-8 rounded-lg mx-auto">
        <?php echo csrf_field(); ?>
        <h1 class="font-black text-2xl mb-4">Selamat Datang!</h1>
        <div class="grid gap-4">
            <div class="grid gap-1">
                <label for="name" class="font-medium text-zinc-800">Nama</label>
                <input type="name" name="name" id="name" value="<?php echo e(old('name')); ?>"
                    class="py-2 px-4 rounded border focus:outline-none">
                <?php $__errorArgs = ['name'];
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
                <label for="email" class="font-medium text-zinc-800">Email</label>
                <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>"
                    class="py-2 px-4 rounded border focus:outline-none">
                <?php $__errorArgs = ['email'];
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
                <label for="password" class="font-medium text-zinc-800">Password</label>
                <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>"
                    class="py-2 px-4 rounded border focus:outline-none">
                <?php $__errorArgs = ['password'];
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
            <button class="py-2 font-bold px-6 rounded bg-indigo-600 text-white">Register</button>
            <div class="grid grid-cols-2 gap-2 items-center">
                <a href="/"
                    class="text-zinc-600 underline">Kembali</a>
                <a href="<?php echo e(route('login')); ?>"
                    class="py-2 font-bold text-center px-6 rounded text-zinc-800 border">Login</a>
            </div>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\wabw\LearnDhis\resources\views/auth/register.blade.php ENDPATH**/ ?>