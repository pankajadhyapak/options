<?php namespace Pankaj\Options;

use DB;

class Options {

    public function __construct()
    {
        //dd("constructor");
        //dd("constructor");
}

    public function Update($key, $value){
        $res = DB::table('options')->where('key', $key);

        if($res->get() != NULL){

             $res->update(['value' => $value]);
        }else{

             DB::table('options')->insert(['key'=>$key,'value'=>$value]);
        }

    }

    public function get($key){
       return DB::table('options')->where('key', $key)->pluck('value');
    }

    public function delete($key){
         DB::table('options')->where('key', $key)->delete();
    }

    public function reset(){
        DB::table('options')->truncate();
    }
} 