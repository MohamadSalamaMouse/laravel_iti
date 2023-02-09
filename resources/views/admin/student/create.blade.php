
@extends('admin.layouts.master')
@section('title','Add Student')

@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> {{trans('main_trans.Add_Student')}}</strong>
                        </div>
                        <div class="card-body card-block">
                            @if(\Illuminate\Support\Facades\Session::has('msg'))
                                <div class="alert alert-success">
                                    {{\Illuminate\Support\Facades\Session::get('msg')}}
                                </div>
                            @endif
                            <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">{{trans('main_trans.id')}}</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="id" placeholder="{{trans('main_trans.id')}}" class="form-control @error('id') is-invalid @enderror" value="{{old('id')}}">
                                        @error('id')
                                        <small class="form-text text-muted" style="color:red !important">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">{{trans('main_trans.name')}}</label></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="{{trans('main_trans.name')}}" class="form-control  @error('name') is-invalid @enderror" value="{{old('name')}}">
                                        @error('name')
                                        <small class="form-text text-muted" style="color:red !important">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">{{trans('main_trans.phone')}}</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone" placeholder="{{trans('main_trans.phone')}}" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">
                                        @error('phone')
                                        <small class="form-text text-muted" style="color:red !important">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">{{trans('main_trans.email')}}</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="{{trans('main_trans.email')}}" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                        @error('email')
                                        <small class="form-text text-muted" style="color:red !important">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">{{trans('main_trans.image')}}</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="text-input" name="image" placeholder="{{trans('main_trans.image')}}" class="form-control @error('email') is-invalid @enderror" >
{{--                                        @error('image')--}}
{{--                                        <small class="form-text text-muted" style="color:red !important">{{$message}}</small>--}}
{{--                                        @enderror--}}
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">{{trans('main_trans.depart')}}</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="department" id="select" class="form-control">
                                          @foreach( $departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm" name="add">
                                        <i class="fa fa-dot-circle-o"></i> {{trans('main_trans.add')}}
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> {{trans('main_trans.reset')}}
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

