<?php

namespace App\Http\Controllers;

use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Reservation; 
use Carbon\Carbon;


class SpaceController extends Controller
{
    public function index(Request $request)
    {  $spaces = Space::all();

        // Get the list of reserved space slugs from the Reservation model
        $reservedSpaces = Reservation::pluck('space')->toArray();
        
        // Filter spaces to only show those that are available
        $availableSpaces = $spaces->filter(function ($space) use ($reservedSpaces) {
            return !in_array($space->slug, $reservedSpaces);
        });
        $availableSpaces = Space::where('end_time', '>=', now())->get();
         // Retrieve spaces that are available (start date is in the past and end date is in the future)
    $availableSpaces = Space::where('start_time', '<=', Carbon::now())
    ->where('end_time', '>=', Carbon::now())
    ->get();


        return view('spaces.index', compact('spaces','availableSpaces'));
    }

    public function create()
    {
        return view('spaces.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
            'location' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);


     
    $space = new Space();
    $space->name = $request->name;
    $space->description = $request->description;
    $space->capacity = $request->capacity;
    $space->price = $request->price;
    $space->location = $request->location;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('spaces', 'public');
        $space->image_path = $imagePath; // This line must come after initializing $space
    }

    $slug = Str::slug($request->name);
    $originalSlug = $slug;
    $count = 1;

    while (Space::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $count;
        $count++;
    }

    $space->slug = $slug;

    $space->start_time = $request->start_time;
    $space->end_time = $request->end_time;
    $space->save();
        return redirect()->route('spaces.index')->with('success', 'Space added successfully!');
    }

    public function edit(Space $space)
    {
        return view('spaces.edit', compact('space'));
    }

    public function update(Request $request, Space $space)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
            'location' => 'required',
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('images', 'public');
            $space->image_path = $path;
        }

        $space->update([
            'name' => $request->name,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'price' => $request->price,
            'location' => $request->location,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('spaces.index')->with('success', 'Space updated successfully!');
    }

    public function destroy(Space $space)
    {
        $space->delete();
        return redirect()->route('spaces.index')->with('success', 'Space deleted successfully!');
    }
}

