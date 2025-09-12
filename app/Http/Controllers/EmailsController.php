<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        try {
            $parameter = ParameterService::get();
            $contactEmail = $parameter['contact']['email'] ?? 'takpaagilbert@gmail.com';

            // $contactEmail =$validated['email'];


            Mail::send('emails.contact', [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'messageContent' => $validated['message'],
            ], function ($message) use ($validated, $contactEmail) {
                $message->to($contactEmail)
                        ->subject('Nouveau message de contact')
                        ->from($validated['email'], $validated['name']);
            });

            return back()->with('success', 'Votre message a bien été envoyé !');

        } catch (\Exception $e) {
            return response()->view('errors.page500', [], 500);
        }
    }


}
