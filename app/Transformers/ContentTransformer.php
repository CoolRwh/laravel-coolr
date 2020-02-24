<?php
/**
 * Created by 十清凉.
 * User: 十清凉
 * Date: 2020/2/16 0016
 * Time: 10:29
 */

namespace App\Transformers;


use League\Fractal\TransformerAbstract;

class ContentTransformer extends TransformerAbstract
{

    public function transform(Content $content)
    {
        return [
          'id' => $content['id'],
          'username'    => $content['username'],
        ];
    }

}