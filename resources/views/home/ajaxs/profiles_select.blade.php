{!! Form::open(['route' => 'jobDetail.storeSendProfileToEmployer', 'method' => 'POST']) !!}
    {{ Form::hidden('job_id', $job_id) }}
    <div class="d-inline-flex">
        {{ Form::select('profile_id', $profiles, null, ['class' => 'form-control rounded-0', 'placeholder' => __('job_detail.profile_select')]) }}
        {{ Form::submit(__('common.select'), ['class' => 'btn btn-success rounded-0']) }}
    </div>
{!! Form::close() !!}