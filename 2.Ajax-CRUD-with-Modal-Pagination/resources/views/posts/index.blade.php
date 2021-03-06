@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-md-12">
        <h1>Laravel CRUD</h1>
    </div>
</div>

<div class="row">
    <div class="table table-responsive">
        <table class="table table-bordered" id="table">
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Create At</th>
                <th class="text-center" width="150px">
                    <a href="#" class="create-modal btn btn-success btn-sm">
                        <i class="glyphicon glyphicon-plus"></i>
                    </a>
                </th>
            </tr>
            {{csrf_field()}}
            @foreach($posts as $key=>$value)
                <tr class="post{{$value->id}}">
                    <td>{{$value->title}}</td>
                    <td>{{$value->body}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>
                        <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}"
                           data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}"
                           data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}"
                           data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
{{--form create post --}}
<div id="create" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group row add">
                        <label class="control-label col-sm-2" for="title">Title :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Your title" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                    </div>
                    <div class="form-group row add">
                        <label class="control-label col-sm-2" for="title">Body :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="body" name="body" placeholder="Your body" required>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="submit" id="add">
                    <span class="glyphicon glyphicon-plus"></span>Save Post
                </button>
                <button class="btn btn-warning" type="button" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remobe"></span>Close
                </button>
            </div>
        </div>
    </div>
</div>



@endsection