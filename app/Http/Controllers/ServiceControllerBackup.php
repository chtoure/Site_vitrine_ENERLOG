<?php

// namespace App\Http\Controllers;

// use App\Services\ParameterService;
// use App\Services\ServicesService;
// use Illuminate\Support\Facades\Http;

// use function Laravel\Prompts\error;

// class ServiceControllerBackup extends Controller {


//     public function getAllServices() {
//         try {
//              $parameter= ParameterService::get();
//              $services = [];

//             $response = Http::get(env('API_URL') . "/service");
//             if ($response->successful()) {
//                 $services = $response->json();  // tableau des films
//                 return view('services.test', ['parameter' => $parameter , 'services' => $services]);
//             }
//             // gérer l’erreur
//             //return view('errprs.page404', ['parameter' => $parameter , 'services' => $services]);

//         } catch (\Throwable $th) {
//             return view('errors.page500', ['parameter' => $parameter , 'services' => $services]);
//         }
//     }

// }