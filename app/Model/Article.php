<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //批量填充

    protected $table = 'articles';

//    protected $fillable = ['title','titlepic','content','sharenum','type','isopen','user_id','cate_id','tag_id'];
}
