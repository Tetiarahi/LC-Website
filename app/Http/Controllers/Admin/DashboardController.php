<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Commissioner;
use App\Models\News;
use App\Models\Page;
use App\Models\Document;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'sliders' => Slider::count(),
            'commissioners' => Commissioner::count(),
            'news' => News::count(),
            'pages' => Page::count(),
            'documents' => Document::count(),
        ]);
    }
}
