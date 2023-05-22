<tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->author->name }}</td>
    <td>
        @foreach ($post->categories as $category)
            {{ $category->name }}
        @endforeach
    </td>
    <td>
        @foreach ($post->tags as $tag)
            {{ $tag->name }}
        @endforeach
    </td>
    <td>{{ $post->created_at->format('M d, Y') }}</td>
    <td>
        <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-sm btn-success">View</a>
        <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </td>
</tr>
