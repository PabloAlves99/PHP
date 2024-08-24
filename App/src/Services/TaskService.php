<?php

namespace App\Services;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

class TaskService
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function createTask(string $title, string $description): void
    {
        $this->taskRepository->addTask($title, $description);
    }

    public function completeTask(int $id): void
    {
        $task = $this->taskRepository->getTaskById($id);
        if ($task) {
            $task->complete();
        }
    }

    public function listTasks(): array
    {
        return $this->taskRepository->getAllTasks();
    }

    public function deleteTask(int $id): void
    {
        $this->taskRepository->removeTask($id);
    }
}
