@foreach($posts as $post)
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $post->title }}</h3>
        </div>
        <div class="card-body">
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endforeach
