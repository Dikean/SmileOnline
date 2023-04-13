<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Specialty;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = User::doctors()->paginate(10);
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialties = Specialty::all();
        return view('doctors.create', compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      

        $rules=[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'cedula' => 'required|digits:10',
            'address' => 'nullable|min:6',
            'phone'=> 'required',
        ];
        $messages = [
            'name.required' => 'El nombre del medico es obligatorio',
            'name.min' => 'El nombre del medico debe tener mas de 3 caracteres',
            'email.required' => 'El Correo es obligatorio',
            'email.email' => 'Ingresa una direccion de correo valida',
            'cedula.required' => 'Cedula Obligatoria',
            'cedula.digits' => 'La cedula debe tener 10 digitos',
            'address.min' => 'La direccion debe tener al menos 6 caracteres',
            'phone.required' => 'El nuimero de telefono es obligatorio',

        ];
        $this->validate($request, $rules, $messages);
       $user =  User::create(
            $request->only('name', 'email','cedula', 'address','phone')
            +[
                'role'=> 'doctor',
                'password' => bcrypt($request->input('password'))
            ]
        );
        $user->escialties()->attach($request->input('specialties'));
        $notification = 'El medico se ha registrado correctamente';
        return redirect('/medicos')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

   
    public function edit($id)
    {
        $doctor = User::doctors()->findOrFail($id);
        $specialties =  Specialty::all();
        $specialty_ids = $doctor->specialties()->pluck('specialties.id');
        return view('doctors.edit', compact('doctor','specialties','specialty_ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules=[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'cedula' => 'required|digits:10',
            'address' => 'nullable|min:6',
            'phone'=> 'required',
        ];
        $messages = [
            'name.required' => 'El nombre del medico es obligatorio',
            'name.min' => 'El nombre del medico debe tener mas de 3 caracteres',
            'email.required' => 'El Correo es obligatorio',
            'email.email' => 'Ingresa una direccion de correo valida',
            'cedula.required' => 'Cedula Obligatoria',
            'cedula.digits' => 'La cedula debe tener 10 digitos',
            'address.min' => 'La direccion debe tener al menos 6 caracteres',
            'phone.required' => 'El nuimero de telefono es obligatorio',

        ];
        $this->validate($request, $rules, $messages);

        $user = User::doctors()->findOrFail($id);
        $data = $request->only('name', 'email', 'cedula', 'address', 'phone');
        $password = $request->input('password');

        if($password)
             $data['password'] = bcrypt($password);

        $user->fill($data);
        $user->save();
        $user->specialties()->sync($request->input('specialties'));
        
        $notification = 'La informacion se ha actualizado correctamente';
        return redirect('/medicos')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id){
        
        $user = User::doctor()->findOrFail($id);
        $doctorName= $user->name;
        $user->delete();

        $notification = "El Medico $doctorName se elimino correctamente";
        return redirect('/medicos')->with(compact('notificacion'));
    }
}
