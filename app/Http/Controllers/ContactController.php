<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ContactRepository;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        $messages = $this->contactRepository->allMessage();
        return view('server.contact.index', compact('messages'));
    }

    public function recent()
    {
        $messages = $this->contactRepository->newMessages();
        return view('server.contact.recent', compact('messages'));
    }

    public function store(Request $request)
    {
        $this->contactRepository->createMessage($request);
        return redirect()->back()->with('success', 'Thanks for contacting us');
    }

    public function show($id)
    {
        $message = $this->contactRepository->showByID($id);
        return view('server.contact.show', compact('message'));
    }

    public  function update(Request $request,$id)
    {
       $update =  $this->contactRepository->updateMessage($request, $id);
       if($update) {
        return  redirect()->route('contact-show', $id)->with('success', 'Thanks for contacting us');
       }
    }

    public function destroy($id)
    {
        $this->contactRepository->deleteMessage($id);
        return redirect()->back()->with('success', 'Message deleted successfully');
    }
}
