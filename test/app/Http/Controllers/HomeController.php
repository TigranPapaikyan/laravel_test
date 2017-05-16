<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomeController extends Controller{
    
    public function index(){
        $data = fopen(storage_path() . DIRECTORY_SEPARATOR . 'product.data.json', 'a+');
        $products = [];
        while($_row = fgets ($data)){
            $products[] = json_decode($_row, true);
        }
        return view('home.index', [
            'products' => $products
        ]);
    }
    
    public function productCreate(Request $request){
        $data = json_encode([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
        ]);
        $jsonFile = fopen(storage_path() . DIRECTORY_SEPARATOR . 'product.data.json', 'a+');
        fwrite($jsonFile, $data."\n");
        fclose($jsonFile);
        return $data;
        return;
    }
}