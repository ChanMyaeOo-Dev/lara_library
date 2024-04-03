<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return (view('admin.setting.index', compact('setting')));
    }
    public function create()
    {
        //
    }
    public function store(StoreSettingRequest $request)
    {
        //
    }
    public function show(Setting $setting)
    {
        //
    }
    public function edit(Setting $setting)
    {
        //
    }
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->borrowing_duration = $request->borrowing_duration;
        $setting->fine_rate = $request->fine_rate;
        $setting->update();
        return redirect()->route('settings.index')->with("message", "Successfully updated.");
    }
    public function destroy(Setting $setting)
    {
        //
    }
}
