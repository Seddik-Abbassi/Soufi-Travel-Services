<?php

namespace App\Http\Controllers;

use App\Mail\OfferMail;
use App\Models\Footballcamp;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use PHPMailer\PHPMailer\PHPMailer;

class FootballcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $footballcamps = Footballcamp::get();
        return view('footballcamps', compact('footballcamps'));
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
     * @param  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $footballcamp = Footballcamp::find($id);
        return View::make("footballcamp", compact('footballcamp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footballcamp  $footballcamp
     * @return \Illuminate\Http\Response
     */
    public function edit(Footballcamp $footballcamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footballcamp  $footballcamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footballcamp $footballcamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footballcamp  $footballcamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footballcamp $footballcamp)
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

        $name = htmlentities($request->name);
        $email = htmlentities($request->email);
        $id = htmlentities($request->offre);

        $footballcamp = Footballcamp::find($id);

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
            $mail->Body    = "<span style='font-size: 1.3em;font-weight: bold'> $name want to book : $footballcamp->title</span> Email : ".$email;

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
