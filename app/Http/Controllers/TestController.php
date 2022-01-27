<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class TestController extends Controller
{
    function home() {
        return view('home');

    }

    function feedback_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'tel' => 'required|min:4|max:100',
            'name' => 'required|min:4|max:100'
        ]);

        $feedback = new Feedback();
        $feedback->email = $request->input(key:'email');
        $feedback->tel = $request->input(key:'tel');
        $feedback->name = $request->input(key:'name');

        $feedback->save();

        return redirect()->route('home');

    }

    function admin() {
        $feedbacks = new Feedback();
        return view('admin', ['feedbacks' => $feedbacks->all()]);

    }

    function feedback_delete($id) {
        $feedback = Feedback::find($id);
        $feedback->delete();

        return redirect()->route('admin');
    }

    function feedback_modify($id) {
        $feedback = new Feedback();
        return view('modify-feedback', ['feedbacks' => $feedback->find($id)]);
    }

    function feedback_modify_submit($id, Request $request) {
        $feedback = Feedback::find($id);
        $feedback->email = $request->input(key:'email');
        $feedback->tel = $request->input(key:'tel');
        $feedback->name = $request->input(key:'name');

        $feedback->save();

        return redirect()->route('admin');
    }
}
