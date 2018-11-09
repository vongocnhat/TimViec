{!! Form::open(['route' => 'jobDetail.storeSendProfileToEmployer', 'method' => 'POST', 'id'=>'frmStoreSendProfileToEmployer']) !!}
    {{ Form::hidden('jobID', $jobID) }}
    <div class="d-inline-flex">
        {{ Form::select('profile_id', $profilesById, null, ['class' => 'form-control rounded-0', 'placeholder' => __('job_detail.profile_select'), 'required']) }}
        {{ Form::submit(__('common.select'), ['class' => 'btn btn-success rounded-0']) }}
    </div>
{!! Form::close() !!}