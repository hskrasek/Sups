<?php namespace Sups\Transformers;

use League\Fractal\TransformerAbstract;
use Sup;

class SupTransformer extends TransformerAbstract
{
    public function transform(Sup $sup)
    {
        return [
            'id'      => $sup->uuid,
            'content' => $sup->content,
            'type'    => $sup->type,
            'sender'  => [
                'id'       => $sup->sender->uuid,
                'username' => $sup->sender->username,
                'name'     => $sup->sender->name
            ]
        ];
    }
}
 