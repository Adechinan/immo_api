<?php

namespace Modules\Bien\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Bien\Models\Bien;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Bien\Http\Requests\BienFormRequest;
use Modules\BienEnVente\Models\BienEnVente;
use Modules\BienEnLocation\Models\BienEnLocation;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Bien::query();

        if($request->has('aVendre'))
            $query->aVendre();

        if($request->has('aLouer'))
            $query->aLouer();

        if($request->has('ville'))
            $query->where('ville', 'like', '%'.$request->ville.'%');
        
        
        if($request->has('limit'))
            return response()->json($query->disponible()->latest()->limit($request->limit)->get());
        else
            return response()->json($query->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bien::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BienFormRequest $request) {
        $user = Auth::user();

        $donnee = array_merge(
            $request->validated(),
            [
                'user_id'=>$user->id
            ]
        );

        $bien = Bien::create($donnee);
        $files = $request->file('files');
        foreach($files as $file){
            $path = $file->store('biens', 'public');
            $bien->tofs()->create([
                'url' => $path,
                'bien_id' => $bien->id
            ]);
        }

        if(!$bien->vendre){
            BienEnLocation::create([
                'bien_id' => $bien->id,
            ]);
        }else{
            BienEnVente::create([
                'bien_id' => $bien->id,
            ]);
        }
        
        return response()->json([ 
            'message' => 'Bien enregistré',
            'bien' => $bien
        ]);
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return response()->json(Bien::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BienFormRequest $request, $id) {
        $bien = Bien::find($id);
        $bien ->update($request->validated());
        return response()->json($bien);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $bien = Bien::find($id);
        $bien->delete();
        return response()->json([
            'message' => 'Bien supprimé avec succès'
        ]);
    }
}
