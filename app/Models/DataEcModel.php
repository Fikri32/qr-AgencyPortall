<?php

namespace App\Models;

use CodeIgniter\Model;

class DataEcModel extends Model
{
    protected $table      = 'dataec';
    protected $primaryKey = 'ecNo';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['ecNo', 'ecDate', 'nameW', 'nameE', 'address', 'salary', 'offDays', 'stat'];

    // public function rules()
    // {
    //     return [
    //         [
    //             'field' => 'regist',
    //             'label' => 'No Registrasi',
    //             'rules' => 'required|numeric'
    //         ],
    //         [
    //             'field' => 'ktp',
    //             'label' => 'No KTP',
    //             'rules' => 'required|numeric'
    //         ],
    //         [
    //             'field' => 'telp',
    //             'label' => 'No Telepon',
    //             'rules' => 'required|numeric'
    //         ]
    //     ];
    // }

    public function getDataEc($ecNo = false)
    {
        if ($ecNo === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['ecNo' => $ecNo]);
        }
    }

    public function simpan($data)
    {
        return $this->db->table('dataec')->insert($data);
    }

    public function editData($data, $ecNo)
    {
        $query = $this->db->table('dataec')->update($data, array('ecNo' => $ecNo));
        return $query;
    }

    public function hapus($ecNo)
    {
        $query = $this->db->table('dataec')->delete(array('ecNo' => $ecNo));
        return $query;
    }
}
