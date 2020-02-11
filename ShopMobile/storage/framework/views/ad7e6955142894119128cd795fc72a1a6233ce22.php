<?php $__env->startSection('content'); ?>
    <div class="sub-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('Admin.list.Category')); ?>" title="Danh mục">Danh Mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
            </ol>
        </nav>
    </div>
    <div class="table-responsive">
        <h2>Quản Lý Danh Mục</h2>
        <a href="<?php echo e(route('Admin.create.Category')); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Title Seo</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($categories)): ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($category->c_name); ?></td>
                <td><?php echo e($category->c_title_seo); ?></td>
                <td>
                    <a href="" class="label <?php echo e($category->getStatus($category->p_active)['class']); ?>"><?php echo e($category->getStatus($category->c_active)['name']); ?></a>
                </td>
                <td>
                    <a href="<?php echo e(route('Admin.edit.Category', $category->id)); ?>">Edit</a>
                    <a href="<?php echo e(route('Admin.action.Category',['delete',$category->id])); ?>">Delete</a>
                </td>
            </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_PHP\ShopMobile\Modules/Admin\Resources/views/category/index.blade.php ENDPATH**/ ?>