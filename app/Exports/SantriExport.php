<?php

namespace App\Exports;

use App\Models\Santri;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SantriExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Santri::select('id', 'nipd','nama', 'jk', 'telp', 'alamat')->get();
    }

    public function headings(): array
    {
        return ["ID", "NIPD", "NAMA", "JENIS KELAMIN", "NO TELPON", "ALAMAT"];
    }

}
