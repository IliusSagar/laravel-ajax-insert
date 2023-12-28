<?php

namespace App\Http\Controllers;

use App\Models\YourModel;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function insertData(Request $request)
    {
        // Validate the request data if needed
        $request->validate([
            'field1' => 'required',
            'field2' => 'required',
            // Add more validation rules as needed
        ]);
    
        // Create a new instance of your model
        $newData = new YourModel();
    
        // Set the model attributes based on the request data
        $newData->field1 = $request->input('field1');
        $newData->field2 = $request->input('field2');
        // Set more attributes as needed
    
        // Save the data
        $newData->save();
    
        // You can return a response if needed
        return response()->json(['message' => 'Data inserted successfully']);
    }
    
}
