<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Mail;

class Mails extends Controller
{
    
    public function signup($id)
    {//return $id;
        
        if($user = User::find($id))
        {
            
            Mail::send('mails.clientSignup', ['user'=>$user], function ($message) use ($user) {
                $message->to($user->email, $user->firstname.$user->lastname);
        	    $message->from('info@teamsourcing.com.bd', 'TeamSourcing Admin');
        	    $message->subject('Welcome to TeamSourcing Bangladesh');
        	    
        	});
            
        }
        
    }
    
    
    public function accountActivation($id)
    {
        
        $user = User::where('id',$id)->first();
        
        if($user)
        {
            
            Mail::send('mails.clientAccountActivationConfirmation', ['user'=>$user], function ($message) use ($user) {
                $message->to($user->email, $user->firstname." ".$user->lastname);
        	    $message->from('info@teamsourcing.com.bd', 'TeamSourcing Admin');
        	    $message->subject('Your account has been activated at TeamSourcing (BD)');
        	    $message->bcc('ashique19@gmail.com', 'A3');
        	});
            
        }
        
    }
    
    
    public function forgotPassword($id, $new_password)
    {
        
        if($user = User::find($id)){
            
            Mail::send('mails.forgotPassword', ['user' => $user, 'new_password'=>$new_password], function ($m) use ($user) {
                $m->to($user->email, $user->firstname." ".$user->lastname)
                  ->subject('Password Recovery')
                  ->from('ashique19@gmail.com', 'Admin');
            });
            
        }
        
    }
    
    
    public function contactToAdmin($request)
    {
        
        Mail::send('mails.contact-to-admin', ['request'=>$request], function ($message) use ($request) {
                            $message->to( env('EMAIL_INFO') , 'To whom it may concern')
                                    ->from( env('EMAIL_SYS') , 'Notification System')
                    	            ->subject('New Contact Request has arrived');
                    	    
                    	});
        
    }
    
   
    
}
