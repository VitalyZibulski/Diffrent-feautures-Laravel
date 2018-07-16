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
                    <a href="" class="create-modal btn btn-success btn-sm">
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
@endsection