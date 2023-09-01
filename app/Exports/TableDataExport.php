<?php

// app/Exports/TableDataExport.php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\TableData; // Ganti dengan model yang sesuai

class TableDataExport implements FromCollection
{
    public function collection()
    {
        return TableData::all(); // Ganti dengan model dan data Anda
    }
}
