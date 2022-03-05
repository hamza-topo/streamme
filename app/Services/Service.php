<?php 
namespace App\Services;

interface Service {


    public function find(int $id);

    public function save(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);

    public function all();

    public function forget();


}