<?php

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{
    private array $tasks = [];

    public function addTask(string $title, string $description): void
    {
        $id = count($this->tasks) + 1;
        $task = new Task($id, $title, $description);
        $this->tasks[$id] = $task;
    }

    public function getAllTasks(): array
    {
        return $this->tasks;
    }

    public function getTaskById(int $id): ?Task
    {
        return $this->tasks[$id] ?? null;
    }

    public function removeTask(int $id): void
    {
        unset($this->tasks[$id]);
    }
}
