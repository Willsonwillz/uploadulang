<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petambak extends Model
{
    //
    public $timestamps = false;
    protected $table = 'petambaks';
    protected $id_petambak;
    protected $nama;
    protected $gender;
    protected $no_telp;
    protected $alamat;

    public static function ambilsemua()
    {
        return self::all();
    }
    public static function ambil($id)
    {
        return self::find($id);
    }
}
