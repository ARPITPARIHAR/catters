<?php
namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;







class ModelController extends Controller
{
    public function submitForm(Request $request)
    {
        
        $request->validate([
            'full-name' => 'required|string',
            'mobile-number' => 'required|string',
            'home-address' => 'required|string',
            'event-type' => 'required|string',
        ]);

        $formData = new Book([
            'name' => $request->input('full-name'),
            'contact_number' => $request->input('mobile-number'),
            'event_city' => $request->input('home-address'),
            'event_type' => $request->input('event-type'),
        ]);

        $formData->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
