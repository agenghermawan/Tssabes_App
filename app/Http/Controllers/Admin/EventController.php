<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\event;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index(){
        $getEvent = event::all();
        return view('Admin.Event.index',compact('getEvent'));
    }

    public function create(){
        return view('Admin.Event.create');
    }

    public function store(EventRequest $request){
        $data = $request->all();
        $data['image'] = $request->file('image')->store('public/image','public');
        event::create($request->all());
        toast('berhasil menambhkan event','success');
        return redirect()->route('event.index');
    }

    public function delete(Request $request){
        if($request->id == null){
            toast('data yang anda hapus tidak di temukan','error');
            return back();
        }
        event::where('id',$request->id)->delete();
        toast('berhasil menghapus event','success');
        return back();
    }
}
