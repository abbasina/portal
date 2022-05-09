<?php

namespace App\Http\Controllers\manager;

use App\Capital;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Users\UpdateRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
      public function all(){
        $users=User::paginate(10);
        return view('managerpanel.users.all',compact('users'));
   }
      public function create(){
        return view('managerpanel.users.create');
   }
  //     public function store(storeRquest $request){
  //       $validatedData=$request->validated();
  //      $createduser = User::create([
  //         'name' => $validatedData['title']
  //       ]);
  //       if(!$createduser){
  //         return back()->with('failed','کاربر افزوده نشد.');
  //         }
  //         return back()->with('success','کاربر جدید با موفقیت ایجاد شد.');
        
  //  }
   public function delete($user_id){
     $user=User::find($user_id);
     $user->delete();
     return back()->with('success',"کاربر با موفقیت حذف شد");

   }
   public function edit($user_id){
     $user=User::find($user_id);
     return view('managerpanel.users.edit',compact('user'));

   }
   public function update(UpdateRequest $request,$user_id){
     
    $validatedData=$request->validated();
    $user=User::find($user_id);
    $updateduser=$user->update([
      'fullname' => $validatedData['fullname'],
      'phone' => $validatedData['phone'],
      'role_id' => $validatedData['role'],
    ]);
    if(!$updateduser){
      return back()->with('failed','کاربر ویرایش نشد.');
      }
      return back()->with('success','کاربر با موفقیت ویرایش شد.');

   }
   public function capitals($user_id){
     $usercapitals=User::find($user_id)->capitals()->get();
     $capitals=Capital::all();
     
     return view('managerPanel.users.capitals',compact('capitals','usercapitals','user_id'));
   }
   public function addcapital($user_id){
    $usercapitals=User::find($user_id)->capitals()->get()->toArray();
    $user=User::whereId($user_id)->get()->first();
    $capitals=Capital::all()->toArray();
    
    $diffcapitals = array_diff(array_column($capitals, 'name','id'), array_column($usercapitals, 'name','id'));
    
    
    return view('managerpanel.users.addcapital',compact('user','diffcapitals'));

   }
   public function addcapitaluser(Request $request,$user_id){
    $user=User::whereId($user_id)->get()->first();
    $validated = $request->validate([
      'capital_id' => 'required|exists:capitals,id',
      
  ]);
        $upadte=$user->capitals()->attach(intval($validated['capital_id']));
        if(!$upadte){
          return back()->with('success','مجوزهای لازم برای کلانشهر مورد نظر به کاربر افزوده شد.');
          }
          return back()->with('faild','مجوزهای لازم برای کلانشهر مورد نظر به کاربر افزوده نشد.');


   }
}
