<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WelcomeItem;


class AdminWelcomeItemController extends Controller
{
    public function index()
    {
        $welcome_item = WelcomeItem::where('id', 1)->first();
        return view('admin.welcome.index', compact('welcome_item'));
    }
    public function update(Request $request)
    {
        $obj = WelcomeItem::where('id', 1)->first();

        // Validate required fields
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'video' => 'required',
        ]);

        // Check and validate if a new photo is uploaded
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Check if the existing photo file exists before unlinking
            if (!empty($obj->photo) && file_exists(public_path('uploads/' . $obj->photo))) {
                unlink(public_path('uploads/' . $obj->photo));
            }

            // Store the new photo and update the model
            $final_name = 'welcome_item_' . time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        // Update the other fields in the model
        $obj->heading = $request->heading;
        $obj->description = $request->description;
        $obj->button_text = $request->button_text;
        $obj->button_link = $request->button_link;
        $obj->video = $request->video;
        $obj->status = $request->status;

        // Save the updated model
        $obj->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Welcome Item Updated Successfully');
    }
}
