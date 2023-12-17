<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
   {
      return view('<h1>Codeingiter Host On GCP and Docker</h1>');
   }
}
