<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\AdminRepository;

class AdminController extends Controller
{
    private $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function index()
    {
        $admins = $this->adminRepository->allAdmin();
        return view('server.admin.index', compact('admins'));
    }

    public function store(Request $request)
    {
        $this->adminRepository->createAdmin($request);
        return redirect()->back()->with('success', 'Administrator created successfully');
    }

    public function show($id)
    {
        $admin = $this->adminRepository->showByID($id);
        return view('server.admin.show', compact('admin'));
    }

    public  function update(Request $request,$id)
    {
       $update =  $this->adminRepository->updateAdmin($request, $id);
       if($update) {
        return  redirect()->route('admin-show', $id)->with('success', 'Administrator details updated successfully');
       }
    }

    public function destroy($id)
    {
        $this->adminRepository->deleteAdmin($id);
        return redirect()->back()->with('success', 'Administrator deleted successfully');
    }

}
