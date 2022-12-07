<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $contacts = Contact::all();
    //     return view ('contacts.index')->with('contacts', $contacts);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('contact')->with('flash_message', 'Contact Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts = Contact::find($id);
        return view ('contacts.index')->with('contacts', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact Deleted!');
    }

    public function saveContacts(Request $userInput){
        $nameofContacts =$userInput->nameOfSpecificContact;
        $valueofContacts=$userInput->valueOfSpecificContact;
        // dd("contact number ".$valueofContacts,$nameofContacts);
        $contactModel= new Contact;
        $contactModel->mobile=$valueofContacts;
        $contactModel->name=$nameofContacts;
        // dd($nameofContacts);
        $contactModel->save();
        return back();
    }

    public function showdata(){
        $showContacts=new Contact; // instantiate contact model here
        $datafromContacts=$showContacts::all();
        // dd( $datafromContacts);
        return view('contacts.index',['contacts'=>$datafromContacts]);
    }
    public function deleteContact($id){
        $deleteContact=new Contact; // instantiate contact model here
        $deletedContact = $deleteContact::find($id);

        // dd($deletedContact);
        // Call delete function here
        $deletedContact->delete(); 
        return back();
    }

    public function getSpecificContact($id){
        $specificContact = new Contact;
        $selectedContact = $specificContact::find($id);
        return view('contacts.edit',['specificContact'=>$selectedContact]);
    }
    public function updateContact($id,Request $userInput){
        $specificContact = new Contact;
        // Get user input
        $newName  = $userInput->specificContactName;
        $newNumber  = $userInput->newMobile;
        // Update Details
        $foundContact  = $specificContact::find($id);
        $foundContact->name=$newName;
        $foundContact->mobile=$newNumber;
        // Save new details
        $foundContact->save();
        // dd("saved successfully");
        return redirect("contact");
    }

}
