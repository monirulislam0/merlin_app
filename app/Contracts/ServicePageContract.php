<?php

namespace App\Contracts;

interface ServicePageContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listServicePage(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findServicePageById(int $id);

    /**
     * @param string $shortCode
     * @return mixed
     */
    public function findServicePageByShortCode(string $shortCode);

    /**
     * @param array $params
     * @return mixed
     */
    public function createServicePage(array $params);

    /**
     * @param array $params
     * @param int $id
     * @return mixed
     */
    public function updateServicePage(array $params, int $id);
}
