<?php

namespace App\Contracts;

interface ProjectContract
{
     /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listProjects(string $order='id',string $sort = 'desc', array $columns = ['*'],int $paginetion=null);

    /**
     * @param int $id
     * @return mixed
     */
    public function findProjectById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createProject(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateProject(array $params);

    /**
     * @param int $id
     * @return bool
     */
    public function deleteProject(int $id);
}