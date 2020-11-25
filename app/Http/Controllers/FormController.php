<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index(){
        $forms = Form::all()
                ->sortBy('created_at');
        return view('forms.index',compact('forms'));
    }

    public function create(){
        return view('forms.form');
    }

    public function store(Request $request){
        $form = new Form();
        $form->firstName = $request->firstName;
        $form->surname = $request->surname;
        $form->email = $request->email;
        $form->desc = $request->desc;
            $form->save();
            return redirect()->route('forms.index');
    }
}
