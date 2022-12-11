<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordene
 *
 * @property $id
 * @property $producto_id
 * @property $proveedor_id
 * @property $iva
 * @property $fechafactura
 * @property $totalfactura
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordene extends Model
{
    
    static $rules = [
		'producto_id' => 'required',
		'proveedor_id' => 'required',
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
    protected $fillable = ['producto_id','proveedor_id','iva','fechafactura','totalfactura','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedor_id');
    }
    

}
