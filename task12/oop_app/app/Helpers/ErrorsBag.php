<?php 

namespace App\Helpers;

class ErrorsBag
{
    private array $errorsList = [];

    // add new error to errors bag list
    public function add(string $errorMessage) : void
    {
        $this->errorsList[] = $errorMessage;
    }

    public function all() : array
    {
        return $this->errorsList;
    }

    public function errorsExist()
    {
        return !empty($this->errorsList);
    }

}