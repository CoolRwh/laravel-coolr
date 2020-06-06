<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    //

    protected $table = 'tags';

    protected $fillable = ['tag_name', 'sort', 'state'];


    public function add()
    {
        $data = request()->except('_token');
        isset($data['state']) ? $data['state'] = 1 : $data['state'] = 0;
        $this->tag_name = $data['tag_name'];
        $this->sort     = $data['sort'];
        $this->state    = $data['state'];
        $this->save();
        return true;
    }


    public function edit($data,$id){
        isset($data['state']) ? $data['state'] = 1 : $data['state'] = 0;
        $res = [
          'tag_name' => $data['tag_name'],
          'sort' => $data['sort'],
          'state' => $data['state'],

        ];
        $this->where('id',$id)->update($res);
        return true;

    }
}
