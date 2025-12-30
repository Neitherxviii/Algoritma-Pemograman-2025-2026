<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    // skill page
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    // save skill page
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Skill::create([
            'name' => $request->name
        ]);

        return redirect()->route('skills.index');
    }

    // delete skill page
    public function destroy($id)
    {
        Skill::find($id)->delete();
        return redirect()->route('skills.index');
    }
}
