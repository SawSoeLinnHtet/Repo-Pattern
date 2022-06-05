<?php

namespace App\Repositories;

interface customerRepositoryInterface
{
  public function all();

  public function findById($customerId);

  public function findByUsername();

  public function update($customerId);

  public function delete($customerId);
}