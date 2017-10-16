<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\URL;
use Validator;
use File;
use Session;
use App;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '<>', auth()->user()->id)->select([
            'name', 'email', 'created_at', 'id'
        ])->get();
        $active = 'users';
        return view('admin.users.index', compact('active', 'users'));
    }

    public function sendMulti(Request $request)
    {

        $users=$request->get('users');
        for ($i=0 ; $i<sizeof($users);$i++){

        App\Models\Messages::create(['sender_id' => auth()->user()->id, 'reciver_id' => $users[$i], 'body' => $request->get('body')]);
        }
        $request->session()->flash('success', 'Message Send Success');
        return redirect()->back();


    }


    public function data()
    {
        $user_id = auth()->user()->id;
        $users = User::where('id', '<>', $user_id)->select([
            'name', 'email', 'created_at', 'id'
        ]);
        return Datatables::of($users)->addColumn('chat', function ($user) {
            return '<a href="/home/message/' . $user->id . '" >
                            <button clasFs="btn btn-sm green btn-outline filter-submit margin-bottom" title="messages ">
                            <i class="fa fa-eye"></i> 
                            </button>
                            </a>';
        })->addColumn('chazxt', function ($user) {
            return '';
        })->editColumn('id', function ($user) {
            return App\Models\Messages::where(['sender_id' => \Illuminate\Support\Facades\Auth::user()->id, 'reciver_id' => $user->id])
                ->orWhere(['reciver_id' => \Illuminate\Support\Facades\Auth::user()->id, 'sender_id' => $user->id])->count();
        })
            ->escapeColumns([])
            ->make();
    }

    public function message($id)
    {
        $active = 'messages';
        $user = User::find($id);
        $user_id = auth()->user()->id;
        $messages = App\Models\Messages::where(['sender_id' => $user_id, 'reciver_id' => $id])->
        orWhere(['reciver_id' => $user_id, 'sender_id' => $id])->orderBy('id')->get();
        return view('admin.users.message', compact('active', 'messages', 'user'));
    }


    public function send(Request $request, $id)
    {
        $active = 'messages';
        $user = User::find($id);
        $user_id = auth()->user()->id;

        App\Models\Messages::create(['sender_id' => $user_id, 'reciver_id' => $id, 'body' => $request->get('body')]);
        $messages = App\Models\Messages::where(['sender_id' => $user_id, 'reciver_id' => $id])->
        orWhere(['reciver_id' => $user_id, 'sender_id' => $id])->orderBy('id')->get();
        return view('admin.users.message', compact('active', 'messages', 'user'));
    }


}
