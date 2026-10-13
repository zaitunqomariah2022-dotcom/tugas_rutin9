<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>

    <h1>Edit Post</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Judul:</label><br>
            <input type="text" name="title"
                   value="{{ old('title', $post->title) }}">
        </p>

        <p>
            <label>Penulis:</label><br>
            <input type="text" name="author"
                   value="{{ old('author', $post->author) }}">
        </p>

        <p>
            <label>Isi:</label><br>
            <textarea name="content" rows="8" cols="50">{{ old('content', $post->content) }}</textarea>
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('posts.index') }}">Kembali</a>
    </form>

</body>
</html>