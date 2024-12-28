<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create()
    {
        $companies = Employer::with('user')->orderBy('name')->simplePaginate(5);
        return view('companies' , [
            'companies' => $companies
        ]);
    }
}
