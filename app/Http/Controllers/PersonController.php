<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        if(!$request->sort){
            $sort = 'id';
        }else{
            $sort = $request->sort;
        }
        $items = Person::orderBy($sort,'asc')->paginate(5);
        $param=['items'=> $items, 'sort' =>$sort, 'user' =>$user];
        return view('index', $param);
    }
    public function find(Request $request)
    {
        return view('find', ['input'=>'']);
    }
    public function search(Request $request)
    {
        $item = Person::where('name', $request->input)->first();
        $param=[
            'input'=>$request->input,
            'item'=>$item
        ];
        return view('find', $param);
    }
    public function add (Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, person::$rules);
        $form = $request->all();
        Person::create($form);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('edit',['form'=>$person]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $form = $request->all();
        $form = $request->except(['_token']);
        unset($form['_token']);
        Person::where('id', $request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view('delete',['form'=>$person]);
    }
    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/');
    }
    public function getAuth(Request $request)
    {
        $param = ['message'=>'ログインして下さい。'];
        return view('person.auth', $param);
    }
    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $msg = 'ログインしました。('.Auth::user()->name.')';
        }else{
            $msg = 'ログインに失敗しました。';
        }
        return view('person.auth',['message'=>$msg]);
    }
}