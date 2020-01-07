@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.purohit.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.purohit.fields.id') }}
                        </th>
                        <td>
                            {{ $purohit->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.purohit.fields.name') }}
                        </th>
                        <td>
                            {{ $purohit->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.purohit.fields.mobile') }}
                        </th>
                        <td>
                            {{ $purohit->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.purohit.fields.grade') }}
                        </th>
                        <td>
                            {{ $purohit->grade }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.purohit.fields.date_of_birth') }}
                        </th>
                        <td>
                            {{ $purohit->date_of_birth }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection