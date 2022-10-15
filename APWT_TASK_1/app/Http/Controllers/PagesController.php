<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $message = "Welcome to first task";
        return view('hello')->with('message', $message);
    }

    public function profile(){
        $name = "TAIB";
        $id="1000";
        $dob = "10 Jan 2000";
        $names=array("HAMID", "LABIB", "POROSH");
        return view('profile')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
}
public function contactus(){
    $owner= " Hafizur";
    $contactno="017*******";
    $owneremail="hafiz@gmail.com";
    return view('contactus')
    ->with('owner', $owner)
    ->with('contactno', $contactno)
    ->with('owneremail', $owneremail);
}
public function aboutus(){

        return view('aboutus');
}
public function teams(){

    $teammembers=array("Ananna", "NurNobi", "Mazid");
    return view('teams')->with('teammembers', $teammembers);
}
public function services(){

    $provider=array("Health Care", "Web Dev", "Car Rent"," Visa ");
    return view('services')->with('provider', $provider);
}
}
