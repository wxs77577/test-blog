@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card card-nav-tabs">
                <div class="header header-success">
                    <h5 class="panel-heading">我的消息</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>类型</th>
                            <th>通知内容</th>
                            <th>发布时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <?php
                            $type = class_basename($item->type);
                            ?>
                            <tr>
                                <td>{{$type}}</td>
                                <td><?php
//                                        var_dump($item->data);
                                    switch($type) {
                                        case 'AddComment':
                                            /**
                                             * @var \App\Models\Comment $comment
                                             */
                                            $comment = \App\Models\Comment::findOrFail($item->data['id']);
                                            echo sprintf('%s 评论了你的文章 <a href="%s">%s</a>',
                                                $comment->user->name,
                                                url('user/posts/'. $comment->post_id. '/edit'),
                                                $comment->post->title);
                                            break;
                                    }
                                    ?></td>
                                <td>{{$item->created_at}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{$list->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
