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

    public function showForAdmin(Request $request)
    {
        $search = $request->input('search');
        $itemsForAdmin = Item::when($search, function ($query) use ($search) {
            return $query->where('item', 'like', "%{$search}%")
                         ->orWhere('reporter_name', 'like', "%{$search}%")
                         ->orWhere('location', 'like', "%{$search}%")
                         ->orWhere('type', 'like', "%{$search}%");
        })->get();

        return view('web-project.admin.adminPage', compact('itemsForAdmin', 'search'));
    }

    public function showForMember()
    {
        $itemsForMember = Item::all();
        return view('web-project.member', compact('itemsForMember'));
    }

    public function showForFP()
    {
        $itemsForFP = Item::all();
        return view('web-project.firstPage', compact('itemsForFP'));
    }

    public function showForSearch()
    {
        $itemsForSearch = Item::all();
        return view('web-project.search', compact('itemsForSearch'));
    }

    public function showProfile()
    {
        $user = auth()->user();
        $itemsForProfile = $user->items()->get();
        return view('web-project.profile', compact('itemsForProfile'));
    }

    public function showForOther()
    {
        $itemsForMember = Item::all();
        return view('web-project.otherForm.other', compact('itemsForMember'));
    }

    public function showForOtherFind()
    {
        $itemsForMember = Item::all();
        return view('web-project.otherForm.otherFind', compact('itemsForMember'));
    }

    public function showForOtherSuccess()
    {
        $itemsForMember = Item::all();
        return view('web-project.otherForm.otherSuccess', compact('itemsForMember'));
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

    public function editFind($id)
    {
        $updateData = Item::find($id);
        $items = Item::all();
        return view('web-project.uploadForm.edituploadFind', compact('updateData', 'items'));
    }

    public function update(Request $request, $id)
    {
        $fileValidator = Validator::make($request->all(), [
            'files.*' => 'file|mimes:jpg,png,jpeg',
        ]);

        if ($fileValidator->fails()) {
            return back()->withErrors($fileValidator->errors())->withInput();
        }

        $items = Item::find($id);
        if (!$items) {
            return redirect()->back()->with('fail', 'Item not found.');
        }

        $items->item = $request->input('item');
        $items->reporter_name = $request->input('reporter_name');
        $items->type = $request->input('type');
        $items->detail = $request->input('detail');
        $items->location = $request->input('location');
        $items->contact = $request->input('contact');
        $items->latitude = $request->input('latitude');
        $items->longitude = $request->input('longitude');
        $items->stage = $request->input('stage');

        // Handle file uploads
        $fileNames = [];
        if ($request->hasFile('files')) {
            $uploadedFiles = $request->file('files');
            foreach ($uploadedFiles as $index => $file) {
                $fileName = $items->id . '-' . ($index + 1) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('uploads', $fileName, 'public');
                $fileNames[] = $fileName;
            }
        }

        if (!empty($fileNames)) {
            $items->img_path = json_encode($fileNames);
        }

        $items->save();
        return redirect("/profile")->with('success', 'Item updated successfully.');
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
        $newItem->user_id = auth()->user()->id;
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

    public function markAsSuccess($id)
    {
        $item = Item::findOrFail($id);
        $item->stage = 3;
        $item->save();

        return redirect()->back()->with('success', 'Item marked as successfully returned.');
    }
}
