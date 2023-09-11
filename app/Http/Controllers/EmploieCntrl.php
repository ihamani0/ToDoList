<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class EmploieCntrl extends Controller
{

    protected  $Fiald_input = ['Name', 'Department', 'Salary'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Emploie.index', ['Emp' => Emploie::withTrashed()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Emploie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'Name' => "required|string|max:255" ,
            'Department' => "nullable|string" ,
            'Salary' => "required|string" ,
        ]);

        

        Emploie::create( $data );
        //another way 

        // Emploie::create(
        //     $request->only($this->Fiald_input) => 
            //we do only method becuze the request obejct handle _token value so we cant insert that into db 
        // );
        return redirect()->route('Emploie.index');
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
        $emp = Emploie::FindOrFail($id);
        return view('Emploie.edite', compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Emploie::where('id', $id)
            ->update(
                $request->only($this->Fiald_input)
            );
        return redirect()
            ->route('Emploie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Emploie::FindOrFail($id)->delete();
        return redirect()->route('Emploie.index');
    }


    //Delete Force And Restore 
    public function force(string $id) : RedirectResponse
    {
        Emploie::FindOrFail($id)->forceDelete();
        return redirect()->route('Emploie.index');
    }

    public function restore(string $id) : RedirectResponse
    {
        Emploie::withTrashed()->FindOrFail($id)->restore();
        return redirect()->route('Emploie.index');
    }
}
