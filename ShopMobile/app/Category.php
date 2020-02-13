<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * Class Category
 * @package App
 * @property string c_name
 * @property string c_slug
 * @property string c_icon
 * @property string c_avatar
 * @property int c_active
 * @property int c_total_product
 * @property string c_description_seo
 * @property string c_keyword_seo
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['c_name','c_slug','c_icon','c_avatar','c_active','c_total_product','c_description_seo','c_keyword_seo'];
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
        return Arr::get($this->status,$this->c_active, '[N\A]');
    }
}
