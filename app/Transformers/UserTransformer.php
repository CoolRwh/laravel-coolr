<?php
/**
 * Created by 十清凉.
 * User: 十清凉
 * Date: 2020/2/16 0016
 * Time: 10:43
 */

namespace App\Transformers;


use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
          'id' => $user['id'],
          'name'    => $user['name'],
        ];
    }
}