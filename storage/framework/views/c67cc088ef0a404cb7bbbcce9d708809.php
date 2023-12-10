<main class="pt-28 pb-10">
    <div class="container">
        <span class="text-zinc-600">Selamat datang <?php echo e(auth()->user()->name); ?>!</span>
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-black mt-2 mb-4">Daftar Modul!</h1>
            <a href="<?php echo e(route('subjects.create')); ?>"
                class="py-2 font-bold px-6 rounded bg-indigo-100 text-indigo-600 text-sm">Create</a>
        </div>
        <?php if(session()->has('success')): ?>
            <div class="py-2 px-4 rounded bg-green-100 text-green-600 mb-4 border border-green-600">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class=" text-sm font-medium text-zinc-600 border-b py-4 px-6 text-center">No</th>
                        <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Created At</th>
                        <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Subject</th>
                        <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Title</th>
                        <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Level</th>
                        <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-zinc-600 py-4 border-b px-6 text-center"><?php echo e($loop->iteration); ?></td>
                            <td class="text-zinc-600 py-4 border-b px-6"><?php echo e($row->created_at->diffForHumans()); ?> <span
                                    class="text-xs py-1 px-2 rounded-full bg-zinc-800 text-white whitespace-nowrap"><?php echo e($row->created_at); ?></span>
                            </td>
                            <td class="text-zinc-600 py-4 border-b px-6"><?php echo e($row->subject); ?></td>
                            <td class="text-zinc-600 py-4 border-b px-6"><?php echo e($row->title); ?></td>
                            <td class="text-zinc-600 py-4 border-b px-6"><?php echo e($row->level); ?></td>
                            <td class="text-zinc-600 py-4 border-b px-6">
                                <div class="flex gap-1">
                                    <a href="<?php echo e(route('subjects.show', $row->id)); ?>"
                                        class="py-2 font-bold px-6 rounded bg-zinc-100 text-zinc-600 text-sm">Preview</a>
                                    <a href="<?php echo e(route('subjects.edit', $row->id)); ?>"
                                        class="py-2 font-bold px-6 rounded bg-amber-100 text-amber-600 text-sm">Edit</a>
                                    <form action="<?php echo e(route('subjects.destroy', $row->id)); ?>" method="POST"
                                        onsubmit="return confirm('Sure?')">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button
                                            class="py-2 font-bold px-6 rounded bg-red-100 text-red-600 text-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="999">Empty</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php /**PATH C:\xampp\htdocs\wabw\LearnDhis\resources\views/components/landing-admin.blade.php ENDPATH**/ ?>