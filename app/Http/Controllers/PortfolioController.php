<?php

namespace App\Http\Controllers;

use App\Actions\GetPortfolioDataAction;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class PortfolioController
 * 
 * Controller utama untuk portofolio.
 * Mengikuti prinsip "Skinny Controller" dengan mendelegasikan logika ke Action.
 */
class PortfolioController extends Controller
{
    /**
     * Menampilkan halaman utama portofolio.
     *
     * @param GetPortfolioDataAction $getPortfolioData Action untuk mengambil data portofolio.
     * @return View Mengembalikan view index dengan data portofolio.
     */
    public function index(GetPortfolioDataAction $getPortfolioData): View
    {
        $data = $getPortfolioData->execute();

        return view('portfolio.index', $data);
    }
}
