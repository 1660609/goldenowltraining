<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
    
class Product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'product';
    protected $fillable = [
        'id_category', 'name','description','content','thumbnail','gallery','price',

    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function galleries()
    {
        return $this->hasMany('App\Models\Gallery','product_id');
        
    }
    
}
