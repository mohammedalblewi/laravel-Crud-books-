<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bookcrud;

class mycontroller extends Controller
{
    //
    function insert(Request $req){
       $name =   $req->get('book_title');
       $book_desc =   $req->get('book_description');
       $book_auth =   $req->get('book_auther');
       $book_img =   $req->file('book_image')->getClientOriginalName();

       // move uploaded image

       $req->book_image->move(public_path('images'), $book_img);

       $booknew = new bookcrud();
       $booknew->book_title = $name;
       $booknew->book_description = $book_desc;
       $booknew->book_auther = $book_auth;
       $booknew->book_image = $book_img;
       $booknew->save();

       return redirect('/');

    }

    function readdata(){
        $bookdata = bookcrud::all();
        return view('insertRead',['data'=> $bookdata ]);
    }

    function updateordelete(Request $req){
        $id = $req->get('Id');
        $name = $req->get('book_title');
        $descr = $req->get('book_description');
        $authr = $req->get('book_auther');

        if($req->get('update') == 'Update'){
            return view('updateview',['id' => $id , 'book_title' => $name, 'book_description' => $descr, 'book_auther' => $authr]);
        }
        else {
            $bookdata = bookcrud::find($id);
            // $bookdata->delete();
        }
        return redirect('/');
    }
}
