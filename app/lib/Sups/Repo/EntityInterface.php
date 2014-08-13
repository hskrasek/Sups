<?php namespace Sups\Repo;

interface EntityInterface
{
    public function findAll(array $with = []);

    public function findById($id, array $with = []);

    public function findByIds(array $ids, array $with = []);

    public function store(array $data);

    public function update($id, array $data);

    public function destroy($id);

    public function destroyMany(array $ids);
}