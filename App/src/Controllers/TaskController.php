<?php

namespace App\Controllers;

use App\Repositories\TaskRepository;
use App\Services\TaskService;

class TaskController{
    private TaskService $taskService;

    public function __construct(){
        $taskRepository = new TaskRepository();
        $this->taskService = new TaskService($taskRepository);
    }

    public function initializeTasks(): void
    {
        $this->taskService->createTask('Aprender PHP', 'Estudar os conceitos de OOP em PHP');
        $this->taskService->createTask('Praticar PHP', 'Desenvolver um projeto simples em PHP');
        $this->taskService->createTask('Refatorar', 'Refatorar o projeto desenvolvido');
        $this->taskService->createTask('Fazer outro projeto', 'Aumentar o cinto de ferramentas');

        $this->taskService->completeTask(1);
        $this->taskService->completeTask(2);
        $this->taskService->completeTask(3);
    }

    public function renderTasks(): string
    {
        $tasks = $this->taskService->listTasks();
        $html = file_get_contents(__DIR__ . '/../../views/tasks.html');
        
        $taskRows = '';
        foreach ($tasks as $task) {
            $taskRows .= '<tr>
                <td>' . htmlspecialchars($task->getId()) . '</td>
                <td>' . htmlspecialchars($task->getTitle()) . '</td>
                <td>' . htmlspecialchars($task->getDescription()) . '</td>
                <td class="' . ($task->isCompleted() ? 'completed' : 'not-completed') . '">' .
                ($task->isCompleted() ? 'Completada' : 'Não Completada') . '</td>
            </tr>';
        }
        
        return str_replace('<!-- As tarefas serão inseridas aqui pelo PHP -->', $taskRows, $html);
    }

}