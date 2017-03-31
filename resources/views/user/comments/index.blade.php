@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card card-nav-tabs">
                <div class="header header-success">
                    <h5 class="panel-heading">评论列表</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>内容</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{$comment->id}}</td>
                                <td><a href="{{url('user/comments/'.$comment->id.'/edit')}}">{{$comment->body}}</a></td>
                                <td>{{$comment->created_at}}</td>
                                <td>
                                    <a href="{{url('user/comments/'.$comment->id.'/edit')}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{url('user/comments/'.$comment->id)}}" data-delete>
                                        <i class="fa fa-remove"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{$comments->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
