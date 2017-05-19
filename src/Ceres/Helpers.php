<?php
/**
 * Created by PhpStorm.
 * User: Rafa
 * Date: 18/05/2017
 * Time: 20:49
 */

namespace Ceres;


class Helpers
{

    /**
     * Helpers constructor.
     */
    public function __construct()
    {
        $h = new Helpers();

    }

    public static function dd(){
    $param  = func_get_args();

    for($i=0; $i <= count($param);$i++){
        var_dump($param[$i]);
    }

}
}