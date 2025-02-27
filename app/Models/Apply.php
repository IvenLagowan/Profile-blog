<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pdf; 

class Apply extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'idcard', 'name', 'gander'];

    protected $guarded = ['id'];


    public function apply()
    {
        return $this->belongsTo(Apply::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'id' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }

//     public function cetakpdf()
// {
// 	$apply = Apply::all();
 
// 	$pdf = Pdf::loadview('apply',['apply'=>$apply]);
// 	return $pdf->download('laporan-apply-pdf');
// }
}
