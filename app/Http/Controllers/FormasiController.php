<?php

namespace App\Http\Controllers;

use App\Models\Formasi1;
use App\Models\Formasi2;
use App\Models\Formasi3;
use App\Models\Formasi4;
use App\Models\Formasi5;
use App\Models\Formasi6;
use App\Models\Formasi7;
use App\Models\Formasi8;
use App\Models\Formasi9;
use App\Models\Formasi10;

class FormasiController extends Controller
{
    private function getFilteredFormasi($baris)
    {
        return [
            'formasi1'  => Formasi1::where('baris', $baris)->orderBy('id')->get(),
            'formasi2'  => Formasi2::where('baris', $baris)->orderBy('id')->get(),
            'formasi3'  => Formasi3::where('baris', $baris)->orderBy('id')->get(),
            'formasi4'  => Formasi4::where('baris', $baris)->orderBy('id')->get(),
            'formasi5'  => Formasi5::where('baris', $baris)->orderBy('id')->get(),
            'formasi6'  => Formasi6::where('baris', $baris)->orderBy('id')->get(),
            'formasi7'  => Formasi7::where('baris', $baris)->orderBy('id')->get(),
            'formasi8'  => Formasi8::where('baris', $baris)->orderBy('id')->get(),
            'formasi9'  => Formasi9::where('baris', $baris)->orderBy('id')->get(),
            'formasi10' => Formasi10::where('baris', $baris)->orderBy('id')->get(),
        ];
    }

    public function indexK()
    {
        return view('K', $this->getFilteredFormasi('K'));
    }
    public function indexJ()
    {
        return view('J', $this->getFilteredFormasi('J'));
    }
    public function indexI()
    {
        return view('I', $this->getFilteredFormasi('I'));
    }
    public function indexH()
    {
        return view('H', $this->getFilteredFormasi('H'));
    }
    public function indexG()
    {
        return view('G', $this->getFilteredFormasi('G'));
    }
    public function indexF()
    {
        return view('F', $this->getFilteredFormasi('F'));
    }
    public function indexE()
    {
        return view('E', $this->getFilteredFormasi('E'));
    }
    public function indexD()
    {
        return view('D', $this->getFilteredFormasi('D'));
    }
    public function indexC()
    {
        return view('C', $this->getFilteredFormasi('C'));
    }
    public function indexB()
    {
        return view('B', $this->getFilteredFormasi('B'));
    }
    public function indexA()
    {
        return view('A', $this->getFilteredFormasi('A'));
    }
}
