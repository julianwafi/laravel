<?php

// app/Http/Controllers/ExcelController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TableDataExport;
use App\Models\TableData;

class ExcelController extends Controller
{
    public function index()
    {
        $tableData = TableData::all(); // Ganti dengan model dan data Anda
        return view('generate_excel', compact('tableData'));
    }
}
