<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DataEcModel;
use CodeItNow\BarcodeBundle\Utils\QrCode;

class DataEcController extends BaseController
{
    public function index()
    {
        $model = new DataEcModel;
        $data['dataec'] = $model->getDataEc();
        echo view('dataemployment', $data);
    }

    public function tambah()
    {
        echo view('addec');
    }

    public function edit($id)
    {
        $model = new DataEcModel;
        $data['row'] = $model->where('ecNo', $id)->first();
        echo view('editdataec', $data);
    }

    public function simpan()
    {
        $data = [
            'ecNo' => $this->request->getpost('ecnumb'),
            'ecDate'  => $this->request->getpost('ecdate'),
            'nameW'   => $this->request->getpost('worker'),
            'nameE' => $this->request->getpost('employer'),
            'address' => $this->request->getpost('address'),
            'salary' => $this->request->getpost('salary'),
            'offDays' => $this->request->getpost('off'),
            'stat' => $this->request->getpost('status'),
        ];

        $emplyee = new DataEcModel();
        $simpan = $emplyee->simpan($data);

        if ($simpan) {
            session()->setFlashdata('pesan', 'Data added successfully.');
            return redirect()->to('/employee');
        } else {
            echo "Error";
        }
    }

    public function update($ecNo)
    {
        $data = [
            'ecNo' => $ecNo,
            'ecDate'  => $this->request->getpost('ecdate'),
            'nameW'   => $this->request->getpost('worker'),
            'nameE' => $this->request->getpost('employer'),
            'address' => $this->request->getpost('address'),
            'salary' => $this->request->getpost('salary'),
            'offDays' => $this->request->getpost('off'),
            'stat' => $this->request->getpost('status'),
        ];

        $employee = new DataEcModel();
        $simpan = $employee->editData($data, $ecNo);
        // dd($simpan);

        if ($simpan) {
            session()->setFlashdata('pesan', 'Data has changed successfully.');
            return redirect()->to('/employee');
        } else {
            echo "Error";
        }
    }

    public function delete($ecNo)
    {
        $pasien = new DataEcModel();
        $data['dataemployee'] = $pasien->delete($ecNo);
        session()->setFlashdata('pesan', 'One data has been deleted.');
        return redirect()->to('/employee');
    }

    public function qrcode($ecNo)
    {
        $model = new DataEcModel;
        $qrCode = new QrCode();
        $url = base_url();

        $data = $model->where('ecNo', $ecNo)->first();
        $pesan = $url . '/hasil/' . $data['ecNo'];
        $qrCode
            ->setText($pesan)
            ->setSize(300)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
            ->setLabel('Scan Qr Code')
            ->setLabelFontSize(16)
            ->setImageType(QrCode::IMAGE_TYPE_PNG);
        $data = '<img style="margin-left:auto;margin-right:auto;"  src="data:' . $qrCode->getContentType() . ';base64,' . $qrCode->generate() . '" id=img  download = Data.png />';

        return $data;
    }

    public function hasil($ecNo)
    {
        $model = new DataEcModel;
        $data['row'] = $model->where('ecNo', $ecNo)->first();
        echo view('detailhasil', $data);
    }
}
