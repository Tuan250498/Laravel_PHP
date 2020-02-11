<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * Class Product
 * @package App
 * @property string p_name
 * @property string p_slug
 * @property int p_category_id
 * @property string p_content
 * @property int p_price
 * @property int p_author_id
 * @property int p_sale
 * @property int p_active
 * @property int p_hot
 * @property int p_view
 * @property string p_title_seo
 * @property string p_description
 * @property string p_avatar
 * @property string p_description_seo
 */
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['p_name','p_slug','p_category_id','p_content','p_price','p_author_id','p_sale','p_active','p_hot','p_view','p_title_seo','p_description','p_avatar','p_description_seo',];
    const STATUS_PUBLIC = 1;
    const  STATUS_PRIVATE = 0;
    protected $status = [
        1 =>[
            'name' => 'Public',
            'class'=>'label-danger'
        ],
        0 =>[
            'name'=>'Private',
            'class'=>'label-default'
        ]
    ];
    public function getStatus()
    {
        return Arr::get($this->status,$this->p_active, '[N\A]');
    }

    public function category(){
        return $this->belongsTo(Category::class,'p_category_id');
    }
}
