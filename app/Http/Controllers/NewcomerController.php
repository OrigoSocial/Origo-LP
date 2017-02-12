<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewcomerRequest;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Newcomer;

class NewcomerController extends Controller
{
    /**
     * Save the newcomer and return the welcome page with a success message.
     *
     * @param NewcomerRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register(NewcomerRequest $request)
    {
        $newcomer = new Newcomer;

        $newcomer->name = $request->input('name');
        $newcomer->email = $request->input('email');
        $newcomer->industry = $request->input('industry');
        $newcomer->message = $request->input('message');

        $newcomer->save();

        return back()->with([
            'message' => config('messages.newcomer_registered')
        ]);
    }

    /**
     * Delete a newcomer.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $deletedNewcomer = Newcomer::where('id', $id)->delete();

        if ($deletedNewcomer) {
            return back()->with([
                'newcomers' => Newcomer::all(),
                'message'   => config('messages.newcomer_deleted')
            ]);
        }


        return back()->with([
            'newcomers' => Newcomer::all(),
            'error'     => config('messages.newcomer_deletion_error')
        ]);
    }
}
