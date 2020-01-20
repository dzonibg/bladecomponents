<div class="col-md-{{ $size ?? '12' }}">
<div class="card bg-{{ $type }}">
    @if(isset($title))
    <div class="card-header">{{ $title ?? '' }}</div>
    @endif
    <div class="card-body">
        {{$slot ?? ''}}
    </div>

</div>
</div>
