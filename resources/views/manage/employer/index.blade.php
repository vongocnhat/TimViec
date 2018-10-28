@extends('manage.layout')
@section('title', __('employer.title'))
@section('content')
<div class="col-12">
    <div class="table-responsive m-b-30">
        {!! Form::open(['route' => ['employer.destroy', 0], 'method' => 'DELETE']) !!}
            {!! Form::button(__('common.deletes'), 
                [
                    'type' => 'submit',
                    'class' => 'fas fa-trash-alt btn btn-danger',
                    'title' => __('common.deletes_message', ['name' => __('employer.employer')]),
                    'onclick' => "return confirm('".__('common.deletes_message',
                                ['name' => __('employer.employer')])."')"
                ]
            ) !!}
            <table id="multipeCheckbox" class="table table-striped table-earning table-bordered">
                <thead>
                    <tr>
                        <th class="width-42">{{ Form::checkbox(null, null, null, ['class' => 'parent-checkbox-delete']) }}</th>
                        <th>date</th>
                        <th>item ID</th>
                        <th>name</th>
                        <th class="text-right">price</th>
                        <th class="text-right">quantity</th>
                        <th class="text-right">total</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employers as $employer)
                    <tr>
                        <td class="width-42">{{ Form::checkbox('ids[]', $employer->id, null, ['class' => 'checkbox-delete']) }}</td>
                        <td>2018-09-29 05:57</td>
                        <td>100398</td>
                        <td>iPhone X 64Gb Grey</td>
                        <td class="text-right">$999.00</td>
                        <td class="text-right">1</td>
                        <td class="text-right">$999.00</td>
                        <td class="text-center">
                            <a href="{{ route('employer.edit', $employer->id) }}" 
                            class="fas fa-edit" 
                            title="{{ __('common.edit_title', 
                                        ['name' => $employer->first_name . ' ' . $employer->last_name]) }}"></a>
                        </td>
                        <td class="text-center">
                            {!! Form::button(null,
                                [
                                    'name' => 'delete_id',
                                    'type' => 'submit',
                                    'value' => $employer->id,
                                    'class' => 'fas fa-trash-alt text-danger text-danger-hover',
                                    'title' => __('common.delete_message', ['name' => __('employer.employer')]),
                                    'onclick' => "return confirm('".__('common.delete_message',
                                    [
                                        'table_name' => __('employer.employer'),
                                        'name' => $employer->first_name . ' ' . $employer->last_name
                                    ])."')"
                                ]) !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        {!! Form::close() !!}
    </div>
</div>
@endsection