<?php

/**
 * Created by PhpStorm.
 * User: Stefa
 * Date: 19-3-2018
 * Time: 14:40
 */
class TestController extends Controller
{

    public function index()
    {
        echo '<br> index <br>';
//        redirect('/test/create');
    }

    /**
     * @return string
     */
    public function test()
    {
        echo 'test';
//        return view('test');
    }

    /**
     * @param int $id
     */
    public function view(int $id = 0)
    {
        print_r($id);
        echo '<br> view';
        die($id);
    }

    /**
     * @param $id
     */
    public function xxx()
    {
        print_r('im good');
        die('xxx');
    }

}