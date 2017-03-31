@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card card-nav-tabs">
                <div class="header header-success">
                    <h5 class="" style="text-indent: 1.5em;">文章列表</h5>
                </div>
                <div class="card-body">
                    @foreach($posts as $post)
                    <div class="row">
                        <div class="col-md-2 text-center">
                            @if($post->user->avatar)
                                <img src="{{asset('uploads/'.$post->user->avatar)}}" width="80" class="img-circle"> <br>

                            @endif

                        </div>
                        <div class="col-md-10">
                            <h4><a href="{{url('/posts/'.$post->id)}}">{{$post->title}}</a></h4>
                            <div class="text-info">-- {{$post->user->name}}</div>
                            <p>{{$post->description}}</p>
                            <hr>
                        </div>
                    </div>
                    @endforeach

                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
