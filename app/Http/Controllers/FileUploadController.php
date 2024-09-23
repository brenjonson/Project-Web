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
        return view('web-project.updatedPopularItem', compact('items'));
    }

    public function showForMember()
    {
        $itemsForMember = Item::all();
        return view('web-project.member', compact('itemsForMember'));
    }

    public function showForSearch()
    {
        $itemsForSearch = Item::all();
        return view('web-project.search', compact('itemsForSearch'));
    }

    public function showProfile()
    {
        $itemsForProfile = Item::all();;
        return view('web-project.profile', compact('itemsForProfile'));
    }


    public function delete($id)
    {
        $data = Item::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $updateData = Item::find($id);
        $items = Item::all();
        return view('web-project.uploadForm.edituploadFound', compact('updateData', 'items'));
    }

    public function update(Request $request, $id)
    {
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

        $items = Item::find($id);
        $items->item = $request->input('item');
        $items->reporter_name = $request->input('reporter_name');
        $items->type = $request->input('type');
        $items->detail = $request->input('detail');
        $items->location = $request->input('location');
        $items->contact = $request->input('contact');
        foreach ($uploadedFiles as $index => $file) {
            $fileName = $items->id . '-' . ($index + 1) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $fileNames[] = $fileName;
        }

        // Update img_path
        $items->img_path = json_encode($fileNames);
        $items->latitude = $request->input('latitude');
        $items->longitude = $request->input('longitude');
        $items->stage = $request->input('stage');
        $items->save();
        return redirect("/profile");
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
        $newItem = new Item();
        $newItem->item = $request->item;
        $newItem->reporter_name = $request->reporter_name;
        $newItem->type = $request->type;
        $newItem->detail = $request->detail;
        $newItem->location = $request->location;
        $newItem->contact = $request->contact;
        $newItem->stage = $request->stage;
        $newItem->latitude = $request->latitude;
        $newItem->longitude = $request->longitude;
        $newItem->save();

        $fileNames = [];

        foreach ($uploadedFiles as $index => $file) {
            $fileName = $newItem->id . '-' . ($index + 1) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $fileNames[] = $fileName;
        }

        // Update img_path
        $newItem->img_path = json_encode($fileNames);
        $newItem->save();

        // return back()->with('success', 'Files uploaded successfully')->with('files', json_encode($fileNames));
        return redirect()->route('member')->with('success', 'Files uploaded successfully');
    }

    public function showItemDetail($id)
    {
        $item = Item::findOrFail($id);
        return view('web-project.detail', compact('item'));
    }
}
