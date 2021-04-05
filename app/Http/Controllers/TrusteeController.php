<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\TrusteeRepository;

class TrusteeController extends Controller
{
    private $trusteeRepository;

    public function __construct(TrusteeRepository $trusteeRepository)
    {
        $this->trusteeRepository = $trusteeRepository;
    }

    public function index()
    {
        $trustees = $this->trusteeRepository->allTrustee();
        return view('server.trustee.index', compact('trustees'));
    }

    public function store(Request $request)
    {
        $this->trusteeRepository->createTrustee($request);
        return redirect()->back()->with('success', 'Trustee created successfully');
    }

    public function show($id)
    {
        $trustee = $this->trusteeRepository->showByID($id);
        return view('server.trustee.show', compact('trustee'));
    }

    public function biography($id)
    {
        $trustee = $this->trusteeRepository->showByID($id);
        return view('trustee', compact('trustee'));
    }

    public  function update(Request $request,$id)
    {
       $update =  $this->trusteeRepository->updateTrustee($request, $id);
       if($update) {
        return  redirect()->route('trustee-show', $id)->with('success', 'Trustee details updated successfully');
       }
    }

    public function destroy($id)
    {
        $this->trusteeRepository->deleteTrustee($id);
        return redirect()->back()->with('success', 'Trustee deleted successfully');
    }
}
