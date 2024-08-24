<?php

namespace App\Interfaces;

interface TaskRepositoryInterface
{
    public function addTask(string $title, string $description): void;
    public function getAllTasks(): array;
    public function getTaskById(int $id): ?\App\Models\Task;
    public function removeTask(int $id): void;
}
