<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Listing/Index',
        [
                'Listings' => Listing::all(),
        ]
            );    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Listing::create([
            ...$request->all(),
            ...$request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths'=>'required|integer|min:0|max:10',
                'area'=>'required|integer|min:0|max:10000',
                'price'=>'required|integer|min:0|max:10000000',
                'city'=>'required|string|max:255',
                'code'=>'required|string|max:255',
                'street'=>'required|string|max:255',
                'street_nr'=>'required|string|max:255',


            ])
    ]);
        return redirect()->route('Listing.index')->with('success', 'Listing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $Listing)
    {

        return inertia('Listing/Show',
        [
                'Listing' => $Listing,
        ]
            );
            
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $Listing)
    {
       return inertia('Listing/Edit',
        [
                'Listing' => $Listing,
        ]
            );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $Listing)
    {
        $Listing->update(
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths'=>'required|integer|min:0|max:10',
                'area'=>'required|integer|min:0|max:10000',
                'price'=>'required|integer|min:0|max:10000000',
                'city'=>'required|string|max:255',
                'code'=>'required|string|max:255',
                'street'=>'required|string|max:255',
                'street_nr'=>'required|string|max:255',


            ])
    );
    return redirect()->route('Listing.index')->with('success', 'Listing Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $Listing)
    {
        $Listing->delete();
        return back()->with('success', 'Listing deleted successfully.');
    }
}
