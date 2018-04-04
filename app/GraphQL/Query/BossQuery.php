<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/4/4
 * Time: 11:03
 */

namespace App\GraphQL\Query;

use App\Http\Boss;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class BossQuery extends Query
{
    protected $attributes = [
        'name' => 'boss',
        'description' => 'A query of boss'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('boss'));
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
            ],
            'job_name' => [
                'name' => 'job_name',
                'type' => Type::string(),
            ],
            'company_name' => [
                'name' => 'company_name',
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, $args, SelectFields $fields)
    {
        $where = function ($query) use ($args) {
            if (isset($args['id'])) {
                $query->where('id',$args['id']);
            }

            if (isset($args['job_name'])) {
                $query->where('job_name',$args['job_name']);
            }

            if (isset($args['company_name'])) {
                $query->where('company_name',$args['company_name']);
            }
        };
        $users = Boss::with(array_keys($fields->getRelations()))
            ->where($where)
            ->select($fields->getSelect())
            ->limit(10)
            ->get();

        return $users;
    }


}