<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //


    protected $fillable = ['pid','per_name','per_url','url','model','show'];


    public function dateAdd($data){

        if ($data['pid'] == 0){
            $this->pid = $data['pid'];
            $this->per_name = $data['per_name'];
            $this->per_url = '#';
            $this->url = '#';
            $this->model = $data['model'];
            $this->show = $data['show'];
            $this->save();
        }else{
          /* dd($data);*/
            $this->fill($data)->save();
//            Permission::create($data);
        }

        return true;
    }



}
