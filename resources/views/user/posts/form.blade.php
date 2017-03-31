@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-nav-tabs">
                    <div class="header header-success">
                        <div class="panel-heading">
                            编辑文章
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="" method="POST" action="{{url('/user/posts/'.$post->id)}}">
                            {{csrf_field()}}
                            {{method_field($post->id ? 'PUT': 'POST')}}
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="标题">

                            </div>
                            <div class="form-group">
                                <input type="text" name="description" class="form-control" value="{{$post->description}}" placeholder="描述">

                            </div>

                            <div class="form-group">

                                <select type="text" name="category_id" class="form-control">
                                    @foreach(\App\Models\Category::pluck('name', 'id') as $id => $cate)
                                        <option value="{{$id}}" <?=($id == $post->category_id)?'selected':''?> >{{$cate}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">

                                <textarea name="body" class="form-control" rows="20" placeholder="文章内容">{{$post->body}}</textarea>

                            </div>

                            <button type="submit" class="btn btn-success">发布</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
