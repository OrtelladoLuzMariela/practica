<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Stock extends Model
{
    protected $table = 'Stock';
    public function Libro()
    {
    	return $this->belongsTo("App\Models\Libro");
    }
}