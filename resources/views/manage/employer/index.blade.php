@extends('manage.layout')
@section('title', __('employer.title'))
@section('content')

<div class="col-12">
    {!! Form::open(['route' => ['employer.destroy', 0], 'method' => 'DELETE']) !!}
        <button type="submit"
            class="btn btn-danger m-b-10" 
            title="@lang('common.deletes_message', ['name' => __('employer.employer')])"
            onclick="{{ "return confirm('".__('common.deletes_message',
                            ['name' => __('employer.employer')])."')" }}">
            <i class="fas fa-trash-alt"></i> @lang('common.deletes')
        </button>
        <div class="table-responsive">
            <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                <thead>
                    <tr>
                        <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                        <th>@lang('employer.first_name')</th>
                        <th>@lang('employer.last_name')</th>
                        <th>@lang('employer.email')</th>
                        <th>@lang('employer.phone')</th>
                        <th>@lang('employer.company_name')</th>
                        <th>@lang('employer.province')</th>
                        <th>@lang('employer.district')</th>
                        <th>@lang('employer.ward')</th>
                        <th>@lang('employer.landline_phone')</th>
                        <th>@lang('common.detail')</th>
                        <th>@lang('common.delete')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employers as $employer)
                    <tr>
                        <td class="width-42">{{ Form::checkbox('ids[]', $employer->id, null, ['class' => 'checkbox-delete']) }}</td>
                        <td>{{ $employer->first_name }}</td>
                        <td>{{ $employer->last_name }}</td>
                        <td>{{ $employer->email }}</td>
                        <td>{{ $employer->phone }}</td>
                        <td>{{ $employer->company_name }}</td>
                        <td>{{ $employer->province->name }}</td>
                        <td>{{ $employer->district->name }}</td>
                        <td>{{ $employer->ward->name }}</td>
                        <td>{{ $employer->landline_phone }}</td>
                        <td class="text-center">
                            <a href="{{ route('employer.show', $employer->id) }}" 
                            class="fas fa-edit" 
                            title="{{ __('common.show_detail', 
                                        ['name' => $employer->first_name . ' ' . $employer->last_name]) }}"></a>
                        </td>
                        <td class="text-center">
                            {{ Form::button(null,
                                [
                                    'name' => 'delete_id',
                                    'type' => 'submit',
                                    'value' => $employer->id,
                                    'class' => 'fas fa-trash-alt text-danger text-danger-hover',
                                    'title' => __('common.delete_message', ['name' => __('employer.employer')]),
                                    'onclick' => "return confirm('".__('common.delete_message',
                                    [
                                        'table_name' => __('employer.employer'),
                                        'name' => $employer->first_name . ' ' . $employer->last_name
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
        {{ $employers->links() }}
    </div>
</div>
@endsection