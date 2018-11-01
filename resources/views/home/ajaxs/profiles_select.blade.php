{!! Form::open() !!}
    {{ Form::hidden('job_id') }}
    {{ Form::select('profile_id', $profiles, null, ['class' => 'select_input', 'placeholder' => __('job_list.profile_select')]) }}
    {{ Form::submit(__('common.select'), ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}