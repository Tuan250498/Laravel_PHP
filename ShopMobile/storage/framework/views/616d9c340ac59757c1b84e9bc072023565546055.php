<form action="" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Tên Danh Mục:</label>
        <input type="text" class="form-control" placeholder="Tên danh mục"
               value="<?php echo e(old('c_name' ,isset($category->c_name) ? $category->c_name : '' )); ?>" name="c_name">
        <?php if($errors->has('c_name')): ?>
            <span class="error-text">
                        <?php echo e($errors->first('c_name')); ?>

                    </span>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="name">Icon:</label>
        <input type="text" class="form-control" placeholder="fa fa-home" value="<?php echo e(old('c_icon', isset($category->c_icon) ?$category->c_icon : '')); ?>"
               name="c_icon">
        <?php if($errors->has('c_icon')): ?>
            <span class="error-text">
                        <?php echo e($errors->first('c_icon')); ?>

                    </span>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="name">Meta Title:</label>
        <input type="text" class="form-control" placeholder="Meta title"
               value="<?php echo e(old('c_title_seo', isset($category->c_title_seo) ? $category->c_title_seo : '')); ?>" name="c_title_seo">
    </div>
    <div class="form-group">
        <label for="name">Meta Description:</label>
        <input type="text" class="form-control" placeholder="Meta Description"
               value="<?php echo e(old('c_Description_seo', isset($category->c_Description_seo) ? $category->c_Description_seo : '')); ?>" name="c_Description_seo">
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
    </div>
    <button type="submit" class="btn btn-default">Lưu thông tin</button>
</form>
<?php /**PATH C:\xampp\htdocs\ShopMobile\Modules/Admin\Resources/views/category/form.blade.php ENDPATH**/ ?>