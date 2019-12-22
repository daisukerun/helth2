<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HelthController extends Controller
{
  public function index(){
    return view('helth.index');
  }
   public function add(Request $request)
   {
 $items= DB::select('select * from helth2');
     return view('date.date',['items'=> $items]);
 }
  public function post(Request $request){
    $d=$request->tairyokujikann1;
    $a=$request->tairyokujikann2;
    $n=$a/100;
   $val=$d*$n;
   return view('helth.keisan',compact('val'));
}
public function create(Request $request){
$date=[
  'name'=>$request->name,
  'zentai'=>$request->zentai,
  'tairyokujikann1'=>$request->tairyokujikann1,
  'tairyokujikann2'=>$request->tairyokujikann2
];
DB::insert('insert into helth2 
(name,
zentai,
tairyokujikann1,
tairyokujikann2) 
values (:name,
:zentai,
:tairyokujikann1,
:tairyokujikann2)', 
$date);
return redirect('date');
}
}
