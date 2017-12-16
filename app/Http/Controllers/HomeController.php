<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Test;
use App\page;
use App\Jobs\SendTest;
use App\Queue;

class HomeController extends Controller
{
    protected $massage;
    public function __construct() {
        $this->massage = 'Hello World!';
    }

    public function index()
    {
        $q = 'Hello World!';
        $a = dispatch(new SendTest($q));
        //$result = Test::all();
        //dd($result);
        

        
        
        
        $qq = 'Hello World! hi';
        $aa = dispatch(new SendTest($qq));
        $aaa = dispatch(new SendTest('Hello World! hi 1'));
        $aaaa = dispatch(new SendTest('Hello World! hi 2'));
        $aaaaa = dispatch(new SendTest('Hello World! hi 3'));
        $aaaaas = dispatch(new SendTest('Hello World! hi 4'));

        return view('queue')->with(['q' => $qq]);
        //return view('index')->with(['massager' => $this->massage, 'db' => $result]);
    }
    
    public function user($id)
    {
        $res = page::select('id','name','password')->where('id',$id)->first();
        return view('page')->with(['massager' => $this->massage, 'dbres' => $res]);
    }
    public function add()
    {
        return view('add')->with(['massager' => $this->massage]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'password' => 'required|max:255'
        ]);
         $data = $request->all();
         $testing = new Test;
         $testing->fill($data);
         $testing->save();
         return redirect('/');
        
    }
}
