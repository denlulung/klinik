<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Specialty;
use App\Http\Requests\DoctorRequest;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Doctor $model)
    {
        return view('browseAllDoctor', ['doctors' => $model->paginate(6)]);
    }

    public function specialty($slug)
    {
        $idSpesialis = Specialty::where('slug', $slug)->first();
        if(isset($idSpesialis)){
            $doctors = Doctor::where('specialty_id', $idSpesialis->id)->get();
        }
        else{
            $doctors = Doctor::where('specialty_id', 2)->get();
        }

        return view('browseDoctor',['doctors' => $doctors, 'spesialis' => $idSpesialis]);

    }

    public function profile($slug)
    {
        $doctors = Doctor::where('slug', $slug)->first();
        return view('profileDoctor',['doctor' => $doctors]);

    }

    public function doctorManagement(Doctor $model)
    {
        return view('doctor.index', ['doctors' => $model->paginate(15)]);
    }

    public function delete($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return back()->withStatus(__('Specialty Successfully Deleted'));
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        $specialty = Specialty::all();
        return view('doctor.edit',['doctor' => $doctor,'specialties' => $specialty]);
    }

    public function update(Request $request)
    {
        $input = $request->all();
        //dd($input);
        $request->validate([
            'slug' => 'required|unique:specialties,slug,'.$input["id"].',id',
            'name' => ['required', 'min:3'],
            'bio' => ['required', 'min:3'],
         ]);
        $input = $request->all();
        Doctor::findOrFail($input["id"])->update($input); 

        return redirect('doctor-management')->withStatus(__('Doctor Successfully Updated'));
    }

    public function add()
    {
        $specialty = Specialty::all();
        return view('doctor.add',['specialties' => $specialty]);
    }

    public function insert(DoctorRequest $request)
    {
        $specialty = new Doctor;   
        $specialty->create($request->all());

        return redirect('doctor-management')->withStatus(__('Doctor Successfully Added'));
    }

}
