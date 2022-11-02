<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'prod_title',
        'slug',
        'prod_sku',
        'prod_fabric',
        'prod_color',
        'prod_sizes',
        'local_shipping',
        'international_shipping',
        'disclaimer',
        'short_description',
        'pkr_price',
        'uae_price',
        'qatari_price',
        'saudi_price',
        'us_price',
        'uk_price',
        'cad_price',
        'euro_price',
        'discount',
        'net_price',
        'publish',
        'status',
        'is_recommend',
        'created_by',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Get the category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    /**
     * The categories that belong to the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }



    /**
     * Get the meta associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function meta()
    {
        return $this->hasOne(ProductMeta::class, 'product_id', 'id');
    }


    /**
     * Get all of the images for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
