<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use PDF;


class pdfController extends Controller
{

    public function cappdf(Request $request){


        $user = Auth::user();
        //dd($request);
        if($user!=null){
          $data=[
              'title'=>'Kocaeli Üniversitesi',
              'name'=> $user->name,
              'tc'=> $user->tc,
              'ogrenci'=>$user->ogrenci,
              'bolum'=>$user->bolum,
              'sinif'=>$user->sinif,
              'fakulte'=>$user->fakulte,
              'email'=>$user->email,
              'notortalama'=>$request->notortalama,
              'tel'=>$request->tel,
              'cap'=>$request->cap,
          ];
          $pdf = PDF::loadView('pdf.cap',$data);
          return $pdf->download ('capbasvuru.pdf');
        }
        return view('welcome');


    }
    public function yazpdf(Request $request){
      $user = Auth::user();
      if($user!=null){
      $data=[
          'title'=>'Kocaeli Üniversitesi',
          'name'=> $user->name,
          'tc'=> $user->tc,
          'ogrenci'=>$user->ogrenci,
          'bolum'=>$user->bolum,
          'sinif'=>$user->sinif,
          'fakulte'=>$user->fakulte,
          'email'=>$user->email,
      ];

        $pdf = PDF::loadView('pdf.yazokulu',$data);
        return $pdf->download ('yazbasvuru.pdf');
      }
      return view('welcome');
    }
    public function derspdf(Request $request){
      $user = Auth::user();
      if($user!=NULL){
      $data=[
          'title'=>'Kocaeli Üniversitesi',
          'name'=> $user->name,
          'tc'=> $user->tc,
          'ogrenci'=>$user->ogrenci,
          'bolum'=>$user->bolum,
          'sinif'=>$user->sinif,
          'fakulte'=>$user->fakulte,
          'email'=>$user->email,
      ];

        $pdf = PDF::loadView('pdf.dersin',$data);
        return $pdf->download ('dersbasvuru.pdf');
      }
      return view('welcome');


    }

    public function dgspdf(Request $request){
      $user = Auth::user();
      if($user!=NULL){
      $data=[
          'title'=>'Kocaeli Üniversitesi',
          'name'=> $user->name,
          'tc'=> $user->tc,
          'ogrenci'=>$user->ogrenci,
          'bolum'=>$user->bolum,
          'sinif'=>$user->sinif,
          'fakulte'=>$user->fakulte,
          'email'=>$user->email,
      ];

        $pdf = PDF::loadView('pdf.dgs',$data);
        return $pdf->download ('dgsbasvuru.pdf');
      }
      return view('welcome');
      }
    public function yataypdf(Request $request){
      $user = Auth::user();
      if($user!=NULL){
      $data=[
          'title'=>'Kocaeli Üniversitesi',
          'name'=> $user->name,
          'tc'=> $user->tc,
          'ogrenci'=>$user->ogrenci,
          'bolum'=>$user->bolum,
          'sinif'=>$user->sinif,
          'fakulte'=>$user->fakulte,
          'email'=>$user->email,
      ];

        $pdf = PDF::loadView('pdf.yatay',$data);
        return $pdf->download ('YGbasvuru.pdf');
      }
      return view("welcome");
    }
}
