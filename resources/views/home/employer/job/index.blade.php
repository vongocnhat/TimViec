@extends('home.layouts.job_layout')
@section('content')
<div class="container">
    <div class="box_cnt">
        <div class="col-12 mb-3">
            <a href="{{ route('employer-home.job.create') }}" class="btn btn-success">@lang('common.create')</a>
        </div>
        <div class="col-12">
            {!! Form::open(['route' => ['employer-home.job.destroy', 0], 'method' => 'DELETE']) !!}
                <button type="submit"
                    class="btn btn-danger m-b-10" 
                    title="@lang('common.deletes_message', ['name' => __('job.job')])"
                    onclick="{{ "return confirm('".__('common.deletes_message',
                                    ['name' => __('job.job')])."')" }}">
                    <i class="fas fa-trash-alt"></i> @lang('common.deletes')
                </button>
                <div class="table-responsive">
                    <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                        <thead>
                            <tr>
                                <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                                <th>@lang('job.id')</th>
                                <th>@lang('job.name')</th>
                                <th>@lang('job.salary_id')</th>
                                <th>@lang('job.deadline')</th>
                                <th>@lang('common.detail')</th>
                                <th>@lang('common.delete')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                <td class="width-42">{{ Form::checkbox('ids[]', $job->id, null, ['class' => 'checkbox-delete']) }}</td>
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->salary->name }}</td>
                                <td>{{ $job->deadline }}</td>
                                <td class="text-center">
                                    <a href="{{ route('employer-home.job.edit', $job->id) }}" 
                                    class="fas fa-edit" 
                                    title="{{ __('common.show_detail', 
                                                ['name' => $job->name]) }}"></a>
                                </td>
                                <td class="text-center">
                                    {{ Form::button(null,
                                        [
                                            'name' => 'delete_id',
                                            'type' => 'submit',
                                            'value' => $job->id,
                                            'class' => 'fas fa-trash-alt text-danger text-danger-hover btn-to-link',
                                            'title' => __('common.delete_message', ['name' => __('job.job')]),
                                            'onclick' => "return confirm('".__('common.delete_message',
                                            [
                                                'table_name' => __('job.job'),
                                                'name' => $job->name])."')"
                                        ]) }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {!! Form::close() !!}
            <div class="m-t-10">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection