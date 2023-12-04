<?php
namespace App\Controllers;

class Api extends BaseController
{
   public function index(): string
   {
      return view('welcome_message',  $data);
   }

   public function show()
   {
       echo $this->encrypt('test');
   }


   private function encrypt($data = null){
        return 'dssasfafadfafdfasdf';
   }
}
