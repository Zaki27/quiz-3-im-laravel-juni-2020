<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{
    public static function get_all()
    {
        $artikels=DB::table('articles')->get();
        return $artikels;
    }

    public static function save($data){
        $new_artikel = DB::table('articles')->insert($data);
        return $new_artikel;
    }

    public static function find_by_id($id)
    {
        $artikels = DB::table('articles')->where('id', $id)->first();
        return $artikels;
    }

    public static function update($id, $request)
    {
        $artikels=DB::table('articles')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                            'tag' => $request["tag"],
                        ]);
        return $artikels;
    }

    public static function destroy($id)
    {
        $deleted=DB::table('articles')
                    ->where('id', $id)
                    ->delete();
        return $deleted;
    }

    protected $fillable=[
        'slug'
    ];
}


?>