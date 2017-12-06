<?php

namespace App\Controllers;

use App\Libraries\Mail;
use App\Libraries\View;
use App\Models\Article;
use Gregwar\Captcha\CaptchaBuilder;

class PageController
{
    public function index()
    {
        $articles = Article::all();
        View::render('/pages/index',compact('articles'));
    }

    public function about()
    {
        View::render('/pages/about');
    }

    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = htmlentities(trim($_POST['message']));
            $captchaInput = trim($_POST['captcha']);
            $inputs = compact('name','email','message');

            if ($name == '')
            {
                $this -> contactwithError("El campo nombre es obligatorio",$inputs);
            }
            elseif ($email == '')
            {
                $this -> contactwithError("El campo email es obligatorio",$inputs);
            }
            elseif ($message == '')
            {
                $this -> contactwithError("El campo message es obligatorio",$inputs);
            }

            elseif ($captchaInput != $_SESSION['phrase']) {
                $this->contactWithError('El texto no coincide con la imagen', $inputs);
            }



            $mail = new Mail;

            if (!$mail->validateAddress($email)) {
                $this->contactWithError('El email ingresado no es válido', $inputs);

            }

            $mail->setFrom(ED_MAIL['AddressFrom'], ED_MAIL['NameFrom']);
            $mail->addAddress(ED_MAIL['AddressInbox'], ED_MAIL['NameInbox']);
            $mail->isHTML(true);

            $mail->Subject = "ED Styles: {$name} <{$email}>";
            $mail->Body    = nl2br($message);

            if($mail->send()) {
                View::render('pages/success');

            } else {
                $this->contactWithError('El mensaje no pudo ser enviado. Error: ' . $mail->ErrorInfo, $inputs);

            }
        }

        else
        {
            $captcha = new CaptchaBuilder;
            $captcha->build();
            $_SESSION['phrase'] = $captcha->getPhrase();
            View::render('pages/contact', compact('captcha'));
            View::render('/pages/contact');
        }
    }
    private function contactwithError($errorMessage,array $variables = [])
    {
        $captcha = new CaptchaBuilder;
        $captcha->build();
        $_SESSION['phrase'] = $captcha->getPhrase();

        $variables['captcha'] = $captcha;
        $variables['errorMessage'] = $errorMessage;
        View::render('/pages/contact', $variables);
        exit;
    }
}