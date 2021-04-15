<?php

namespace App\Http\Controllers;

use App\Models\Footballcamp;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Middleware\SetLocale;

class MainController extends Controller
{
    public function index()
    {
        $footballcamps = Footballcamp::all()->take(3);
        return view('home',compact('footballcamps'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    /**
     * Retrieve the contact demand and send it in mail
     *
     * @param Request $request
     */
    public function contactform(Request $request)
    {
        require base_path("vendor/autoload.php");

        $name = htmlentities($request->name);
        $email = htmlentities($request->email);
        $message = htmlentities($request->message);

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

            $mail->Subject = "Contact from : ".$name;
            $mail->Body    = "<span style='font-size: 1.3em;font-weight: bold'> $name ($email) send :</span><p>$message</p>";

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
