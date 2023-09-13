<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WorksModel;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function admin_works_add(Request $request)
    {

        return view('backend.works.add');
    }
    public function admin_works_add_post(Request $request)
    {

        $insertRecord = new WorksModel();
        $insertRecord->title = trim($request->title);
        $insertRecord->url = trim($request->url);
        $insertRecord->description = trim($request->description);


        if (!empty($request->file('image'))) {
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();

            $file->move('public/works/', $filename);
            $insertRecord->image = $filename;
        }

        $insertRecord->text_editor = trim($request->text_editor);

        $insertRecord->save();
        return redirect('admin/works')->with('success', 'works Page Successfully Save');
    }
    public function admin_works_edit($id, Request $request)
    {
        $data['getrecord'] = WorksModel::find($id);
        return view('backend.works.edit', $data);
    }
    public function admin_works_edit_update($id, Request $request)
    {
        $updateRecord = WorksModel::find($id);
        $updateRecord->title = trim($request->title);
        $updateRecord->url = trim($request->url);
        $updateRecord->description = trim($request->description);

        if (!empty($request->file('image'))) {

            if (!empty($updateRecord->image) && file_exists('public/works/' . $updateRecord->image)) {
                unlink('public/works/' . $updateRecord->image);
            }

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();

            $file->move('public/works/', $filename);
            $updateRecord->image = $filename;
        }


        $updateRecord->description = trim($request->description);
        $updateRecord->text_editor = trim($request->text_editor);
        $updateRecord->save();
        return redirect('admin/works')->with('success', 'Works Page Successfully Update');
    }

    public function admin_works_delete($id, Request $request)
    {
        $deleteRecord = WorksModel::find($id);
        if (!empty($deleteRecord->image) && file_exists('public/works/' . $deleteRecord->image)) {
            unlink('public/works/' . $deleteRecord->image);
        }
        $deleteRecord->delete();
        return redirect('admin/works')->with('error', 'Works Page Successfully Delete');
    }
}
