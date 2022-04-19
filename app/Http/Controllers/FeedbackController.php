<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Question;
use App\Models\Write;

use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public $gmail = "024@i-marketing.kz";

    public function order(Request $request)
    {
        $name = $request->get('name');
        $phone = $request->get('phone');
        $url = $request->get('url');

        $to = $this->gmail;
        $subject = "Заявка с сайта proffmetall.kz";
        $sendfrom   = "no-reply@proffmetall.kz";
        $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        $message = "
        $subject<br>
        <b>Имя:</b> $name <br>
        <b>Телефон:</b> $phone <br>
        <b>URL:</b> $url";

        $send = mail($to, $subject, $message, $headers);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false], 400);
        }
        
        if ($send)
        { 
            $feedback = new Order();
            $feedback->name = $request->name;
            $feedback->phone = $request->phone;
            $feedback->save();
        }

        return response()->json(['success' => true], 200);
    }

    public function question(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $question = $request->get('question');
        $url = $request->get('url');

        $to = $this->gmail;
        $subject = "Заявка с сайта proffmetall.kz";
        $sendfrom   = "no-reply@proffmetall.kz";
        $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        $message = "
        $subject<br>
        <b>Имя:</b> $name <br>
        <b>Email:</b> $email <br>
        <b>Вопрос:</b> $question <br>
        <b>URL:</b> $url";

        $send = mail($to, $subject, $message, $headers);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false], 400);
        }
        
        if ($send)
        { 
            $feedback = new Question();
            $feedback->name = $request->name;
            $feedback->email = $request->email;
            $feedback->question = $request->question;
            $feedback->save();
        }

        return response()->json(['success' => true], 200);
    }

    public function write(Request $request)
    {
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $text = $request->get('text');
        $url = $request->get('url');

        $to = $this->gmail;
        $subject = "Заявка с сайта proffmetall.kz";
        $sendfrom   = "no-reply@proffmetall.kz";
        $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        $message = "
        $subject<br>
        <b>Имя:</b> $name <br>
        <b>Телефон:</b> $phone <br>
        <b>Email:</b> $email <br>
        <b>Вопрос:</b> $text <br>
        <b>URL:</b> $url";

        $send = mail($to, $subject, $message, $headers);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false], 400);
        }
        
        if ($send)
        { 
            $feedback = new Write();
            $feedback->name = $request->name;
            $feedback->phone = $request->phone;
            $feedback->email = $request->email;
            $feedback->text = $request->text;
            $feedback->save();
        }

        return response()->json(['success' => true], 200);
    }
}
