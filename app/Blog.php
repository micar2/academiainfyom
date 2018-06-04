<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


class Blog extends Model
{
    public static function generateMenu($table)
    {

//        $categoriesPrimary = DB::table($table)->where('route','not like','%-%')->select('name','route')->get();
//        $categoriesSecondary = DB::table($table)->where([['route','like','%-%'],['route','not like','%-%-%']])->select('name','route')->get();
//        $categoriesTerciary = DB::table($table)->where('route','like','%-%-%')->select('name','route')->get();

        $menu = [];

        $categoriesPrimary = DB::table($table)->where([['category_id','=','1'],['id','!=','1']])->get();
        foreach ($categoriesPrimary as $key => $categoryPrimary){

            if (!empty($categoriesSecondary = DB::table($table)->where('category_id', '=', $categoryPrimary->id)->get())){

                foreach ($categoriesSecondary as $categorySecondary){

                    $categoriesTerciary = DB::table($table)->where('category_id', '=', $categorySecondary->id);
                    if ($categoriesTerciary->count()>0){
                        $categoriesTerciary = $categoriesTerciary->get();
                        foreach ($categoriesTerciary as $categoryTerciary){

                                $menu[]=[$categoryPrimary->name=>[$categorySecondary->name=>$categoryTerciary->name]];

                        }
                       
                    }else{

                        $menu[]=[$categoryPrimary->name=>$categorySecondary->name];

                    }

                }
            }else{
                $menu[]=$categoryPrimary->name;
            }
          }


        //dd($menu);
        return $menu;

    }

    public static function generateFirstMenu($table)
    {
        $categoriesPrimary = DB::table($table)->where([['category_id','=','1'],['id','!=','1']])->get();
        return $categoriesPrimary;
    }

    public static function generateSecondMenu($table, $id)
    {

        $categoriesSecundary = DB::table($table)->where('category_id','=',$id)->get();

        return $categoriesSecundary;
    }



        dd($menu);
        return $menu;

    }

}
