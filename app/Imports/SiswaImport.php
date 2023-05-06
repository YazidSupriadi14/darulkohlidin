<?php

namespace App\Imports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            //
            
                'name' => $row[0],
                'nisn' => $row[1], 
                'nis' => $row[2],
                'noskl' => $row[3],
                'tmp_lahir' => $row[4], 
                'tgl_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5])->format('Y-m-d h:m:s'),
                'status' => $row[6],
                'tahun_lulus' => $row[7],
                'gender' => $row[8], 
                'tingkat_pendidikan' => $row[9], 
             
                
                
                 
     
        ]);
    }
}
