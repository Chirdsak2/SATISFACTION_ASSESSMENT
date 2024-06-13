<?php

namespace App\Http\Controllers;

use App\Models\DepressionAssessment;
use Illuminate\Http\Request;

class DepressionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $query = DepressionAssessment::query();
        $depression_assessment = $query->paginate(10);

        // return view('depression', compact('users', 'positions'));
        return view('manageDepression', compact('depression_assessment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addDepression');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'question_1' => 'required|integer|between:1,5',
            'question_2' => 'required|integer|between:1,5',
            'question_3' => 'required|integer|between:1,5',
            'question_4' => 'required|integer|between:1,5',
            'question_5' => 'required|integer|between:1,5',
            'suggestion' => 'nullable|string',
        ]);

        // Create a new DepressionAssessment instance and save to database
        $depression = DepressionAssessment::create([
            'question_1' => $validatedData['question_1'],
            'question_2' => $validatedData['question_2'],
            'question_3' => $validatedData['question_3'],
            'question_4' => $validatedData['question_4'],
            'question_5' => $validatedData['question_5'],
            'suggestion' => $validatedData['suggestion'],
            // Assuming you have a 'user_id' column to associate with the logged-in user
            'user_id' => auth()->user()->id,  // or however you determine the user_id
            'name' => auth()->user()->name,  // or however you determine the user_id
        ]);

        // Redirect to a specific route after successful creation
        return redirect('manageDepression')->with('success', 'Depression assessment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $depression = DepressionAssessment::where('id', '=', $id)->first();
        return view('editDepression')->with('depression', $depression);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Find the user by id
        $depression = DepressionAssessment::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'question_1' => 'required|integer|between:1,5',
            'question_2' => 'required|integer|between:1,5',
            'question_3' => 'required|integer|between:1,5',
            'question_4' => 'required|integer|between:1,5',
            'question_5' => 'required|integer|between:1,5',
            'suggestion' => 'nullable|string',
        ]);

        // Update user with new data
        $depression->update([
            'question_1' => $validatedData['question_1'],
            'question_2' => $validatedData['question_2'],
            'question_3' => $validatedData['question_3'],
            'question_4' => $validatedData['question_4'],
            'question_5' => $validatedData['question_5'],
            'suggestion' => $validatedData['suggestion'],
            // Assuming you have a 'user_id' column to associate with the logged-in user
            'user_id' => auth()->user()->id,  // or however you determine the user_id
            'name' => auth()->user()->name,  // or however you determine the user_id
        ]);

        // Redirect to the manageDepression page
        return redirect('manageDepression');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // Find the user by id
        $depression = DepressionAssessment::findOrFail($id);

        // Delete the user
        $depression->delete();
        // Redirect to the managePersonel page
        return redirect('manageDepression');
    }
}
