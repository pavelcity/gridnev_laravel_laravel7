<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contacts;

class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contacts::all();
        return view ('admin.contacts.index', compact('contacts'));
    }


    public function create()
    {
        return view ('admin.contacts.create')->with('go', 'вы перешли на страницу создания контактов');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'one_title' => 'required',
            'one_index' => 'required',
            'one_street' => 'required',
            'one_phone' => 'required',
            'one_email' => 'required|email',
            'two_title' => 'required',
            'two_prodazi_1_phone' => 'required',
            'two_prodazi_2_phone' => 'required',
            'two_snabzenie_1_phone' => 'required',
            'two_technologi_1_phone' => 'required',
            'tri_title' => 'required',
            'tri_phone' => 'required',
            'four_title' => 'required',
            'four_phone' => 'required|email',
            'director' => 'nullable|image'
        ]);


        $contacts = Contacts::add($request->all());
        $contacts->uploadDirector($request->file('director'));
        return redirect()->route('contacts.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $contact = Contacts::find($id);
        return view('admin.contacts.edit', compact('contact'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'one_title' => 'required',
            'one_index' => 'required',
            'one_street' => 'required',
            'one_phone' => 'required',
            'one_email' => 'required|email',
            'two_title' => 'required',
            'two_prodazi_1_phone' => 'required',
            'two_prodazi_2_phone' => 'required',
            'two_snabzenie_1_phone' => 'required',
            'two_technologi_1_phone' => 'required',
            'tri_title' => 'required',
            'tri_phone' => 'required',
            'four_title' => 'required',
            'four_phone' => 'required|email',
            'director' => 'nullable|image'
        ]);

//        dd($request->all());

        $contacts = Contacts::find($id);
        $contacts->edit($request->all());
        $contacts->uploadDirector($request->file('director'));
        return redirect()->route('contacts.index')->with('yes', 'Изменения сохранены');


    }





    public function destroy($id)
    {
        Contacts::find($id)->remove();
        return redirect()->route('contacts.index')->with('yes', 'запись была удалена');
    }
}
