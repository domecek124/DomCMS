<li class="item">
    <div class="product-info">
        <a href="javascript:void(0)" class="product-title">
            {{ $activity->user->name  }}
            <span class="badge badge-warning float-right">
                {{ $activity->created_at->diffForHumans() }}
            </span>
        </a>
        <span class="product-description">
            {!! $activity->message !!}
        </span>
    </div>
</li>
