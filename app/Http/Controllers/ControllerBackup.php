<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\Services\ServicesService;
use Illuminate\Support\Facades\Http;

use function Laravel\Prompts\error;

class ControllerBackup extends Controller {


    //  Methode pour recuperer parameter depuis l'api de wordPress

    public function getParameter() {
        try {

                    $DataParameter = [];
                    $response = Http::get(env('API_URL') . "/parameter");
                    if ($response->successful()) {
                        $DataParameter = $response->json();  // tableau des films
                        foreach ($DataParameter[0]['acf']['comptes'] as $key => $compte) {
                            $idCompte=$compte['ID'];
                            // dd(env('API_URL') . "/compte" . "/$idCompte");
                            $responseData =  Http::get(env('API_URL') . "/compte" . "/$idCompte");
                            $dataCompte = $responseData->json();
                            $DataParameter[0]['acf']['comptes'][$key]=$dataCompte['acf'];
                        }
                        dd($DataParameter[0]['acf']);
                    // dd($services[0]['acf']);
                    // return view('services.test', ['parameter' => $parameter , 'services' => $DataParameter]);
                }
                // gérer l’erreur
                // return view('errprs.page404', ['parameter' => $parameter , 'services' => $DataParameter]);

            } catch (\Throwable $th) {
                // return view('errors.page500', ['parameter' => $parameter , 'services' => $DataParameter]);
            }
    }

}