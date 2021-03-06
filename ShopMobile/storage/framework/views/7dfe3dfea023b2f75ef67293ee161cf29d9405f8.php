<form action="" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Tên sản phẩm"
                       value="<?php echo e(old('p_name' ,isset($product->p_name) ? $product->p_name : '' )); ?>" name="p_name">
                <?php if($errors->has('p_name')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('p_name')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Mô tả:</label>
                <textarea name="p_description" id="" class="form-control" cols="30" rows="3" placeholder="Mô tả ngắn sản phẩm"></textarea>
                <?php if($errors->has('p_name')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('p_name')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Nội dung:</label>
                <textarea name="p_content" id="" class="form-control" cols="30" rows="3" placeholder="Nội dung"></textarea>
                <?php if($errors->has('p_content')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('p_content')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title"
                       value="<?php echo e(old('p_title_seo', isset($product->p_title_seo) ? $product->c_title_seo : '')); ?>" name="p_title_seo">
            </div>
            <div class="form-group">
                <label for="name">Meta Description:</label>
                <input type="text" class="form-control" placeholder="Meta Description"
                       value="<?php echo e(old('p_description_seo', isset($product->p_description_seo) ? $product->c_description_seo : '')); ?>" name="p_description_seo">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="name">Loại sản phẩm:</label>
                <select name="p_category_id" id="" class="form-control">

                    <?php if(isset($categories)): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e(old('p_category_id', isset($product->p_category_id) ? $product->p_category_id : '' == $category->id ? "selected ='selected'" : "")); ?>><?php echo e($category->c_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                </select>
                <?php if($errors->has('p_category_id')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('p_category_id')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Giá sản phẩm:</label>
                <input type="number" name="p_price" class="form-control" placeholder="Giá sản phẩm">
                <?php if($errors->has('p_price')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('p_price')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">% khuyến mại:</label>
                <input type="number" name="p_sale" class="form-control" value="0">
            </div>
            <div class="form-group">
                <label for="name">Avatar:</label>
                <input type="file" name="avatar" class="form-control">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox"> Nổi bật </label>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-default">Lưu thông tin</button>
</form>
<?php /**PATH C:\xampp\htdocs\ShopMobile\Modules/Admin\Resources/views/product/form.blade.php ENDPATH**/ ?>