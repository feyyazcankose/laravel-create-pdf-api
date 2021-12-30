<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use PDF;


class pdfController extends Controller
{

    public function cappdf(){
        $user = Auth::user();
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

        $pdf = PDF::loadView('pdf.cap',$data);
        return $pdf->download ('capbasvuru.pdf');

    }
    public function yazpdf(){
      $user = Auth::user();
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
    public function derspdf(){
      $user = Auth::user();
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

    public function dgspdf(){
      $user = Auth::user();
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
    public function yataypdf(){
      $user = Auth::user();
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
}
