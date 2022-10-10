<?php

namespace PomoManager\Controller\Task;

use PDO;
use PomoManager\Controller\controllersInterface;
use PomoManager\Entity\Task;

class taskListController extends Task implements controllersInterface
{
    public $connection;
    public $tasks;

    public function __construct()
    {
        parent::__construct();
    }

    public function processaRequisicao(): void
    {
        $userID = $_SESSION['userID'];
        $sqlQuery = $this->connection->prepare('SELECT taskID, taskDescription, taskExp from tasks where userID = ? and taskStatus = "INCOMPLETO"');
        $sqlQuery->bindParam(1, $userID, PDO::PARAM_INT);
        $sqlQuery->execute();

        $this->tasks = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);

    }
}