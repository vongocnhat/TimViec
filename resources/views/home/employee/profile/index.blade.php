@extends('home.layouts.job_layout')
@section('content')
<div class="container">
    <div class="box_cnt">
        <div class="col-12 mb-3">
            <a href="{{ route('employeeHome.profile.create') }}" class="btn btn-success">@lang('common.create')</a>
        </div>
        <div class="col-12">
            {!! Form::open(['route' => ['employeeHome.profile.destroy', 0], 'method' => 'DELETE']) !!}
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
                                <th>@lang('profile_home.career_id')</th>
                                <th>@lang('profile_home.degree_id')</th>
                                <th>@lang('profile_home.type_of_work_id')</th>
                                <th>@lang('profile_home.desired_job')</th>
                                <th>@lang('profile_home.desire_minimum_wage')</th>
                                <th>@lang('profile_home.career_goals')</th>
                                <th>@lang('profile_home.school')</th>
                                <th>@lang('profile_home.type_of_school')</th>
                                <th>@lang('profile_home.start_at')</th>
                                <th>@lang('profile_home.ended_at')</th>
                                <th>@lang('profile_home.major')</th>
                                <th>@lang('profile_home.graduation_type')</th>
                                <th>@lang('profile_home.word')</th>
                                <th>@lang('profile_home.excel')</th>
                                <th>@lang('profile_home.power_point')</th>
                                <th>@lang('profile_home.profile_img')</th>
                                <th>@lang('profile_home.public')</th>
                                <th>@lang('profile_home.receive_email')</th>
                                <th>@lang('common.edit')</th>
                                <th>@lang('common.delete')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profiles as $profile)
                            <tr>
                                <td class="width-42">{{ Form::checkbox('ids[]', $profile->id, null, ['class' => 'checkbox-delete']) }}</td>
                                <td>{{ $profile->name }}</td>
                                <td>{{ $profile->career->name }}</td>
                                <td>{{ $profile->degree->name }}</td>
                                <td>{{ $profile->typeOfWork->name }}</td>
                                <td>{{ $profile->desired_job }}</td>
                                <td>{{ $profile->desire_minimum_wage }}</td>
                                <td>{{ $profile->career_goals }}</td>
                                <td>{{ $profile->school }}</td>
                                <td>{{ $profile->type_of_school }}</td>
                                <td>{{ $profile->start_at }}</td>
                                <td>{{ $profile->ended_at }}</td>
                                <td>{{ $profile->major }}</td>
                                <td>{{ $profile->graduation_type }}</td>
                                <td>{{ $profile->word }}</td>
                                <td>{{ $profile->excel }}</td>
                                <td>{{ $profile->power_point }}</td>
                                <td>{{ $profile->profile_img }}</td>
                                <td>{{ $profile->public }}</td>
                                <td>{{ $profile->receive_email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('employeeHome.profile.edit', $profile->id) }}" 
                                    class="fas fa-edit" 
                                    title="{{ __('common.edit_title', 
                                                ['name' => $profile->first_name . ' ' . $profile->last_name]) }}"></a>
                                </td>
                                <td class="text-center">
                                    {{ Form::button(null,
                                        [
                                            'name' => 'delete_id',
                                            'type' => 'submit',
                                            'value' => $profile->id,
                                            'class' => 'fas fa-trash-alt text-danger text-danger-hover btn-to-link',
                                            'title' => __('common.delete_message', ['name' => __('profile.profile')]),
                                            'onclick' => "return confirm('".__('common.delete_message',
                                            [
                                                'table_name' => __('profile.profile'),
                                                'name' => $profile->first_name . ' ' . $profile->last_name
                                            ])."')"
                                        ]) }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {!! Form::close() !!}
            <div class="mt-3">
                {{ $profiles->links() }}
            </div>
        </div>
    </div>
</div>
@endsection