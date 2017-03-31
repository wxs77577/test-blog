@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-nav-tabs">
                    <div class="header header-success">
                        <div class="panel-heading">
                            编辑头像
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="" method="POST" enctype="multipart/form-data" action="{{url('/user/edit/avatar')}}">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                @if($user->avatar)
                                <img src="{{asset('uploads/'.$user->avatar)}}" width="200" class="img-circle"> <br>
                                @endif
                                <label class="btn btn-primary" for="avatar">请选择图片</label>
                                <input type="file" id="avatar" name="avatar" class="form-control" >

                            </div>
                            <button type="submit" class="btn btn-success">保存</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
