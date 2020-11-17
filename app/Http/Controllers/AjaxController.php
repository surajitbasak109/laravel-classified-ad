<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function state(Request $request)
    {
        $attributes = $request->validate(['country' => ['required', 'string']]);
        $state = State::where('country_id', $attributes['country'])->get(['id', 'name']);

        return response()->json($state);
    }

    public function city(Request $request)
    {
        $attributes = $request->validate(['state' => ['required', 'string']]);
        $city = City::where('state_id', $attributes['state'])->get(['id', 'name']);

        return response()->json($city);
    }

    public function uploadDropzone(Request $request)
    {
        if ($request->hasFile('file')) {
            // upload path
            $destPath = public_path('post/');

            // create directory if not exists
            if (!file_exists($destPath)) {
                mkdir($destPath, 0755, true);
            }

            // get the file extension
            $ext = $request->file('file')->getClientOriginalExtension();

            // valid extensions
            $validExts = ['jpeg', 'jpg', 'png', 'gif'];

            // check extension
            if (in_array(strtolower($ext), $validExts)) {
                // Rename file
                $fileName = uniqid() . '-' . time() . '.' . $ext;
                // upload file to given path
                $request->file('file')->move($destPath, $fileName);
                return response()->json([
                    'success' => true,
                    'filename' => $fileName
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid file format. Allowed files are jpeg, jpg, png and gif'
                ]);
            }
        }
    }
}
