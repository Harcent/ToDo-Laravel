<?php

namespace App\Repositories;

use App\DTO\CreateToDoDTO;
use App\DTO\UpdateToDoDTO;
use stdClass;

interface ToDoRepositoryInterface
{
    public function getAll(string $filter = null): array;
    public function getById(string $id): stdClass|null;
    public function delete(string $id): void;
    public function create(CreateToDoDTO $dto): stdClass;
    public function update(UpdateToDoDTO $dto): stdClass|null;
}