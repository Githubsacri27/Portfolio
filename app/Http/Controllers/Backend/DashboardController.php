<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\ContactModel;
use App\Models\WorksModel;
use Illuminate\Support\Str;



class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('backend.dashboard.list');
    }
    public function admin_home(Request $request)
    {

        $data['getrecord'] = HomeModel::all();
        return view('backend.home.list', $data);
    }
    // función para agregar y actualizar el registro de la página de inicio
    public function admin_home_post(Request $request)
    {


        if ($request->add_to_update == "Add") { // agrega el registro

            $insertRecord = request()->validate([ //valida los campos
                'profile' => 'required',
            ]);
            $insertRecord = new HomeModel; // crea un nuevo objeto de modelo
        } else {
            $insertRecord = HomeModel::find($request->id); // obtiene el registro por id
        }
        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->work_experience = trim($request->work_experience);
        $insertRecord->description = trim($request->description);

        if (!empty($request->file('profile'))) {

            if (!empty($insertRecord->profile) && file_exists('public/img/' . $insertRecord->profile)) {
                unlink('public/img/' . $insertRecord->profile);
            }

            $file = $request->file('profile');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/', $filename);
            $insertRecord->profile = $filename;
        }
        $insertRecord->save();
        return redirect()->back()->with('success', "Home Page Added Successfully save!");
    }


    public function admin_about(Request $request)
    {
        $data['getrecord'] = AboutModel::all();
        return view('backend.about.list', $data);
    }
    public function admin_about_post(Request $request)
    {
        //dd($request->all());
        if ($request->add_to_update == "Add") {
            $insertRecord = request()->validate([
                'first_name' => 'request'
            ]);
            $insertRecord = new AboutModel;
        } else {
            $insertRecord = AboutModel::find($request->id);
        }

        $insertRecord->first_name = trim($request->first_name);
        $insertRecord->last_name = trim($request->last_name);
        $insertRecord->address = trim($request->address);
        $insertRecord->github = trim($request->github);
        $insertRecord->linkedin = trim($request->linkedin);
        $insertRecord->email = trim($request->email);
        $insertRecord->language = trim($request->language);
        $insertRecord->years_of_experience = trim($request->years_of_experience);
        $insertRecord->completed_projects = trim($request->completed_projects);
        $insertRecord->year_of_experience = trim($request->year_of_experience);
        $insertRecord->title = trim($request->title);
        $insertRecord->sub_title = trim($request->sub_title);
        $insertRecord->description = trim($request->description);
        $insertRecord->second_year_of_experience = trim($request->second_year_of_experience);
        $insertRecord->second_title = trim($request->second_title);
        $insertRecord->second_sub_title = trim($request->second_sub_title);
        $insertRecord->second_description = trim($request->second_description);
        $insertRecord->third_year_of_experience = trim($request->third_year_of_experience);
        $insertRecord->third_title = trim($request->third_title);
        $insertRecord->third_sub_title = trim($request->third_sub_title);
        $insertRecord->third_description = trim($request->third_description);
        $insertRecord->work_experience = trim($request->work_experience);
        $insertRecord->work_title = trim($request->work_title);
        $insertRecord->work_sub_title = trim($request->work_sub_title);
        $insertRecord->work_description = trim($request->work_description);
        $insertRecord->second_work_experience = trim($request->second_work_experience);
        $insertRecord->second_work_title = trim($request->second_work_title);
        $insertRecord->second_work_sub_title = trim($request->second_work_sub_title);
        $insertRecord->second_work_description = trim($request->second_work_description);
        $insertRecord->third_work_experience = trim($request->third_work_experience);
        $insertRecord->third_work_title = trim($request->third_work_title);
        $insertRecord->third_work_sub_title = trim($request->third_work_sub_title);
        $insertRecord->third_work_description = trim($request->third_work_description);
        $insertRecord->save();
        return redirect()->back()->with('success', "About Page Added Successfully save!");
    }

    public function admin_contact(Request $request)
    {
        $data['getrecord'] = ContactModel::get();
        return view('backend.contact.list', $data);
    }
    public function admin_contact_delete($id, Request $request)
    {
        $removeDelete = ContactModel::find($id);
        $removeDelete->delete();
        return redirect()->back()->with('error', "Contact Record Successfully Delete");
    }
    public function admin_works(Request $request)
    {
        $data['getrecord'] = WorksModel::get();
        return view('backend.works.list', $data);
    }
}
