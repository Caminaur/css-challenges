<?php

namespace App\Http\Controllers;

use App\Services\GenericService;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        (new GenericService)->generateCSVReport(2);
        Excel::download(new UserExport, 'invoices.xlsx');
        return view('home.home');
    }
}
