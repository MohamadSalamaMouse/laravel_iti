
@extends('admin.layouts.master')
@section('title','Add Student')

@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add Student</strong>
                        </div>
                        <div class="card-body card-block">

                            <form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                              @method('put')
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">id</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="id" placeholder="Code" class="form-control " value="{{$student->id}}">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">name</label></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Name" class="form-control " value="{{$student->name}}">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">phone</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone" placeholder="Phone" class="form-control " value="{{$student->phone}}">

                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">email</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="email" class="form-control" value="{{$student->email}}">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Department</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="department" id="select" class="form-control">
                                            @foreach( $departments as $department)
                                                <option value="{{$department->id}}" @if($department->id==$student->department_id) selected @endif>{{$department->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm" name="add">
                                        <i class="fa fa-dot-circle-o"></i> Add
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

