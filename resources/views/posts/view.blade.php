@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-nav-tabs">
                    <div class="header header-success">
                        <h3 class="panel-heading">
                            <strong>{{$post->title}}</strong>

                        </h3>
                    </div>
                    <div class="card-body">

                        {!! nl2br($post->body) !!}
                        <br>
                        <p class="text-right text-info">-- {{$post->user->name}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-nav-tabs">
                    <div class="header header-info">
                        <div class="panel-heading">{{$post->comments->count()}}条评论</div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            @foreach($post->comments as $comment)
                                <div>
                                    <p>
                                        <span class="text-info">
                                            {{'@'.$comment->user->name}}:
                                        </span>
                                        {{$comment->body}}
                                    </p>
                                </div>
                            @endforeach
                                <hr>
                                <form class="form-horizontal" method="post" action="{{url('/posts/'.$post->id.'/comments')}}">
                                    {{csrf_field()}}
                                    <legend>发表评论</legend>
                                    <textarea type="text" name="body" class="form-control" placeholder="评论内容"></textarea>
                                    <button type="submit" class="btn btn-success">发布</button>
                                </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
