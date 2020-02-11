<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Tên sản phẩm"
                       value="{{old('p_name' ,isset($product->p_name) ? $product->p_name : '' )}}" name="p_name">
                @if($errors->has('p_name'))
                    <span class="error-text">
                        {{$errors->first('p_name')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Mô tả:</label>
                <textarea name="p_description" id="" class="form-control" cols="30" rows="3" placeholder="Mô tả ngắn sản phẩm">{{old('p_description', isset($product->p_description) ? $product->p_description : '')}}</textarea>
                @if($errors->has('p_description'))
                    <span class="error-text">
                        {{$errors->first('p_description')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Nội dung:</label>
                <textarea name="p_content" id="" class="form-control" cols="30" rows="3" placeholder="Nội dung">{{old('p_content', isset($product->p_content) ? $product->p_content : '')}}</textarea>
                @if($errors->has('p_content'))
                    <span class="error-text">
                        {{$errors->first('p_content')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title"
                       value="{{old('p_title_seo', isset($product->p_title_seo) ? $product->p_title_seo : '')}}" name="p_title_seo">
            </div>
            <div class="form-group">
                <label for="name">Meta Description:</label>
                <input type="text" class="form-control" placeholder="Meta Description"
                       value="{{old('p_description_seo', isset($product->p_description_seo) ? $product->p_description_seo : '')}}" name="p_description_seo">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="name">Loại sản phẩm:</label>
                <select name="p_category_id"  class="form-control">
                    <option value="">--Chọn loại sản phẩm--</option>
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{old('p_category_id', isset($product->p_category_id) ? $product->p_category_id : '') == $category->id ? "selected ='selected'" : ""}}>{{$category->c_name}}</option>
                        @endforeach
                        @endif

                </select>
                @if($errors->has('p_category_id'))
                    <span class="error-text">
                        {{$errors->first('p_category_id')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Giá sản phẩm:</label>
                <input type="number" name="p_price" class="form-control" placeholder="Giá sản phẩm" value="{{old('p_price', isset($product->p_price) ? $product->p_price : '')}}">
                @if($errors->has('p_price'))
                    <span class="error-text">
                        {{$errors->first('p_price')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">% khuyến mại:</label>
                <input type="number" name="p_sale" class="form-control" value="{{old('p_sale', isset($product->p_sale) ? $product->p_sale : '0')}}">
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
