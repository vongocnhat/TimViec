@extends('manage.layout')
@section('title', __('career.title'))
@section('content')
<div class="col-12 m-b-10">
    <a href="{{ route('career.create') }}" class="btn btn-success">@lang('common.create')</a>
</div>
<div class="col-12">
    {!! Form::open(['route' => ['career.destroy', 0], 'method' => 'DELETE']) !!}
        <button type="submit"
            class="btn btn-danger m-b-10" 
            title="@lang('common.deletes_message', ['name' => __('career.career')])"
            onclick="{{ "return confirm('".__('common.deletes_message',
                            ['name' => __('career.career')])."')" }}">
            <i class="fas fa-trash-alt"></i> @lang('common.deletes')
        </button>
        <div class="table-responsive">
            <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                <thead>
                    <tr>
                        <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                        <th>@lang('career.name')</th>
                        <th>@lang('common.edit')</th>
                        <th>@lang('common.delete')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($careers as $career)
                    <tr>
                        <td class="width-42">{{ Form::checkbox('ids[]', $career->id, null, ['class' => 'checkbox-delete']) }}</td>
                        <td>{{ $career->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('career.edit', $career->id) }}" 
                            class="fas fa-edit" 
                            title="{{ __('common.edit_title', 
                                        ['name' => $career->name]) }}"></a>
                        </td>
                        <td class="text-center">
                            {{ Form::button(null,
                                [
                                    'name' => 'delete_id',
                                    'type' => 'submit',
                                    'value' => $career->id,
                                    'class' => 'fas fa-trash-alt text-danger text-danger-hover',
                                    'title' => __('common.delete_message', ['name' => __('career.career')]),
                                    'onclick' => "return confirm('".__('common.delete_message',
                                    [
                                        'table_name' => __('career.career'),
                                        'name' => $career->name
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
        {{ $careers->links() }}
    </div>
</div>
@endsection