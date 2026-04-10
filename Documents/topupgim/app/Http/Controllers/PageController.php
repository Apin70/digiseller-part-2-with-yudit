<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Map of page slugs to view file names.
     */
    protected array $pageViewMap = [
        'referral'                                          => 'referral',
        'reseller-program'                                  => 'reseller-program',
        'apa-itu-gimkoin'                                   => 'apa-itu-gimkoin',
        'terms-of-use'                                      => 'terms-of-use',
        'privacy-policy'                                    => 'privacy-policy',
        'refund-policy'                                     => 'refund-policy',
        'cara-bayar-di-topupgim'                            => 'cara-bayar-di-topupgim',
        'submit-aplikasi-game'                              => 'submit-aplikasi-game',
        'tutorial-pembayaran-qris-menggunakan-bca'          => 'tutorial-pembayaran-qris-menggunakan-bca',
        'tutorial-pembayaran-qris-menggunakan-bni'          => 'tutorial-pembayaran-qris-menggunakan-bni',
        'tutorial-pembayaran-qris-menggunakan-gopay'        => 'tutorial-pembayaran-qris-menggunakan-gopay',
        'tutorial-pembayaran-qris-menggunakan-shopeepay'    => 'tutorial-pembayaran-qris-menggunakan-shopeepay',
        'tutorial-pembayaran-qris-menggunakan-ovo'          => 'tutorial-pembayaran-qris-menggunakan-ovo',
    ];

    public function show(string $slug)
    {
        $viewName = $this->pageViewMap[$slug] ?? null;

        if (!$viewName || !view()->exists("page.{$viewName}")) {
            abort(404);
        }

        return view("page.{$viewName}", compact('slug'));
    }
}
