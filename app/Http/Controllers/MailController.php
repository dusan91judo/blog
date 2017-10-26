<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Notifications\MailNotification;
use App\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function mail()
    {
        $company = Company::where('id', '=', 1)->first();
        $user = User::where('id', '=', 1)->first();
        $user->notify(new MailNotification($company));
        dd($user->toArray());
        return view('welcome');
    }
}
