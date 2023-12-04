<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

class Utilite extends BaseController
{
    use \CodeIgniter\API\ResponseTrait;

    protected $res=[
            'code' => '500',
            'msg'=>'Unknown method.',
            'data' => '',
            'status' => false,
    ];
        
    public function index()
    {
        $info = new \App\Models\InfoTableModel();
        $this->res['data'] = $info->findAll();
        return $this->setResponseFormat('json')
            ->respond($this->res)
            ->setHeader('Access-Control-Allow-Origin', '*');
    }
}
