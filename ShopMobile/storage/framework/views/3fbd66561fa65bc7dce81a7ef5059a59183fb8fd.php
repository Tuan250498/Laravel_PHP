<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.home')); ?>">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('Admin.list.Category')); ?>" title="Danh mục">Danh Mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
            </ol>
        </nav>
    </div>
    <div class="">
        <?php echo $__env->make("admin::product.form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_PHP\ShopMobile\Modules/Admin\Resources/views/product/create.blade.php ENDPATH**/ ?>