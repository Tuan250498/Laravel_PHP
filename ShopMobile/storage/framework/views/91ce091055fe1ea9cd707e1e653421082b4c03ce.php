<?php $__env->startSection('content'); ?>
    <div class="sub-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('Admin.list.Product')); ?>" title="Danh mục">Sản Phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
            </ol>
        </nav>
    </div>
    <div class="table-responsive">
        <h2>Quản Lý Sản Phẩm</h2>
        <a href="<?php echo e(route('Admin.create.Product')); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
                <?php if(isset($products)): ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($product->p_name); ?></td>
                            <td><?php echo e($product->p_category_id); ?></td>
                            <td>
                                <a href="" class="label <?php echo e($product->getStatus($product->p_active)['class']); ?>"><?php echo e($product->getStatus($product->p_active)['name']); ?></a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('Admin.edit.Product', $product->id)); ?>">Edit</a>
                                <a href="<?php echo e(route('Admin.action.Product',['delete',$product->id])); ?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_PHP\ShopMobile\Modules/Admin\Resources/views/product/index.blade.php ENDPATH**/ ?>