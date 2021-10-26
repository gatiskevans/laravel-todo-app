<?php

namespace App\Models;

class Task
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $task;
    /**
     * @var string|null
     */
    private $status;


    public function __construct(int $id, string $task, ?string $status)
    {
        $this->id = $id;
        $this->task = $task;
        $this->status = $status;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTask(): string
    {
        return $this->task;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
}
