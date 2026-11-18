<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Fairuz Mohammad Yafi',
            'Budi Santoso',
            'Siti Antartika',
            'Rizky Pratama',
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}