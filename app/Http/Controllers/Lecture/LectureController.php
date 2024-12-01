<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\Repository\AdminLectureRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Subject;

class LectureController extends Controller
{


    protected $Lecture;

    public function __construct(AdminLectureRepositoryInterface $Lecture)
    {
        return $this->Lecture = $Lecture;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->Lecture->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->Lecture->create();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->Lecture->store($request);
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
        return $this->Lecture->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return $this->Lecture->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return $this->Lecture->destroy($request);
    }

    public function getsubjects($id)
    {
        $list_classes = Subject::where("teacher_id", $id)->pluck("name", "id");

        return $list_classes;
    }

}