<?php

namespace App\Http\Repositories;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactRepository
{
    public $model;

    public function __construct(Contact $model)
    {
        $this->model = $model ;
    }

    public function createMessage($request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        return  $this->model->create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
    }

    public function newMessages()
    {
        return $this->model->where('status', NULL)->paginate(10);
    }
    public function allMessage()
    {
        return $this->model->where('status', !"=", NULL)->paginate(10);
    }

    public function showByID($id)
    {
        return $this->model->findOrFail($id);
    }

    public function updateMessage($request, $id)
    {
        $request->validate([
            'message' => 'required'
        ]);
        $message = $this->model->findOrFail($id);
        $data = [
            'subject' => $message->subject,
            'reply' => $request->message
        ];
        try {
            Mail::to($message->email)->send(new ContactMail($data));
            $message->update([
                'status' => $request->message
            ]);
            return $this->model;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteMessage($id)
    {
        $this->model->findOrFail($id)->delete();
        return $this->model;
    }
}
