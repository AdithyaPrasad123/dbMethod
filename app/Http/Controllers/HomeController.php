<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function do_register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'email',
            'dob'=>'date',
            'place'=>'required',
        ]);
        $now=Carbon::now();
        DB::table('registers')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'dob'=>$request->dob,
            'place'=>$request->place,
            'created_at'=>$now,
            'updated_at'=>$now,
        ]);
        

        return redirect()->route('register')->with('success',"Registered Successfully");
    }
    public function view()
    {
        $data=DB::table('registers')->get();
        // $data=DB::table('registers')->where('name','anu')->first();
        // $data=DB::table('registers')->where('id',3)->first();
        // $data = DB::table('registers')->find(4);
        // $data=DB::table('registers')->where('id','>',3)->get();
        // $data = DB::table('registers')->select(DB::raw('count(id) as count'), 'place')->groupBy('place')->havingRaw('count(id) > 1')->get();
        return view('view',compact('data'));
    }
    public function edit($id)
    {
        $row=DB::table('registers')->find($id);
        return view('edit',compact('row'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'dob' => 'date',
            'place' => 'required',
        ]);

        $now = Carbon::now();
        DB::table('registers')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'place' => $request->place,
            'updated_at' => $now,
        ]);

        return redirect()->route('view')->with('success', "Record updated successfully");
    }

    public function delete($id)
    {
        DB::table('registers')->where('id', $id)->delete();
        return redirect()->route('view')->with('success', "Record deleted successfully");
    }
}
