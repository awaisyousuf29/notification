<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Deposit;
use App\Notifications\DepositSuccessful;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }

   public function deposit(Request $request){
        $deposit = Deposit::create([
            'user_id' => Auth::user()->id,
            'badge_name'=> $request->badge_name
        ]);
        User::find(Auth::user()->id)->notify(new DepositSuccessful($deposit->badge_name));
        return redirect()->back()->with('success', 'Badge earned successfully');
   }

   public function markAsRead(){
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
   }
}
