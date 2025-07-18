<x-app-layout>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .post-card {
            background-color: white;
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .post-username {
            font-size: 18px;
            font-weight: bold;
            color: #1f2937;
        }

        .post-description {
            font-size: 16px;
            color: #333;
            margin-top: 10px;
        }

        .post-image {
            width: 100%;
            height: auto;
            margin-top: 15px;
            border-radius: 5px;
        }
    </style>

    @foreach($post as $post)
        <div class="post-card">
            <label class="post-username">{{ $post->username }}</label>
            <p class="post-description">{{ $post->description }}</p>
            <img src="{{ asset('post/' . $post->image) }}" alt="Post Image" class="post-image">
        </div>
    @endforeach
</x-app-layout>
