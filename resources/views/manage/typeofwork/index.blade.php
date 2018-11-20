@extends('manage.layout')
@section('title', __('typeofwork.title'))
@section('content')
<div class="col-12 m-b-10">
    <a href="{{ route('typeofwork.create') }}" class="btn btn-success">@lang('common.create')</a>
</div>
<div class="col-12">
    {!! Form::open(['route' => ['typeofwork.destroy', 0], 'method' => 'DELETE']) !!}
        <button type="submit"
            class="btn btn-danger m-b-10" 
            title="@lang('common.deletes_message', ['name' => __('typeofwork.typeofwork')])"
            onclick="{{ "return confirm('".__('common.deletes_message',
                            ['name' => __('typeofwork.typeofwork')])."')" }}">
            <i class="fas fa-trash-alt"></i> @lang('common.deletes')
        </button>
        <div class="table-responsive">
            <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                <thead>
                    <tr>
                        <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                        <th>@lang('typeofwork.name')</th>
                        <th>@lang('common.edit')</th>
                        <th>@lang('common.delete')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($typeofworks as $typeofwork)
                    <tr>
                        <td class="width-42">{{ Form::checkbox('ids[]', $typeofwork->id, null, ['class' => 'checkbox-delete']) }}</td>
                        <td>{{ $typeofwork->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('typeofwork.edit', $typeofwork->id) }}" 
                            class="fas fa-edit" 
                            title="{{ __('common.edit_title', 
                                        ['name' => $typeofwork->name]) }}"></a>
                        </td>
                        <td class="text-center">
                            {{ Form::button(null,
                                [
                                    'name' => 'delete_id',
                                    'type' => 'submit',
                                    'value' => $typeofwork->id,
                                    'class' => 'fas fa-trash-alt text-danger text-danger-hover',
                                    'title' => __('common.delete_message', ['name' => __('typeofwork.typeofwork')]),
                                    'onclick' => "return confirm('".__('common.delete_message',
                                    [
                                        'table_name' => __('typeofwork.typeofwork'),
                                        'name' => $typeofwork->name
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
        {{ $typeofworks->links() }}
    </div>
</div>
@endsection