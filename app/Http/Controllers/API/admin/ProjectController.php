<?php

namespace App\Http\Controllers\Api\admin;

use App\Models\Project;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectCollection;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\ProjectRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;



class ProjectController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return $this->sendResponse(new ProjectCollection(Project::paginate()), 200);
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        try {
            $project = Project::create($request->all());
            return $this->sendResponse(new ProjectResource($project), 'Projects has been created');
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        try {
            return $this->sendResponse(new ProjectResource($project), 'Project fetched');
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        try {
            $project->fill($request->all())->save();
            return $this->sendResponse(new ProjectResource($project), 'Project updated');
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        try {
            $project->delete();
            return $this->sendResponse([], 'Project deleted');
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }
}