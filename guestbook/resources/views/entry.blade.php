<div class="card mb-3">
    <div class="card-body">
        <p class="card-title">{{$entry->subtitle}}</p>
        <p class="card-subtitle mb-2 text-muted">{{$entry->username}} am {{$entry->created_at->format('d.m.Y H:i')}}</p>
        <p class="card-text">{{$entry->body}}</p>
    </div>
</div>