<?php

namespace App\Http\Controllers;

use App\Models\Bateau;
use App\Models\Footballcamp;
use http\Exception;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class BateauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('bateaux');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function show(Bateau $bateau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function edit(Bateau $bateau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bateau $bateau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bateau $bateau)
    {
        //
    }


    /**
     * Retrieve the booking demand and send it in mail
     *
     * @param Request $request
     */
    public function booking(Request $request)
    {
        require base_path("vendor/autoload.php");

        $from = htmlentities($request->from);
        $to = htmlentities($request->to);
        $datestart = htmlentities($request->datestart);
        $dateend = htmlentities($request->dateend);
        $adult = htmlentities($request->adult);
        $child = htmlentities($request->child);
        $name = htmlentities($request->name);
        $email = htmlentities($request->email);
        $radiotrip = htmlentities($request->radiotrip);
        $moyen = htmlentities($request->moyen);
        $marque = htmlentities($request->marque);
        $modele = htmlentities($request->moyen);
        $longueur = htmlentities($request->longueur);
        $hauteur = htmlentities($request->hauteur);
        $largeur = htmlentities($request->largeur);



        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'soufi.travel.services@gmail.com';   //  sender username
            $mail->Password = 'krpmykkeomjomiyr';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom('soufi.travel.services@gmail.com', 'soufi.travel.services@gmail.com');
            $mail->addAddress('soufi.travel.services@gmail.com');

            $mail->isHTML(true);

            $mail->Subject = "Booking demand from : ".$name;
            $mail->Body    = "<span style='font-size: 1.3em;font-weight: bold'> $name ($email) want to travel : $radiotrip</span><p>From $from to $to</p><p>Arrivée : $datestart - Départ : $dateend</p><p>Adultes  : $adult - Enfants : $child</p><p>Moyen de transport  : $moyen&nbsp;(Marque: $marque, Modèle: $modele, Longueur : $longueur , Hauteur : $hauteur , Largeur : $largeur)</p>";

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }

            else {
                return back()->with("success", "Email has been sent.");
            }

        } catch (Exception $e) {
            return back()->with('error','Message could not be sent.');
        }
    }
}
