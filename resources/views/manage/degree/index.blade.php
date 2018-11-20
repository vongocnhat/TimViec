@extends('manage.layout')
@section('title', __('degree.title'))
@section('content')
<div class="col-12 m-b-10">
    <a href="{{ route('degree.create') }}" class="btn btn-success">@lang('common.create')</a>
</div>
<div class="col-12">
    {!! Form::open(['route' => ['degree.destroy', 0], 'method' => 'DELETE']) !!}
        <button type="submit"
            class="btn btn-danger m-b-10" 
            title="@lang('common.deletes_message', ['name' => __('degree.degree')])"
            onclick="{{ "return confirm('".__('common.deletes_message',
                            ['name' => __('degree.degree')])."')" }}">
            <i class="fas fa-trash-alt"></i> @lang('common.deletes')
        </button>
        <div class="table-responsive">
            <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                <thead>
                    <tr>
                        <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                        <th>@lang('degree.name')</th>
                        <th>@lang('common.edit')</th>
                        <th>@lang('common.delete')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($degrees as $degree)
                    <tr>
                        <td class="width-42">{{ Form::checkbox('ids[]', $degree->id, null, ['class' => 'checkbox-delete']) }}</td>
                        <td>{{ $degree->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('degree.edit', $degree->id) }}" 
                            class="fas fa-edit" 
                            title="{{ __('common.edit_title', 
                                        ['name' => $degree->name]) }}"></a>
                        </td>
                        <td class="text-center">
                            {{ Form::button(null,
                                [
                                    'name' => 'delete_id',
                                    'type' => 'submit',
                                    'value' => $degree->id,
                                    'class' => 'fas fa-trash-alt text-danger text-danger-hover',
                                    'title' => __('common.delete_message', ['name' => __('degree.degree')]),
                                    'onclick' => "return confirm('".__('common.delete_message',
                                    [
                                        'table_name' => __('degree.degree'),
                                        'name' => $degree->name
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
        {{ $degrees->links() }}
    </div>
</div>
@endsection