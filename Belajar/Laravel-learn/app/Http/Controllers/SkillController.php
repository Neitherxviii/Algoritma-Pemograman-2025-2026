<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('profil', compact('skills'));
    }

    public function store(Request $request)
    {
        Skill::create([
            'name' => $request->name
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        Skill::find($id)->delete();
        return redirect()->back();
    }
}
