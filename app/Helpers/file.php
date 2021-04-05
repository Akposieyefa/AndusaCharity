<?php 
use App\Models\Contact;
use App\Models\User;
use App\Models\Post;
use App\Models\Trustee;

function newMessages() {
       return  $contact = Contact::where(
             'status', NULL
         )->count();
}

function adminCount() {
    return User::count();
}
function contactCount(){
    return Contact::count();
}
function postCount(){
    return Post::count();
}
function trusteeCount(){
    return Trustee::count();
}
function posts(){
   return Post::latest()->paginate(10);
}
function trustees(){
    return Trustee::latest()->paginate(10);
}

