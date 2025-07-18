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

        .view-btn {
            background-color: white;
            color: #1f6534;
            cursor: pointer;
            padding: 8px 18px;
            border-radius: 10px;
            border: 2px solid #1f6534;
            font-weight: bold;
            transition: 0.3s;
        }

    </style>

    <div style="background-color: white; max-width: 800px; margin: 30px auto; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">

        <div style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; padding: 30px 20px;">

            <div style="margin-bottom: 20px;">
                <h1 style="font-size: 30px; font-weight: bold; color: #1f2937;">Blog Post Submission Form</h1>
                <p style="color: #4b5563; margin-top: 5px;">Tell us what your blog is about.</p>
            </div>

            <form action="{{ URL('upload_post') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom: 20px;">
                    <label for="description" style="display: block; font-weight: bold; margin-bottom: 5px;">Description</label>
                    <textarea id="description" name="description" rows="4" placeholder="Add Description" required
                        style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="image" style="display: block; font-weight: bold; margin-bottom: 5px;">Upload Image</label>
                    <input type="file" name="image" id="image"
                        style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div style="text-align: start;">
                    <button type="submit" class="submit-btn">
                        Submit Post
                    </button>
                </div>
            </form>

            <form action="{{ url('view_post') }}" method="get" style="margin-top: 20px;">
                @csrf
                <div style="text-align: start;">
                    <input type="submit" value="  View Post  " class="view-btn">
                </div>
            </form>

        </div>

    </div>

</x-app-layout>
