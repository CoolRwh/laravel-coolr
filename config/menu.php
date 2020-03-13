<?php
/**
 * Created by 十清凉.
 * User: 十清凉
 * Date: 2020/2/25 0025
 * Time: 16:45
 */

return [
  [
    'title' => '文章管理',
    'icon'  => 'fa fa fa-bar-chart-o',
    'url'   => '#',
    "permission" => "权限标识",
    'next'   => [
      ['title' => '文章列表',"permission" => "权限标识",'url' => 'admin/article'],
      ['title' => '栏目列表',"permission" => "权限标识",'url' => 'admin/cate'],
    ],
  ],
  [
    'title' => '后台权限',
    'icon'  => 'fa fa-user',
    'url'   => '#',
    "permission" => "权限标识",
    'next'   => [
      ['title' => '角色管理',"permission" => "权限标识",'url' => '/admin/role'],
      ['title' => '权限管理',"permission" => "权限标识",'url' => 'admin/permission'],
    ],
  ],
  [
    'title' => '用户管理',
    'icon'  => 'fa fa-users',
    'url'   => '#',
    "permission" => "权限标识",
    'next'   => [
      ['title' => '前台用户',"permission" => "权限标识",'url' => 'admin/article/list'],
      ['title' => '后台用户',"permission" => "权限标识",'url' => 'admin/article/list'],
      ['title' => '第三方用户',"permission" => "权限标识",'url' => 'admin/article/list'],

    ],
  ],
];