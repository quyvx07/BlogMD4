<?php


namespace App\Repositories\Contracts;


interface UserRepositoryInterface extends RepositoryInterface
{
    public function searchEmail($column, $keyword);

}
