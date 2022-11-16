<?php

namespace App\Http\Services\PatienService;

interface PatienInterface {
    public function index() : array;
    public function store($data) : array;
    public function detail($patienId) : array;
    public function update($data, $patienId) : array;
    public function delete($patienId) : array;
    public function searchByName($name) : array;
    public function searchByStatusPositive() : array;
    public function searchByStatusRecovered() : array;
    public function searchByStatusDead() : array;
}
