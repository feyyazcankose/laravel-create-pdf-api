<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


class pdfController extends Controller
{
    public function cappdf(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
    
        $pdf = PDF::loadView('pdf.cap',$data);
        return $pdf->download ('capbasvuru.pdf');
       
    }
    public function yazpdf(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
    
        $pdf = PDF::loadView('pdf.yazokulu',$data);
        return $pdf->download ('yazbasvuru.pdf');
       
    }
    public function derspdf(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
    
        $pdf = PDF::loadView('pdf.dersin',$data);
        return $pdf->download ('dersbasvuru.pdf');
       
    }
    
    public function dgspdf(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
    
        $pdf = PDF::loadView('pdf.dgs',$data);
        return $pdf->download ('dgsbasvuru.pdf');
       
    }
    public function yataypdf(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
      
        $pdf = PDF::loadView('pdf.yatay',$data);
        return $pdf->download ('YGbasvuru.pdf');
       
    }
}
