<?php namespace Sups\Repo;

use Illuminate\Support\Collection;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

abstract class AbstractRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Make a new instance of the entity
     *
     * @param array $with
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function make(array $with = [])
    {
        return $this->model->with($with);
    }

    /**
     * Retrieve all entities and paginate
     *
     * @param array $with
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function findAll(array $with = [])
    {
        $entity = $this->make($with);

        return $entity->paginate();
    }

    /**
     * Find a single entity
     *
     * @param       $id
     * @param array $with
     *
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findById($id, array $with = [])
    {
        $entity = $this->make($with);
        $entity = $entity->where('uuid', $id)->first();

        if ( ! $entity)
        {
            throw new NotFoundHttpException(sprintf('%s not found', get_class($this->model)));
        }

        return $entity;
    }

    /**
     * Find multiple entities by id
     * @param array $ids
     * @param array $with
     *
     * @return \Illuminate\Support\Collection
     */
    public function findByIds(array $ids, array $with = [])
    {
        $entities = new Collection();

        foreach ($ids as $id)
        {
            $entities->add($this->findById($id, $with));
        }

        return $entities;
    }

    /**
     * Find all by key / value and paginate
     *
     * @param       $key
     * @param       $value
     * @param array $with
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function findAllBy($key, $value, array $with = [])
    {
        return $this->make($with)->where($key, '=', $value)->paginate();
    }
}
 