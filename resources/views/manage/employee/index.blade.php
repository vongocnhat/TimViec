@extends('manage.layout')
@section('title', __('employee.title'))
@section('content')
<div class="col-12 m-b-10">
    <a href="{{ route('employee.create') }}" class="btn btn-success">@lang('common.create')</a>
</div>
<div class="col-12">
    {!! Form::open(['route' => ['employee.destroy', 0], 'method' => 'DELETE']) !!}
        <button type="submit"
            class="btn btn-danger m-b-10" 
            title="@lang('common.deletes_message', ['name' => __('employee.employee')])"
            onclick="{{ "return confirm('".__('common.deletes_message',
                            ['name' => __('employee.employee')])."')" }}">
            <i class="fas fa-trash-alt"></i> @lang('common.deletes')
        </button>
        <div class="table-responsive">
            <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                <thead>
                    <tr>
                        <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                        <th>@lang('employee.first_name')</th>
                        <th>@lang('employee.last_name')</th>
                        <th>@lang('employee.email')</th>
                        <th>@lang('employee.phone')</th>
                        <th>@lang('employee.birthday')</th>
                        <th>@lang('employee.province')</th>
                        <th>@lang('employee.district')</th>
                        <th>@lang('employee.ward')</th>
                        <th>@lang('employee.address')</th>
                        <th>@lang('employee.gender')</th>
                        <th>@lang('employee.married')</th>
                        <th>@lang('common.edit')</th>
                        <th>@lang('common.delete')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td class="width-42">{{ Form::checkbox('ids[]', $employee->id, null, ['class' => 'checkbox-delete']) }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->birthday }}</td>
                        <td>{{ $employee->province->name }}</td>
                        <td>{{ $employee->district->name }}</td>
                        <td>{{ $employee->ward->name }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->married === 0 ? __('employee.married_false') : __('employee.married_true') }}</td>
                        <td class="text-center">
                            <a href="{{ route('employee.edit', $employee->id) }}" 
                            class="fas fa-edit" 
                            title="{{ __('common.edit_title', 
                                        ['name' => $employee->first_name . ' ' . $employee->last_name]) }}"></a>
                        </td>
                        <td class="text-center">
                            {{ Form::button(null,
                                [
                                    'name' => 'delete_id',
                                    'type' => 'submit',
                                    'value' => $employee->id,
                                    'class' => 'fas fa-trash-alt text-danger text-danger-hover',
                                    'title' => __('common.delete_message', ['name' => __('employee.employee')]),
                                    'onclick' => "return confirm('".__('common.delete_message',
                                    [
                                        'table_name' => __('employee.employee'),
                                        'name' => $employee->first_name . ' ' . $employee->last_name
                                    ])."')"
                                ]) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    {!! Form::close() !!}
    <div class="m-t-10">
        {{ $employees->links() }}
    </div>
</div>
@endsection