<?php 

namespace App\Http\Repositories;
use App\Models\User;
use Image;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class AdminRepository
{
    public $model;

    public function __construct(User $model)
    {
        $this->model = $model ;
    }

    public function createAdmin($request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'passport' => 'required|image',
            'role' => 'required'
        ]);
        if ($request->hasFile('passport')) {
            $filenameWithExt = $request->file('passport')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME );
            $extension = $request->file('passport')->getClientOriginalExtension();
            $fileNameToStore = $filename  .'_'.time().'.'.$extension;
            $path = $request->file('passport')->storeAs('public/uploads', $fileNameToStore);
        }
        $admin =  $this->model->create([
            'name' => $request->name,
            'email' =>  $request->email,
            'phone' => $request->phone,
            'passport' =>  $fileNameToStore ,
            'password' => Hash::make($request->password)
        ]);
        $role = Role::where('name', $request->role)->first();
        $admin->roles()->attach($role->id);
        return $admin;
    }

    public function allAdmin()
    {
        return $this->model->paginate(10);
    }

    public function showByID($id)
    {
        return $this->model->findOrFail($id);
    }

    public function updateAdmin($request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $this->model->findOrFail($id)->update([
            'name' => $request->name,
            'email' =>  $request->email,
            'phone' => $request->phone,
        ]);
        return $this->model;
    }

    public function deleteAdmin($id)
    {
        $this->model->findOrFail($id)->delete();
        return $this->model;
    }
}