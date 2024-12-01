<?php

namespace App\Http\Controllers\Teachers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\TechLibraryRepositoryInterface;


class TechLibraryController extends Controller
{


    protected $TechLib;

    public function __construct(TechLibraryRepositoryInterface $TechLib)
    {
        $this->TechLib = $TechLib;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return $this->TechLib->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return $this->TechLib->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->TechLib->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return  $this->TechLib->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         return $this->TechLib->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return  $this->TechLib->update( $request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
         return $this->TechLib->destroy($request);
    }
}
