<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mews\Captcha\Facades\Captcha; 



class ContactController extends Controller
{


    public function submit(Request $request)
    {

        // dd($request);
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ]);

        // Insert data into database
        try {
            DB::table('contact_form')->insert([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'contact_no' => $validatedData['contact'],
                'message' => $validatedData['message'],
            ]);

            // Data inserted successfully
            return response()->json(['success' => true, 'message' => 'Form data saved successfully']);
        } catch (\Exception $e) {
            // Error inserting data
            return response()->json(['success' => false, 'message' => 'Error saving form data: ' . $e->getMessage()]);
        }
    
    }
}
