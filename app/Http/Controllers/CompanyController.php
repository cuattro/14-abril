<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::paginate(5);
        return (view('company.index',compact('companies')));
    }
}
