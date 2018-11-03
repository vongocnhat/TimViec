@if (count($jobs) > 0)
@foreach($jobs as $job)
<li class="list_items">
    <div class="favorite">
        <a class="item_favorite" href="#"></a>
    </div>
    <div class="item_ttl_man">
    <a class="items_name" href="{{ route('jobDetail.show', $job->id) }}">{{ $job->name }}</a>
        <a class="items_cty" href="">{{ $job->employer->company_name }}</a>
    </div>
    <div class="item_value">
        <p class="items_price">{{ $job->salary->name }}</p>
        <p class="items_place">{{ $job->employer->province->name }}</p>
        <p class="items_day">{{ $job->deadline }}</p>
    </div>
</li>
@endforeach
@else
<span class="text-danger">@lang('job_list.not_found')</span>
@endif