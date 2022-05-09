<?php

namespace App\Http\Controllers\manager;


use App\Invite;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Invites\storeRquest;
use App\Role;

        class InvitesController extends Controller
        {
          public function all(){
            $invites=Invite::paginate(10);
            return view('managerpanel.invites.all', compact('invites'));

          }
          public function create(){
           
            $roles=Role::all();
            
            return view('managerpanel.invites.create', compact('roles'));

          }
          public function store(StoreRquest $request){
            $validatedData = $request->validated();
            $randomsting=substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,8);
            $createdinvite = Invite::create([
              'Code' => $randomsting,
              
              'role_id' => $validatedData['role_id'],

            ]);
            if($createdinvite)
            return redirect()->back()->with('success','کد معرف ایجاد شده برابر است با:'.$randomsting);
          }








          public function delete($Code_id)
          {
            $Code = Invite::find($Code_id);
            $Code->delete();
            return back()->with('success', "کد معرف با موفقیت حذف شد");
          }



        }
