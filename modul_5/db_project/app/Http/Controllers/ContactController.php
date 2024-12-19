<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
{
    public function index()
    {
        return ContactResource::collection(Contact::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        
        $contact = Contact::create($validated);

        return new ContactResource($contact);
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return new ContactResource($contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return new ContactResource($contact);
    }

    public function destroy($id)
    {
        Contact::destroy($id);
        return response('data berhasil dihapus',null);
    }
}
