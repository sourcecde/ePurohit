@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.purohit.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.purohits.update", [$purohit->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.purohit.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($purohit) ? $purohit->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.purohit.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
                <label for="mobile">{{ trans('cruds.purohit.fields.mobile') }}*</label>
                <input type="mobile" id="mobile" name="mobile" class="form-control" value="{{ old('mobile', isset($purohit) ? $purohit->mobile : '') }}" required>
                @if($errors->has('mobile'))
                    <em class="invalid-feedback">
                        {{ $errors->first('mobile') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.purohit.fields.mobile_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('grade') ? 'has-error' : '' }}">
                <label for="grade">{{ trans('cruds.purohit.fields.grade') }}*</label>
                <input type="grade" id="grade" name="grade" class="form-control" value="{{ old('grade', isset($purohit) ? $purohit->grade : '') }}" required>
                @if($errors->has('grade'))
                    <em class="invalid-feedback">
                        {{ $errors->first('grade') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.purohit.fields.grade_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
                <label for="date_of_birth">{{ trans('cruds.purohit.fields.date_of_birth') }}*</label>
                <input type="date_of_birth" id="date_of_birth" name="date_of_birth" class="form-control" value="{{ old('date_of_birth', isset($purohit) ? $purohit->date_of_birth : '') }}" required>
                @if($errors->has('date_of_birth'))
                    <em class="invalid-feedback">
                        {{ $errors->first('date_of_birth') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.purohit.fields.date_of_birth_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection