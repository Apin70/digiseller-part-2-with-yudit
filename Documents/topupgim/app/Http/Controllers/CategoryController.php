<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Map of category slugs to view file names.
     */
    protected array $categoryViewMap = [
        'Game'              => 'Game',
        'E-Wallet'          => 'E-Wallet',
        'Aplikasi'          => 'Aplikasi',
        'Isi Pulsa'         => 'Isi_Pulsa',
        'Paket Internet'    => 'Paket_Internet',
        'Paket SMS & Telepon' => 'Paket_SMS___Telepon',
        'Tambah Masa Aktif' => 'Tambah_Masa_Aktif',
    ];

    public function show(string $category)
    {
        $viewName = $this->categoryViewMap[$category] ?? null;

        if (!$viewName || !view()->exists("category.{$viewName}")) {
            abort(404);
        }

        return view("category.{$viewName}", compact('category'));
    }
}
