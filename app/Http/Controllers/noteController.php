<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Cookie;

class noteController extends Controller
{

       public function addNote(Request $request){
            $token = Cookie::get('token');
            $response = Http::withHeaders([
                'token' => $token
            ])->post('note-taking.my.id/public/note/add',[
            'judul' => $request->judul,
            'content' => $request->content
            ]);

            $hasil = json_decode($response);
        if($hasil->success){
            // return $hasil;
            return view('dashboard');
        }
        return "masukkan data";
        }


    public function deleteNote(Request $request){
        $id = $request->id;
        $token = Cookie::get('token');
        $url = 'note-taking.my.id/public/note/delete/'.$id;
        $request = Http::withHeaders([
            'token' => $token
        ])->delete($url);
        if($request){
            return $request;
        }
    }

    public function update(Request $request){
        $id = $request->id;
        return view('update' , ['id' => $id]);
    }

    public function updateNote(Request $request){
        $id = $request->id;
        $token = Cookie::get('token');
        $url = 'note-taking.my.id/public/note/update/'.$id;
        $request = Http::withHeaders([
            'token' => $token
        ])->update($url);
        if($request){
            return $request;
        }
    }

}
