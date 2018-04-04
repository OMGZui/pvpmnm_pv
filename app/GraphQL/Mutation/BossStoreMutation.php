<?php

namespace App\GraphQL\Mutation;

use App\Http\Boss;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\Facades\GraphQL;

class BossStoreMutation extends Mutation
{
    protected $attributes = [
        'name' => 'BossStoreMutation',
        'description' => 'store'
    ];

    public function type()
    {
        return GraphQL::type('boss');
    }

    public function args()
    {
        return [
            'job_name' => [
                'name' => 'job_name',
                'type' => Type::nonNull(Type::string()),
            ],
            'company_name' => [
                'name' => 'company_name',
                'type' => Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $boss = Boss::create($args);
        return $boss;
    }
}