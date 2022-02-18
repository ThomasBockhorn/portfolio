<?php

namespace App\Http\Controllers\Api\guest;

use App\Models\Project;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectCollection;
use App\Http\Controllers\API\BaseController as BaseController;
use Symfony\Component\HttpKernel\Exception\HttpException;


class ProjectGuestController extends BaseController
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
}