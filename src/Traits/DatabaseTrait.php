<?php

namespace Maid\Sdk\Traits;

use Maid\Sdk\Exceptions\RequestRequiresClientIdException;
use Maid\Sdk\Result;
use GuzzleHttp\Exception\GuzzleException;

trait DatabaseTrait
{
    /**
     *
     *
     * @throws RequestRequiresClientIdException
     * @throws GuzzleException
     */
    public function createDatabase(int $project, array $parameters): Result
    {
        return $this->post("projects/{$project}/databases", [], $parameters);
    }

    /**
     *
     *
     * @throws RequestRequiresClientIdException
     * @throws GuzzleException
     */
    public function getDatabases(int $project, array $parameters = []): Result
    {
        return $this->get("projects/{$project}/databases", $parameters);
    }

    /**
     *
     *
     * @throws RequestRequiresClientIdException
     * @throws GuzzleException
     */
    public function deleteDatabase(int $database): Result
    {
        return $this->delete("databases/{$database}");
    }
}