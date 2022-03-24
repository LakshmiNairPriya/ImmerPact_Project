<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Support\Facades\File;
class CustomerController extends Controller
{
public function CustomerAdd(){
    return view('customerform');
}
public function CustomerCreate(Request $request){
  $customer=new Customers();
 /* if($request->hasFile('image')){
      $file=$request->file('image');
      $ext=$file->getClientOriginalExtension();
      $filename=time().".".$ext;
      $file->move('uploads/customer/',$filename);
      $customer->image=$filename;
  }*/
  $customer->name=$request->input('name');
  $customer->address=$request->input('address');
  $customer->phone=$request->input('phone');
  $customer->email=$request->input('email');
  $customer->save();
  return redirect('/dashboard')->with('status','Successfully created!!!');
}
public function CustomerList(){
    $customer = Customers::all();
    return view('customerlist',compact('customer'));
}
public function editCustomer($id){
    $customer =Customers::find($id);
    
return view('editcustomer',compact('customer'));
}
public function updateCustomer(Request $request, $id){
    $customer=Customers::find($id);

   /*if($request->hasFile('image')){
        $path='uploads/customer/'.$customer->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time().".".$ext;
        $file->move('uploads/customer/',$filename);
        $customer->image=$filename;
    }*/
    $customer->name = $request->input('name');
    $customer->address = $request->input('address');
    $customer ->phone = $request->input('phone');
    $customer->email = $request->input('email');
    $customer->update();
    return redirect('/dashboard')->with('status','Student Updated Successfully');
}
public function deleteCustomer($id){
   $customer =Customers::find($id);
   /*if($customer->image){
    $path='uploads/customer/'.$customer->image;
    if(File::exists($path)){
        File::delete($path);
    }*/
    $customer->delete();
    return redirect ('/customerlist')->with('status','Deleted successfully');
}
}
