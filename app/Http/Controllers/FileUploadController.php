<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    public function showItem()
    {
        $items = Item::all(); // Fetch all items
        return view('web-project/updatedPopularItem', compact('items'));
    }

    public function upload(Request $request)
    {
        // Validate files
        $fileValidator = Validator::make($request->all(), [
            'files.*' => 'required|file|mimes:jpg,png,jpeg',
        ]);

        $uploadedFiles = $request->file('files');
        if (!$uploadedFiles) {
            return back()->with('fail', 'No files were uploaded');
        }

        if ($fileValidator->fails()) {
            $errors = $fileValidator->errors();
            $invalidFiles = [];

            foreach ($request->file('files') as $index => $file) {
                if (!in_array($file->getClientOriginalExtension(), ['jpg', 'png', 'jpeg'])) {
                    $invalidFiles[] = $file->getClientOriginalName();
                }
            }

            if (!empty($invalidFiles)) {
                $errorMessage = 'The following files are not allowed: ' . implode(', ', $invalidFiles) . '. Only jpg, png, and jpeg files are permitted.';
                return back()->with('fail', $errorMessage)->withInput();
            }

            return back()->withErrors($errors)->withInput();
        }

        // Process valid files
        $uploadedFiles = $request->file('files');
        
        // Create new Item
        $item = new Item();
        $item->name = $request->name;
        $item->reporter_name = $request->reporter_name;
        $item->type = $request->type;
        $item->detail = $request->detail;
        $item->save();

        $fileNames = [];

        foreach ($uploadedFiles as $index => $file) {
            $fileName = $item->id . '-' . ($index + 1) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $fileNames[] = $fileName;
        }

        // Update img_path
        $item->img_path = json_encode($fileNames);
        $item->save();

        return back()->with('success', 'Files uploaded successfully')->with('files', json_encode($fileNames));
    }
}
