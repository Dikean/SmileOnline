<?php

namespace App\Http\Controllers\Admin;

use App\Models\Specialty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialtyController extends Controller
{
   
    //metodo index de las route
    public function index (){
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }
        //metodo create de las route
        public function create (){
            return view('specialties.create');
        }

     //metodo sendData de las route
     public function sendData ( Request $request){

        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'name.required'=>'El nombre de la especialidad es obligatorio',
            'name.min' => 'El nombre de la especialidad debe de tener mas de 3 caracteres'
        ];
        $this->validate($request, $rules, $messages);

        $specialty = new Specialty();
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();
        $notification = 'La especialidad se a creado correctamente!!';

        return redirect('/especialidades')->with(compact('notification'));
    }

    public function edit(Specialty $specialty){
        return view('specialties.edit', compact('specialty'));
    }

      //metodo update de las route
      public function update ( Request $request, Specialty $specialty){

        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'name.required'=>'El nombre de la especialidad es obligatorio',
            'name.min' => 'El nombre de la especialidad debe de tener mas de 3 caracteres'
        ];
        $this->validate($request, $rules, $messages);

       
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();
        $notification = 'La especialidad se a actualizado correctamente';

        return redirect('/especialidades')->with(compact('notification'));
    }

    public function destroy(Specialty $specialty){

        $deleteName = $specialty->name;
        $specialty->delete();
        $notification = 'La especialidad '.$deleteName.'sea eliminado correctamente';
        return redirect('/especialidades')->with(compact('notification'));
    }
        
}
