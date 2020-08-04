<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contacts::all();
        return view ('pages.contacts.index', compact('contacts'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }



    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
