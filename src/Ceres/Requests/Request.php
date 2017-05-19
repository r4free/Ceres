<?php
/**
 * Created by PhpStorm.
 * User: Rafa
 * Date: 18/05/2017
 * Time: 20:21
 */

namespace Ceres\Requests;


class Request
{

    /**
     * Request constructor.
     */

    public $request;

    public function __construct($post)
    {
        $this->request = $post;
    }

}