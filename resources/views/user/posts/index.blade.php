@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card card-nav-tabs">
                <div class="header header-success row">
                    <div class="col-md-10"><h5 class="panel-heading">文章列表</h5></div>
                    <div class="col-md-2 text-right">
                        <a href="{{url('user/posts/create')}}" class="btn btn-primary">发布文章</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>标题</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td><a href="{{url('user/posts/'.$post->id.'/edit')}}">{{$post->title}}</a></td>
                                <td>{{$post->created_at}}</td>
                                <td>
                                    <a href="{{url('user/posts/'.$post->id.'/edit')}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{url('user/posts/'.$post->id)}}" data-delete>
                                        <i class="fa fa-remove"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
