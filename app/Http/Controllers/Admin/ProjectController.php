<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ProjectContract;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProjectController extends BaseController  
{
    public $projectRepository;

    public function __construct(ProjectContract $projectContract)
    {
        $this->projectRepository = $projectContract;
    }
    public function index(){
        $projects = $this->projectRepository->listProjects('id','desc',['*'],15);
        $this->setPageTitle('Project','List of Projects');
        return view('admin.projects.index',compact('projects'));
    }

    public function create(){
        $this->setPageTitle('Project','Create New Project');
        return view('admin.projects.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required|max:255|unique:projects',
            'image' => 'mimes:jpg,jpeg,png,webp|max:5000'
        ]);

        $params = $request->except('_token');

        $project = $this->projectRepository->createProject($params);

        if(!$project){
            return $this->responseRedirectBack('Error occurred while creating project','error',true,true);
        }
        
        if($project->slug) {
            $this->removeCache($project->slug);
        }
        
        return $this->responseRedirect('admin.project.index','Project Added Successfully','success',false,false);

    }

    public function edit($id)
    {
        $project = $this->projectRepository->findProjectById($id);
        $this->setPageTitle('Project','Edit Project : '.$project->title);
        return view('admin.projects.edit',compact('project'));
    }

    public function update(Request $request){

        $this->validate($request,[
            'title' => 'required|max:255|unique:projects,title,'.$request->id,
            'image' => 'mimes:jpg,jpeg,png,webp|max:5000'
        ]);

        $params = $request->except('_token');
        $project = $this->projectRepository->updateProject($params);

        if(!$project){
            return $this->responseRedirectBack('Error occurred while updating project','error',true,true);
        }
        $slug = $this->projectRepository->findProjectById($params['id']);
        $this->removeCache($slug->slug);
        return $this->responseRedirectBack('Project updated successfully','success',false,false);
    }

    public function delete($id){
        $project = $this->projectRepository->deleteProject($id);
        if(!$project){
            return $this->responseRedirectBack('Error occurred while deleting project','error',true,true);
        }
        
        if($project->slug) {
            $this->removeCache($project->slug);
        }
        
        return $this->responseRedirect('admin.project.index','Project deleted Successfully','success',false,false);
    }

    protected function removeCache($slug=null){
        Cache::forget('project_'.$slug);
    }
}
