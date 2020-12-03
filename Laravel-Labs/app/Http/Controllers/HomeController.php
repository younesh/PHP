<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

           // dd("HomeController@home !! " . time());
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function blog($myId, $myAuthor="someBody") {
        $posts = [
            1 => ['title' => '<a href="http://yahoo.fr" target="_blank"> learn laravl 06 </a>  '],
            2 => ['title' => 'learn angular 08 '],
        ];
        
        // si la var $myId n'exist pas en tant que $posts[$myId] ça declanche une erreur, c'est pourquoi il faut la controller :
        $newId =  isset($posts[$myId]) ? $myId : 1;
    
        return view('posts.show', [
            'data' => $posts[$newId],
            'author' =>$myAuthor 
        ]);
       
    }
}