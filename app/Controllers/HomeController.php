<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | MVC IoT',
            'informasi' => [
                [
                    'keterangan' => 'website ini dibuat untuk memenuhi praktikum 5 pemrograman web'
                ],
                [
                    'keterangan' => 'dibuat oleh Nabil Karren Yudhistira - 105219056'
                ]
            ]
        ];

        return view('Pages/Home', $data);
    }
}
