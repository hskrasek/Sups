<?php namespace Sups\Repo\v1\User;

use Illuminate\Database\Eloquent\Model;
use Sups\Repo\AbstractRepository;
use Sups\Repo\EntityInterface;

class EloquentUserRepository extends AbstractRepository implements EntityInterface, UserInterface
{

    public function __construct(Model $user)
    {
        $this->model = $user;
    }

    public function store(array $data)
    {
        // TODO: Implement store() method.
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        $user = $this->findById($id);

        return $user->delete();
    }

    public function destroyMany(array $ids)
    {
        foreach ($ids as $id)
        {
            $this->destroy($id);
        }

        return true;
    }

    public function sups($id, $sent = false)
    {
        $user = $this->findById($id);

        if ($sent)
        {
            return $user->supsSent()->paginate();
        }
        else
        {
            return $user->supsRecieved()->paginate();
        }
    }

}
 