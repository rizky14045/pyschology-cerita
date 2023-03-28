<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use Ramsey\Uuid\Rfc4122\UuidV4;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function general()
    {
        $data['setting'] = Setting::get();
        return view('admin.setting.index',$data);
    }

    public function generalStore(Request $request)
    {
        $setting = Setting::where('key','name')->first();
        $setting->value = $request->name;
        $setting->save();

        $setting = Setting::where('key','logo')->first();
        if(!empty($request->logo)){
            //filename
            $new_filename = UuidV4::uuid4().'.'.$request->logo->extension();
            //move file
            $request->logo->move('uploads/setting/',$new_filename);
            
            $setting->value = $new_filename;
            $setting->save();
        }

        $setting = Setting::where('key','favicon')->first();
        if(!empty($request->favicon)){
            //filename
            $new_filename = UuidV4::uuid4().'.'.$request->favicon->extension();
            //move file
            $request->favicon->move('uploads/setting/',$new_filename);
            
            $setting->value = $new_filename;
            $setting->save();
        }

        Alert::success('Success', 'Setting have been changed');
        return redirect('admin/settings/general');
    }

    public function socialLink()
    {
        return view('admin.settings.social-link');
    }

    public function socialLinkStore(Request $request)
    {
        foreach ($request->setting as $name => $setting) {
            $data['name'] = $name;
            $data['value'] = $setting;

            $setting = Setting::where('name',$name)->first();
            $setting->update($data);
        }

        Alert::success('Success', 'Setting have been changed');
        return redirect('admin/settings/general');
    }
}
