<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\jeu;
use App\Models\Poste;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\categoriedesjeux;

class ReservationController extends Controller
{
    public function show()
    {
        $jeux=jeu::all();
        $places= Poste::all()->count();
        $categories=categoriedesjeux::all();
        return view('reservation',compact('jeux','categories'));
    }
    public function recupPlaces(Request $request ){
        try {
           
            $date = $request ->date;
            $N=[];
            $R=[];
            $heure=['16:00:00','17:00:00','18:00:00','19:00:00','20:00:00','21:00:00'];
            $Poste= Poste::where('poste_statut',1)->count();
            $j= Jeu::all()->count();
          
           
            for ($i=0; $i <6 ; $i++) { 
                $a=$heure[$i];
                $R[$i]=Reservation::where('reservation_date',$date)
                                ->where('reservation_heure_debut',$a)->get();
                }   
            foreach($R as $r){
                $a=0;
                foreach($r as $t){
                    $a+=$t->reservation_nombre_personne;
                }
                array_push($N,$Poste-$a);
            }
        

           
            return response()->json([
                'success' => true,
                'data' => [
                'Nplaces' => $N,
                'Njeux' =>$j,
                ],
                'message' => 'DONE'
                ]);
        } catch (Exception $e) {
                return response()->json([
                'success' => false,
                'message' => $e->getMessage()
                ], 400);
            }
        }
}

?>
