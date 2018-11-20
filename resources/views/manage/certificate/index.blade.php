@extends('manage.layout')
@section('title', __('certificate.title'))
@section('content')

<div class="col-12">
    {!! Form::open(['route' => ['certificate.destroy', 0], 'method' => 'DELETE']) !!}
        <button type="submit"
            class="btn btn-danger m-b-10" 
            title="@lang('common.deletes_message', ['name' => __('certificate.certificate')])"
            onclick="{{ "return confirm('".__('common.deletes_message',
                            ['name' => __('certificate.certificate')])."')" }}">
            <i class="fas fa-trash-alt"></i> @lang('common.deletes')
        </button>
        <div class="table-responsive">
            <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                <thead>
                    <tr>
                        <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                        <th>@lang('certificate.id')</th>
                        <th>@lang('certificate.profile_id')</th>
                        <th>@lang('certificate.graduate_id')</th>
                        <th>@lang('certificate.name')</th>
                        <th>@lang('common.detail')</th>
                        <th>@lang('common.delete')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($certificates as $certificate)
                    <tr>
                        <td class="width-42">{{ Form::checkbox('ids[]', $certificate->id, null, ['class' => 'checkbox-delete']) }}</td>
                        <td>{{ $certificate->id }}</td>
                        <td>{{ $certificate->profile->name }}</td>
                        <td>{{ $certificate->graduate->name }}</td>
                        <td>{{ $certificate->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('certificate.show', $certificate->id) }}" 
                            class="fas fa-edit" 
                            title="{{ __('common.show_detail', 
                                        ['name' => $certificate->name]) }}"></a>
                        </td>
                        <td class="text-center">
                            {{ Form::button(null,
                                [
                                    'name' => 'delete_id',
                                    'type' => 'submit',
                                    'value' => $certificate->id,
                                    'class' => 'fas fa-trash-alt text-danger text-danger-hover',
                                    'title' => __('common.delete_message', ['name' => __('certificate.certificate')]),
                                    'onclick' => "return confirm('".__('common.delete_message',
                                    [
                                        'table_name' => __('certificate.certificate'),
                                        'name' => $certificate->name])."')"
                                ]) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    {!! Form::close() !!}
    <div class="m-t-10">
        {{ $certificates->links() }}
    </div>
</div>
@endsection