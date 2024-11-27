<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculController extends Controller
{
    public function index()
    {
        return view('calculatrice');
    }

    public function calculer(Request $request)
    {
        $result = 0;
        $operation = $request->input('operation');
        $nombre1 = $request->input('nombre1');
        $nombre2 = $request->input('nombre2');


            switch ($operation) {
               case 'addition':
                    $result = $nombre1 + $nombre2;
                    break;
                case 'soustraction':
                    $result = $nombre1 - $nombre2;
                    break;
                case 'multiplication':
                    $result = $nombre1 * $nombre2;
                    break;
                case 'division':
                    if ($nombre2 == 0) {
                        $result = "Opération invalide";
                    } else {
                        $result = $nombre1 / $nombre2;
                    }
                    break;
                case 'carre':
                    $result = pow($nombre1, 2);
                    break;
                case 'cosinus':
                    $result = cos($nombre1);
                    break;
                case 'sinus':
                    $result = sin($nombre1);
                    break;
                case 'tangente':
                    $result = tan($nombre1);
                    break;
                default:
                    $result = "Opération invalide";
            }
        echo $result;
        //return view('calculatrice', compact('$result'));
    }
}
