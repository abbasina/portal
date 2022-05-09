<?php

namespace App\Http\Controllers\manager;

        use App\Message;
        use App\Http\Controllers\Controller;
        use App\Http\Requests\Manager\Messages\storeRquest;
        use App\Http\Requests\Manager\Messages\UpdateRequest;
        use App\Txtuser;
        use App\User;

        use Illuminate\Foundation\Auth\User as AuthUser;
        use Illuminate\Support\Facades\Auth;
        use Illuminate\Support\Facades\File;
        use Illuminate\Support\Facades\Storage;
        use Verta;

        class MessagesController extends Controller
        {

          public function received()
          {
            
            $messages = Txtuser::where(['receiver_id' => Auth::id()])
              ->join('messages', 'txtusers.msg_id', '=', 'messages.id')
              ->join('users', 'txtusers.sender_id', '=', 'users.id')
              ->paginate(5);
            $v = new verta();


            return view('managerpanel.messages.received', compact(['messages', $v]));
          }
          public function sent()
          {
            
            $messages = Txtuser::where(['sender_id' => Auth::id()])
              ->join('messages', 'txtusers.msg_id', '=', 'messages.id')
              ->join('users', 'txtusers.receiver_id', '=', 'users.id')
              ->paginate(5);
            $v = new verta();


            return view('managerpanel.messages.sent', compact(['messages', $v]));
          }
          public function showmessage($message_id)
          {
            $v = new verta();
            $body = Message::where('id', $message_id)->first();

            return view('managerpanel.messages.show', compact(['body', $v]));
          }
          public function create()
          {

            $users = User::all()->except(Auth::id())->WhereIn('role_id', [1,6]);

            return view('managerpanel.messages.create', compact('users'));
          }
          public function store(storeRquest $request)
          {

            $sender_id = auth()->user()->id;
            $validatedData = $request->validated();



            $createdmessage = Message::create([
              'msgbody' => $validatedData['msgbody'],
              'stutus' => 'unread'

            ]);
            if (isset($validatedData['attachment'])) {
              $file = $validatedData['attachment']->getClientOriginalName();
              $path = time() . $file;
              Storage::disk('storage')->put($path, File::get($validatedData['attachment']));
              $createdmessage->update([
                "attachment" => $path
              ]);
            }
            $owner = $validatedData["owner"];

            $msg_id = $createdmessage->id;


            Txtuser::create([
              "sender_id" => $sender_id,
              "receiver_id" => $owner,
              "msg_id" => $msg_id
            ]);

            if (!$createdmessage) {
              return redirect('/managerpanel/messages/sent')->with('failed', 'پیام ایجاد نشد.');
            }
            return redirect('/managerpanel/messages/sent')->with('success', 'پیام شما با موفقیت ارسال شد.');
          }

          public function delete($message_id)
          {
            $message = Message::find($message_id);
            $message->delete();
            return back()->with('success', "پیام با موفقیت حذف شد");
          }
          public function edit($message_id)
          {
            $message = Message::find($message_id);
            return view('managerpanel.messages.edit', compact('message'));
          }
          public function update(UpdateRequest $request, $message_id)
          {
            $validatedData = $request->validated();
            $message = Message::find($message_id);
            $updatedmessage = $message->update([
              'msgbody' => $validatedData['msgbody'],
            ]);
            if (!$updatedmessage) {
              return back()->with('failed', 'پیام ویرایش نشد.');
            }
            return redirect('/managerpanel/messages/sent')->with('success', 'پیام با موفقیت ویرایش شد.');
          }
          public function downloadattach($message_id)
          {
            $message = Message::findOrFail($message_id);
            return response()->download(storage_path('app/majma/' . $message->attachment));
          }
        }
