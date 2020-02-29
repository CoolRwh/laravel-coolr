<?php
/**
 * Created by 十清凉.
 * User: 十清凉
 * Date: 2020/2/25 0025
 * Time: 16:45
 */

return [
  [
    'title' => '主页',
    'icon'  => 'fa fa-home',
    'url'   => '#',
    "permission" => "权限标识",
    'next'   => [
      ['title' => '首页',"permission" => "权限标识",'url' => 'admin/welcome'],
    ],
  ],
  [
    'title' => '文章管理',
    'icon'  => 'fa fa fa-bar-chart-o',
    'url'   => '#',
    "permission" => "权限标识",
    'next'   => [
      ['title' => '文章列表',"permission" => "权限标识",'url' => 'admin/cate/2/edit'],
      ['title' => '文章添加',"permission" => "权限标识",'url' => 'admin/article/add'],
    ],
  ],
  [
    'title' => '权限管理',
    'icon'  => 'fa fa-user',
    'url'   => '#',
    "permission" => "权限标识",
    'next'   => [
      ['title' => '权限列表',"permission" => "权限标识",'url' => 'admin/article/list'],
      ['title' => '前台用户列表',"permission" => "权限标识",'url' => 'admin/user/list'],
    ],
  ],
  [
    'title' => '画布',
    'icon'  => 'fa fa-bar-chart-o',
    'url'   => '/',
    "permission" => "权限标识",
    'next'   => '',
  ],
];