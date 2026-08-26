<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSetting;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings', [
            'site' => SiteSetting::pluck('value', 'key'),
            'contact' => ContactSetting::instance(),
        ]);
    }

    public function update(Request $request)
    {
        $siteFields = ['site_name', 'site_tagline', 'footer_text', 'chairman_message', 'about_description', 'vision', 'mission', 'strategic_plan_text'];
        foreach ($siteFields as $field) {
            if ($request->has($field)) {
                SiteSetting::set($field, $request->input($field));
            }
        }

        $contact = ContactSetting::instance();
        $contact->update($request->only(['phone', 'phone2', 'toll_free', 'email', 'address', 'pobox', 'office_hours', 'facebook_url']));

        return redirect()->route('admin.settings')->with('success', 'Settings updated.');
    }
}
