<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Commissioner;
use App\Models\News;
use App\Models\Page;
use App\Models\ContactSetting;
use App\Models\SiteSetting;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'sliders' => Slider::where('is_active', true)->orderBy('sort_order')->get(),
            'latestNews' => News::published()->take(3)->get(),
            'contact' => ContactSetting::instance(),
            'settings' => $this->getSettings(),
        ]);
    }

    public function chairman()
    {
        $chairman = Commissioner::where('is_chairman', true)->first();
        return view('chairman', [
            'chairman' => $chairman,
            'contact' => ContactSetting::instance(),
            'settings' => $this->getSettings(),
        ]);
    }

    public function commissioners()
    {
        return view('commissioners', [
            'commissioners' => Commissioner::active()->get(),
            'contact' => ContactSetting::instance(),
            'settings' => $this->getSettings(),
        ]);
    }

    public function news()
    {
        return view('news', [
            'articles' => News::published()->get(),
            'contact' => ContactSetting::instance(),
            'settings' => $this->getSettings(),
        ]);
    }

    public function reportCorruption()
    {
        $page = Page::where('slug', 'report-corruption')->first();
        return view('page-view', [
            'page' => $page,
            'contact' => ContactSetting::instance(),
            'settings' => $this->getSettings(),
        ]);
    }

    public function orgStructure()
    {
        return view('org-structure', [
            'contact' => ContactSetting::instance(),
            'settings' => $this->getSettings(),
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'contact' => ContactSetting::instance(),
            'settings' => $this->getSettings(),
        ]);
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('page-view', [
            'page' => $page,
            'contact' => ContactSetting::instance(),
            'settings' => $this->getSettings(),
        ]);
    }

    protected function getSettings(): array
    {
        $settings = SiteSetting::pluck('value', 'key')->toArray();
        $settings['contact'] = ContactSetting::instance();
        $settings['footer_text'] = $settings['footer_text'] ?? '© 2026 Leadership Commission. All Rights Reserved. Designed By LC IT';
        return $settings;
    }
}
