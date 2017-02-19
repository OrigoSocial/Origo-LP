<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EarlyAccessController extends Controller
{
    /**
     * Retrieve early access using an early access code.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function access(Request $request)
    {
        $earlyAccessCode = $request->input('early_accoess_code');

        // For now, just return a non-code code status.
        return response()->json([
            'success' => true,
            'message' => "Your early access code wasn't found!",
            'isError' => true
        ]);
    }
}
