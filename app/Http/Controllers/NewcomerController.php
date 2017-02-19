<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewcomerUpdateRequest;
use App\Http\Requests\NewcomerRequest;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Newcomer;

class NewcomerController extends Controller
{
    /**
     * Save the newcomers email and return a JSON response.
     *
     * @param NewcomerRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register(NewcomerRequest $request)
    {
        $newcomer = new Newcomer;
        $newcomer->email = $request->input('email');
        $newcomer->save();

        return response()->json([
            'success' => true,
            'message' => config('messages.newcomer_registered')
        ]);
    }

    /**
     * Update the newcomer and return a JSON response.
     *
     * @param NewcomerUpdateRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(NewcomerUpdateRequest $request)
    {
        $newcomer = Newcomer::where('email', $request->input('email'))->first();

        if ($newcomer) {
            $newcomer->update([
                'name'     => $request->input('name'),
                'industry' => $request->input('industry'),
                'message'  => $request->input('message')
            ]);

            return response()->json([
                'success'  => true,
                'message'  => config('messages.newcomer_updated'),
                'complete' => true
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => $request->input('email') . ' does not exist!'
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
