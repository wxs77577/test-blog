<?php
/**
 * Created by PhpStorm.
 * User: wxs77577 <wxs77577@gmail.com>
 * Date: 2017/3/8
 * Time: 14:29
 */

return [
    'model' => [
        'path' => 'Models', // path after `app/`
        'soft_delete' => true, //add deleted_at for $dates
        'traits' => [], // traits for model
        'parent_class' => 'Illuminate\Database\Eloquent\Model',
        'ignore_admin_tables' => true, //ignore admin tables generated by laravel-admin plugin
        'ignore_tables' => ['jobs', 'migrations', 'notifications'], //ignore system tables
        'morph_many' => [ //see https://laravel.com/docs/5.4/eloquent-relationships#polymorphic-relations

        ],
        'morph_to_many' => [ //morphToMany
        ],
    ],
    'api' => [
        'path' => 'Api', // path after `app/Controllers/`
        'version' => 'V1', // real path is `app/Controllers/{path}/{version}`
        'parent_class' => 'App\Http\Controllers\Controller',
    ],
    'channel' => [
        'path' => 'Channels',
    ],
    'message' => [
        'path' => 'Channels/Messages',
    ],


];