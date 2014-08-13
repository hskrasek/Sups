<?php
use Dingo\Api\Auth\Shield;
use Dingo\Api\Dispatcher;
use Dingo\Api\Http\ResponseBuilder;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Sups\Repo\v1\User\UserInterface;
use Sups\Transformers\UserTransformer;

class UsersController extends BaseController
{
    protected $users;

    public function __construct(Dispatcher $api, Shield $auth, ResponseBuilder $response, UserInterface $users)
    {
        parent::__construct($api, $auth, $response);
        $this->users = $users;
    }

    public function index()
    {
        $users = $this->users->findAll();
        return Response::make($users->getCollection());
    }

    public function show($id)
    {
        $user = $this->users->findById($id);
        return Response::make($user);
    }

    public function store()
    {
        return Input::all();
    }

    public function update($id)
    {
        return "Updating $id with " . Input::all();
    }

    public function destroy($id)
    {
        return "Goodbye $id";
    }

    public function devices($id)
    {
        return "$id's Devices";
    }

    public function friends($id)
    {
        return "$id's friends";
    }
} 