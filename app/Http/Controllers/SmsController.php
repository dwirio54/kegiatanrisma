<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use  Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    // public function sms(){
    // $user = User::findOrFail(Auth::user()->id);
    // $activity = Activity::all();
    // $register = Register::all();

    // $hitung = $register->qty * $activity->idr;

    // Nexmo::message()->send([
    //     'to' =>  '62'. $user->phone,
    //     'from' => 'ARM',
    //     'text'  => 'Terimakasih telah melakukan pendaftaran dalam kegiatan kami. Silahkan buka link ini untuk melakukan upload buku pembayaran anda dengan kode pembayaran'

    //     .'Kode pendaftaran:'.$activity->kode_activity
    //     .'Jumlah Tiket:'.$register->qty
    //     .'Total Pembayaran:'.$hitung
    //     ]);
    // }
}
