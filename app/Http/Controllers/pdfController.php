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
          return $pdf->download('capbasvuru.pdf');
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
          'tel'=>$request->tel,
          'ders_kod1'=>$request->ders_kod1,
          'ders_ad1'=>$request->ders_ad1,
          'ders_kredi1'=>$request->ders_kredi1,

          'ders_kod2'=>$request->ders_kod2,
          'ders_ad2'=>$request->ders_ad2,
          'ders_kredi2'=>$request->ders_kredi2,

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
          'tel'=>$request->tel,
          'ders_akts1'=>$request->ders_akts1,
          'ders_basari1'=>$request->ders_basari1,
          'ders_akts2'=>$request->ders_akts2,
          'ders_basari2'=>$request->ders_basari2,


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
          'tel'=>$request->tel,
          'diploma'=>$request->diploma,
          'mezun'=>$request->mezun,
          'merkez'=>$request->merkez,
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
          'bolum'=>$request->bolum,
          'sinif'=>$user->sinif,
          'fakulte'=>$request->fakulte,
          'email'=>$user->email,
          'tel'=>$request->tel,
          'notortalama'=>$request->notortalama,
          'giris_yil'=>$request->giris_yil,
          'taban'=>$request->taban,

          
      ];

        $pdf = PDF::loadView('pdf.yatay',$data);
        return $pdf->download ('YGbasvuru.pdf');
      }
      return view("welcome");
    }


}
