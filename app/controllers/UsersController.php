<?php 
class UsersController extends BaseController
{
    public function index()
    {
        return 'Hello World';
    }

    public function show($id)
    {
        return "Hello $id";
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