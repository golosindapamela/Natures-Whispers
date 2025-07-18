<x-app-layout>
    <style>
        * {
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 3px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #1f6534;
            color: white;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .btn {
            background-color: #1f6534;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: 0.3s;
        }

        .table-wrapper {
            width: 90%;
            margin: 30px auto;
            overflow-x: auto;
        }
    </style>

    <div class="table-wrapper" style="font-family: Helvetica, Arial, sans-serif;">
        <table>
            <tr>
                <th>Post Description</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            @foreach($post as $post)
            <tr>
                <td>{{ $post->description }}</td>
                <td>
                    <img src="post/{{ $post->image }}" alt="Post Image">
                </td>
                <td>
                    <a href="{{ url('update_post', $post->id) }}" class="btn">Update</a>
                </td>
                <td>
                    <a onclick="return confirm('Are you sure you want to delete this?');"
                       href="{{ url('delete_post', $post->id) }}" class="btn">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
