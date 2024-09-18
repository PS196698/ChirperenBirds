<?php

namespace App\Http\Controllers;

use App\Models\Bird;
use App\Http\Requests\StoreProductRequest;
use App\Classes\ApiResponseClass;
use App\Http\Resources\BirdResource;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class BirdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $birds = DB::table('birds')->paginate(5); // DIT MAG NIET!!!!
        return view('birds.index', compact('birds'));

    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('birds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductRequest $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);
        Bird::create($validatedData); // <= vele malen netter

        // Redirect to the index page
        return redirect()->route('birds.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) // route model binding
    {
        $product = $this->birdRepositoryInterface->getById($id); // wat is een product?!

        return ApiResponseClass::sendResponse(new BirdResource($product),'',200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) // route model binding??
    {
        $bird = Bird::find($id);
        return view('birds.edit', compact('bird'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bird $bird)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);
        $bird->update($validatedData);
        return redirect()->route('birds.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bird $bird): RedirectResponse
    {
        $bird->delete();
        return redirect()->route('birds.index'); // Redirect to the birds.index route
    }
}
