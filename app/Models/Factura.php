<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $producto_id
 * @property $iva
 * @property $fechafactura
 * @property $totalfactura
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'producto_id' => 'required',
		'iva' => 'required',
		'fechafactura' => 'required',
		'totalfactura' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','iva','fechafactura','totalfactura','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'producto_id');
    }
    

}
