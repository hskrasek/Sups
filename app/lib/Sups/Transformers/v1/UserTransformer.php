<?php namespace Sups\Transformers;

use League\Fractal\TransformerAbstract;
use User;

class UserTransformer extends TransformerAbstract
{
    public $availableIncludes = [
        'sups'
    ];

    public function transform(User $user)
    {
        return [
            'id'         => $user->uuid,
            'username'   => $user->username,
            'email'      => $user->email,
            'name'       => $user->name,
            'longitude'  => $user->long,
            'latitude'   => $user->lat,
            'created_at' => (string) $user->created_at,
            'updated_at' => (string) $user->updated_at
        ];
    }

    public function includeSups(User $user)
    {
        $sups = $user->supsRecieved;

        return $this->collection($sups, new SupTransformer);
    }
}
 