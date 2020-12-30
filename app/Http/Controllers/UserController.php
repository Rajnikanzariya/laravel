<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use App\MyConstant;

class UserController extends Controller
{
    
    public function emp()
    {
        $userdetails    = DB::table('emp')->select('id','employee')->get();
        return view('allemp', compact('userdetails'));
        
        //$token = $request->session()->get('token');
       
        /* $client = new \GuzzleHttp\Client();
         $response = $client->request('POST', MyConstant::ApiLink.'/empdetail', [
            'headers' => [ 
                'Content-Type'      =>  'application/json',
                'X-Requested-With'  =>  'XmlHttpRequest'
            ],
        ]);
        $userdetails       = $response->getBody()->getContents();
        return view('allemp', compact('userdetails'));*/
    }

    public function empdata()
    {
        $userdetails    = DB::table('emp')->select('id','employee')->get();
        return $userdetails;
    }
   
}