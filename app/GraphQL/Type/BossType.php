<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/4/4
 * Time: 10:53
 */
namespace App\GraphQL\Type;

use App\Http\Boss;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class BossType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Boss',
        'description' => 'Boss type',
        'model' => Boss::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the Boss'
            ],
            'job_name' => [
                'type' => Type::string(),
                'description' => 'The job_name of the Boss'
            ],
            'company_name' => [
                'type' => Type::string(),
                'description' => 'The company_name of the Boss'
            ],
        ];
    }

}