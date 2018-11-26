@extends('home.layouts.job_layout')
@section('content')
<div class="container">
    <div class="box_cnt">
        <div class="col-12 mb-3">
            <a href="{{ route('employeeHome.profile.create') }}" class="btn btn-success">@lang('common.create')</a>
        </div>
        <div class="col-12">
            {!! Form::open(['route' => ['employeeHome.profile-submitted.destroy', 0], 'method' => 'DELETE']) !!}
                <button type="submit"
                    class="btn btn-danger mb-3" 
                    title="@lang('common.deletes_message', ['name' => __('profile.profile')])"
                    onclick="{{ "return confirm('".__('common.deletes_message',
                                    ['name' => __('profile.profile')])."')" }}">
                    <i class="fas fa-trash-alt"></i> @lang('common.deletes')
                </button>
                <div class="table-responsive">
                    <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                        <thead>
                            <tr>
                                <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                                <th>@lang('profile_home.name')</th>
                                <th>@lang('job.name')</th>
                                <th>@lang('common.delete')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobProfiles as $profileName => $jobs)
                            @foreach($jobs as $job)
                            {{-- {{dd($job)}} --}}
                            <tr>
                                <td class="width-42">{{ Form::checkbox('ids[]', $job['id'], null, ['class' => 'checkbox-delete']) }}</td>
                                <td>{{ $profileName }}</td>
                                <td>{{ $job['name'] }}</td>
                                <td class="text-center">
                                    {{ Form::hidden('job_id', $job['id']) }}
                                    {{ Form::hidden('profile_name', $profileName) }}
                                    {{ Form::button(null,
                                        [
                                            'name' => 'delete_id',
                                            'type' => 'submit',
                                            'value' => $profileName,
                                            'class' => 'fas fa-trash-alt text-danger text-danger-hover btn-to-link',
                                            'title' => __('common.delete_message', ['name' => __('profile.profile')]),
                                            'onclick' => "return confirm('".__('common.delete_message',
                                            [
                                                'table_name' => __('profile.profile'),
                                                'name' => null,
                                            ])."')"
                                        ]) }}
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {!! Form::close() !!}
            <div class="mt-3">
                {{-- {{ $jobProfiles->links() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection