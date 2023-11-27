<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        try{
            $db = \Config\Database::connect();
            $db->initialize();
        }catch (\Throwable $th){
            // Exception
        }

        if(!is_null($db->mysqli->connect_error)){
            echo "<h1>Database 未連線</h1>";
        }else{
            echo "<h1>Database 已連線</h1>";
        }
        
        var_dump($db);
        $db->close();

        return "<h1> Demo Page </h1>";
    }
}
