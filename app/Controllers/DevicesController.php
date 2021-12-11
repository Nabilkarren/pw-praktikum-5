<?php

namespace App\Controllers;

use App\Models\device_dataModel;

class DevicesController extends BaseController
{
    protected $deviceModel;
    public function __construct()
    {
        $this->deviceModel = new device_dataModel();
    }

    public function devices()
    {
        $perangkat = $this->deviceModel->findAll();

        $data = [
            'title' => 'Devices | MVC IoT',
            'perangkat' => $perangkat
        ];

        // $db = \Config\Database::connect();
        // $DevicesController = $db->query("SELECT * FROM device_data");

        // foreach ($DevicesController->getResultArray() as $row) {
        //     d($row);
        // }


        return view('Pages/Devices', $data);
    }
}
