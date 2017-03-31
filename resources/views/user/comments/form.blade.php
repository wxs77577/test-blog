@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-nav-tabs">
                    <div class="header header-success">
                        <div class="panel-heading">
                            编辑评论
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="" method="post" action="{{url('/user/comments/'.$comment->id)}}">
                            {{csrf_field()}}
                            {{method_field($comment->id ? 'PUT': 'POST')}}
                            <div class="form-group">

                                <textarea name="body" class="form-control" rows="20" placeholder="评论内容">{{$comment->body}}</textarea>

                            </div>

                            <button type="submit" class="btn btn-success">保存</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
