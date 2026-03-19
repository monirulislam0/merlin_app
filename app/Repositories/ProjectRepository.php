<?php

namespace App\Repositories;

use App\Contracts\ProjectContract;
use App\Models\Project;
use App\Trait\UploadAble;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;


class ProjectRepository extends BaseRepository implements ProjectContract
{
    use UploadAble;

    public function __construct(Project $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listProjects(string $order = 'id', string $sort = 'desc', array $columns = ['*'], int $paginetion=null)
    {
        if($paginetion==null){
            return $this->all($columns,$order,$sort);
        }else{
            return $this->model->paginate($paginetion);
        }
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findProjectById(int $id)
    {
        try{
            return $this->findOneOrFail($id);
        } catch (ModelNotFoundException $e){
            throw new ModelNotFoundException($e);
        }
    }


    /**
     * @param array $params
     * @return Category|mixed
     */
    public function createProject(array $params)
    {

        try{
            $collection = collect($params);
            $image = null;

            if($collection->has('image') && ($params['image'] instanceof UploadedFile)){
                $image = $this->uploadOne($params['image'],'projects');
            }

            $status       = $collection->has('status') ? 1 : 0 ;

            $merge = $collection->merge(compact('image','status'));
            $project = new Project($merge->all());
            $project->save();
            return $project;

        }catch (QueryException $exception){
            throw  new InvalidArgumentException($exception->getMessage());
        }
    }


    /**
     * @param array $params
     * @return mixed
     */
    public function updateProject(array $params)
    {
        $project = $this->findProjectById($params['id']);
        $image = $project->image;

        $collection = collect($params)->except('_token');

        if ($collection->has('image') && ($params['image'] instanceof UploadedFile)){
            if($project->image !=null){
                $this->deleteOne($project->image);
            }
            $image = $this->uploadOne($params['image'],'projects');
        }
        $status       = $collection->has('status') ? 1 : 0 ;

        $merge = $collection->merge(compact('image','status'));

        $project->update($merge->all());

        return $project;


    }

    public function deleteProject(int $id)
    {

        $project = $this->findProjectById($id);

        if($project->image != null){
            $this->deleteOne($project->image);
        }

        $project->delete();

        return $project;
    }
}
