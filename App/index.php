<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TaskController;

// Instanciando o controlador de tarefas
$taskController = new TaskController();

// Inicializando e configurando as tarefas
$taskController->initializeTasks();

// Renderizando e exibindo o HTML
echo $taskController->renderTasks();
