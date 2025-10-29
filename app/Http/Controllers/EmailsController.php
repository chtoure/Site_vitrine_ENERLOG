<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\services\ServicesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{



    // public function contact(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'nullable|string',
    //         'email' => 'nullable|email',
    //         'message' => 'required|string',
    //     ]);


    //     try {
    //         $parameter = ParameterService::get();
    //         $contactEmail = $parameter['contact']['email'] ?? 'tourenaruto447@gmail.com';

    //         // Construire le corps du mail
    //         $payload = [
    //             "subject" => "Nouveau message de contact",
    //             "body" => "<p><strong>Nom :</strong> {$validated['name']}</p>
    //                     <p><strong>Email :</strong> {$validated['email']}</p>
    //                     <p><strong>Message :</strong><br>{$validated['message']}</p>",
    //             "fromEmail" => $validated['email'],
    //             "fromName" => $validated['name'],
    //             "toEmail" => $contactEmail,
    //             "toName" => "Support Enerlog"
    //         ];

    //         // Envoi du mail via l’API Enerlog
    //         $response = Http::post('https://cpay.enerlog.net/message/send/mail', $payload);

    //         if ($response->successful()) {
    //             return back()->with('success', 'Votre message a bien été envoyé !');
    //         } else {
    //             return back()->withErrors([
    //                 'error' => 'Une erreur est survenue lors de l’envoi du message. (' . $response->status() . ')'
    //             ]);
    //         }

    //     } catch (\Exception $e) {
    //         return response()->view('errors.page500', [
    //             'parameter' => $parameter,
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }






     public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string',
            'email' => 'nullable|email',
            'message' => 'required|string',
        ]);


        try {
            $parameter = ParameterService::get();
            $services = ServicesService::getAll();
            $contactEmail = $parameter['contact']['email'] ?? 'support@enerlog.net';

            $payload = [
                "subject" => "Commentaire portail",
                "body" => "<p><strong>Nom :</strong> {$validated['name']}</p>
                        <p><strong>Email :</strong> {$validated['email']}</p>
                        <p><strong>Message :</strong><br>{$validated['message']}</p>",
                "fromEmail" => "no-reply@enerlog.net",
                "fromName" => "Enerlog Bot",
                "toEmail" => $contactEmail,
                "toName" => "Support Enerlog"
            ];

            $response = Http::withoutVerifying()
                ->post('https://cpay.enerlog.net/message/send/mail', $payload);

            if ($response->successful()) {

                // dd($response->body());
                return back()->with('success', 'Votre message a bien été envoyé !');
            } else {

                // dd($response->status());
                return back()->withErrors([
                    'error' => 'Une erreur est survenue lors de l’envoi du message. (' . $response->status() . ')'
                ]);
            }

        } catch (\Exception $e) {
            // dd($e->getMessage());
            return response()->view('errors.page500', [
                'services' => $services,
                'parameter' => $parameter,
                'error' => $e->getMessage(),
            ], 500);
        }
    }





}
