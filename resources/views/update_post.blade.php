<x-app-layout>

    <style>
        .submit-btn {
            background-color: #1f6534;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #174c27;
        }

        .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input, .form-textarea, .form-file {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .image-preview {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 10px;
        }

    </style>

    <div style="background-color: white; max-width: 800px; margin: 30px auto; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">

        <div style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; padding: 30px 20px;">

            <div style="margin-bottom: 20px;">
                <h1 style="font-size: 30px; font-weight: bold; color: #1f2937;">Update Blog Post</h1>
                <p style="color: #4b5563; margin-top: 5px;">Edit your blog description or update the image.</p>
            </div>

            <form action="{{ url('confirm_update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom: 20px;">
                    <label for="description" class="form-label">Post Description</label>
                    <input type="text" name="description" id="description" class="form-input" value="{{ $data->description }}" required>
                </div>

                <div style="margin-bottom: 20px;">
                    <label class="form-label">Current Image</label>
                    <img src="/post/{{ $data->image }}" alt="Current Image" class="image-preview">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="image" class="form-label">Change Image</label>
                    <input type="file" name="image" id="image" class="form-file">
                </div>

                <div style="text-align: start;">
                    <button type="submit" class="submit-btn">Update Post</button>
                </div>

            </form>

        </div>
    </div>

</x-app-layout>
