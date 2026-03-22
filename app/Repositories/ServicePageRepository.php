<?php

namespace App\Repositories;

use App\Contracts\ServicePageContract;
use App\Models\ServicePage;
use App\Trait\UploadAble;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class ServicePageRepository extends BaseRepository implements ServicePageContract
{
    use UploadAble;

    public function __construct(ServicePage $model)
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
    public function listServicePage(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findServicePageById(int $id)
    {
        try {
            return $this->findOneOrFail($id);
        } catch (ModelNotFoundException $e) {
            throw new ModelNotFoundException($e);
        }
    }

    /**
     * @param string $shortCode
     * @return mixed
     */
    public function findServicePageByShortCode(string $shortCode)
    {
        return $this->model->where('short_code', $shortCode)->first();
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function createServicePage(array $params)
    {
        try {
            $servicePage = $this->create($params);
            return $servicePage;
        } catch (QueryException $e) {
            throw new InvalidArgumentException($e->getMessage());
        }
    }

    /**
     * @param array $params
     * @param int $id
     * @return mixed
     */
    public function updateServicePage(array $params, int $id)
    {
        $servicePage = $this->findServicePageById($id);

        if ($servicePage) {
            $servicePage->update($params);
            return $servicePage;
        }

        return false;
    }
}
