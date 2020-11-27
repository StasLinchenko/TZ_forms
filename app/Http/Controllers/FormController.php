<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all()
            ->sortBy('created_at');
        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.form');
    }

    public function store(Request $request)
    {
        $rules = [
            'firstName' => 'required|max:20|regex:[a-zA-Z]',
            'surname' => 'required|max:40|regex:[a-zA-Z]',
            'email' => 'required|email',
            'desc' => 'required|max:255'
        ];
        $this->validate($request, $rules);

        $form = new Form();
        $form->firstName = $request->firstName;
        $form->surname = $request->surname;
        $form->email = $request->email;
        $form->desc = $request->desc;
        $form->save();

        return redirect()->back()->withSuccess('You send some info');
    }
}
