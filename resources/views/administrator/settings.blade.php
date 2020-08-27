@extends('layouts.backend')
@section('title', 'Settings')
@section('content')

<div class="container">
    <div class="container d-flex">
        <div class="card"> <!-- CLASSES CARD -->
            <div class="card-header bg-dark text-white d-flex justify-content-between">
                <div class="container h5 pt-2">VISITOR CLASSES</div>
            </div>
            <div class="card-body">
                @if(count($classes) > 0)
                <table class="table table-bordered table-hover table-sm table-responsive-md text-center">
                    <thead class="thead-dark">
                      <tr>
                        <th><small>Classes</small></th>
                        <th><small>Action</small></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($classes as $class)
                        <tr>
                            <td><small>{{$class->classes}}</small></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm"
                                    data-toggle="modal" data-target="#editVisitorClass"
                                    data-visitorid="{{$class->id}}" data-visitorclass="{{$class->classes}}">
                                    <i class='fas fa-edit'></i>
                                </button>
                                <a href="/class/{id}" class="btn btn-danger btn-sm"><i class='fas fa-trash'></i></a> </td>
                        </tr>
                        @endforeach
                        
                        @else
                            Please add Visitor Class.
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#inputVisitorClass">Add Class</a>
            </div>
        </div> <!-- CLASSES CARD END -->

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="card"> <!-- PURPOSE CARD -->
            <div class="card-header bg-dark text-white d-flex justify-content-between">
                <div class="container h5 pt-2">VISITOR CLASSES</div>
            </div>
            <div class="card-body">
                @if(count($classes) > 0)
                <table class="table table-bordered table-hover table-sm table-responsive-md text-center">
                    <thead class="thead-dark">
                      <tr>
                        <th><small>Classes</small></th>
                        <th><small>Action</small></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($classes as $class)
                        <tr>
                            <td><small>{{$class->classes}}</small></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm"
                                    data-toggle="modal" data-target="#editVisitorClass"
                                    data-visitorid="{{$class->id}}" data-visitorclass="{{$class->classes}}">
                                    <i class='fas fa-edit'></i>
                                </button>
                                <a href="/class/{id}" class="btn btn-danger btn-sm"><i class='fas fa-trash'></i></a> </td>
                        </tr>
                        @endforeach
                        
                        @else
                            Please add Visitor Class.
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#inputVisitorClass">Add Class</a>
            </div>
        </div> <!-- PURPOSE CARD END -->


    </div> <!-- END OF DFLEX -->
</div>

@include('popups.class')
@include('popups.editclass')
@endsection