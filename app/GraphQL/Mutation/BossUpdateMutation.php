<?php

namespace App\GraphQL\Mutation;

use App\Http\Boss;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\Facades\GraphQL;

class BossUpdateMutation extends Mutation
{
    protected $attributes = [
        'name' => 'BossUpdateMutation',
        'description' => 'update'
    ];

    public function type()
    {
        return GraphQL::type('boss');
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::int()),
            ],
            'job_name' => [
                'name' => 'job_name',
                'type' => Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $boss = Boss::query()->find($args['id']);
        $boss->job_name = $args['job_name'];
        $boss->save();
        return $boss;
    }
}