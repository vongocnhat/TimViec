@extends('manage.layout')
@section('title', __('profile.title'))
@section('content')

<div class="col-12">
    {!! Form::open(['route' => ['profile.destroy', 0], 'method' => 'DELETE']) !!}
        <button type="submit"
            class="btn btn-danger m-b-10" 
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
                        <th>@lang('profile.id')</th>
                        <th>@lang('profile.employee_id')</th>
                        <th>@lang('profile.name')</th>
                        <th>@lang('profile.career_id')</th>
                        <th>@lang('common.detail')</th>
                        <th>@lang('common.delete')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profiles as $profile)
                    <tr>
                        <td class="width-42">{{ Form::checkbox('ids[]', $profile->id, null, ['class' => 'checkbox-delete']) }}</td>
                        <td>{{ $profile->id }}</td>
                        <td>{{ $profile->employee->name }}</td>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->career->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('profile.show', $profile->id) }}" 
                            class="fas fa-edit" 
                            title="{{ __('common.show_detail', 
                                        ['name' => $profile->name]) }}"></a>
                        </td>
                        <td class="text-center">
                            {{ Form::button(null,
                                [
                                    'name' => 'delete_id',
                                    'type' => 'submit',
                                    'value' => $profile->id,
                                    'class' => 'fas fa-trash-alt text-danger text-danger-hover',
                                    'title' => __('common.delete_message', ['name' => __('profile.profile')]),
                                    'onclick' => "return confirm('".__('common.delete_message',
                                    [
                                        'table_name' => __('profile.profile'),
                                        'name' => $profile->name])."')"
                                ]) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    {!! Form::close() !!}
    <div class="m-t-10">
        {{ $profiles->links() }}
    </div>
</div>
@endsection