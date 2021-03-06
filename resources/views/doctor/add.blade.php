@extends('layouts.app', ['activePage' => 'add-doctor', 'titlePage' => __('Add Doctor')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('doctor.insert') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Doctor') }}</h4>
                                <p class="card-category">{{ __('Doctor information') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}"  required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Specialty') }}</label>
                                    <div class="col-sm-7">
                                        <select class="form-control{{ $errors->has('specialty_id') ? ' is-invalid' : '' }}" name="specialty_id" id="input-specialty_id">
                                            @foreach($specialties as $specialty)
                                                <option value="{{ $specialty->id }}">{{ $specialty->title }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('specialty_id'))
                                            <span id="specialty_id-error" class="error text-danger" for="input-specialty_id">{{ $errors->first('specialty_id') }}</span>
                                        @endif
                                    </div>
                                </div>  
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Bio') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('bio') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}" name="bio" id="input-bio" type="text" placeholder="{{ __('Bio') }}"  required="true" aria-required="true"/>
                                            @if ($errors->has('bio'))
                                                <span id="bio-error" class="error text-danger" for="input-bio">{{ $errors->first('bio') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Slug') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" id="input-slug" type="text" placeholder="{{ __('Slug') }}"  required="true" aria-required="true"/>
                                            @if ($errors->has('slug'))
                                                <span id="slug-error" class="error text-danger" for="input-slug">{{ $errors->first('slug') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" name="img" id="input-img" type="file" placeholder="{{ __('Image') }}" style="position: initial; opacity:1" />
                                            @if ($errors->has('img'))
                                                <span id="img-error" class="error text-danger" for="input-img">{{ $errors->first('img') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>                                  
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div>
@endsection