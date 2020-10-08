<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;

class ClientsController extends Controller
{
    public function index(){

        $dataDe = date('Y-m-d H:i:s',strtotime('-15 days'));
        $clients = Clients::whereBetween('created_at',[$dataDe,date('Y-m-d H:i:s')])->get();
        return response()->json($clients);
    
    }
}