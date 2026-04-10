<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $slug, string $id)
    {
        // Convert slug to safe view name (same logic as Python script)
        $safeSlug = preg_replace('/[^a-zA-Z0-9_-]/', '_', $slug);
        $viewPath = "product.{$safeSlug}.{$id}";

        if (!view()->exists($viewPath)) {
            abort(404);
        }

        return view($viewPath, compact('slug', 'id'));
    }
}
