<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Mail\ContactoMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.contacto');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        try {
            $row = new Contact;

            $row->name = $request->name;
            $row->company = $request->company;
            $row->phone = $request->phone;
            $row->email = $request->email;
            $row->message = $request->message;

            $details = [
                'name' => $row->name,
                'company' => $row->company,
                'phone' => $row->phone,
                'email' => $row->email,
                'message' => $row->message
            ];

            // Enviar email a ambos destinatarios
            Mail::to(['rodolfoulises.ramirez@gmail.com', 'ventas@integraibe.com.mx'])->send(new ContactoMail($details));

            // Guardar en base de datos
            $row->save();

            return redirect()->back()->with('success', 'Nos pondremos en contacto contigo en un máximo de 24 horas.');
        } catch (\Exception $e) {
            // Log del error para debugging
            Log::error('Error sending contact email: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo o contáctanos directamente.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
