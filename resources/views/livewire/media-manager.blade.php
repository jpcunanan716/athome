<div>
    <h1>Media Manager</h1>

    <!-- Dropzone for uploading multiple images -->
    <form wire:submit.prevent="save">
        <div 
            style="border: 2px dashed #ccc; padding: 20px; text-align: center; cursor: pointer;"
            ondragover="event.preventDefault()" 
            ondrop="handleDrop(event)"
            onclick="document.getElementById('images').click()"
        >
            <p>Drag & Drop images here or click to select</p>
            <input type="file" id="images" wire:model="images" multiple style="display: none;">
        </div>
        @error('images.*') <span class="error">{{ $message }}</span> @enderror

        <!-- Image Preview -->
        <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;">
            @foreach($imagesPreview as $preview)
                <img src="{{ $preview }}" alt="Preview" style="max-width: 100px; max-height: 100px; object-fit: cover;">
            @endforeach
        </div>

        <button type="submit">Upload</button>
    </form>

    <!-- List of media entries -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mediaList as $media)
                <tr>
                    <td>{{ $media->id }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $media->image_path) }}" alt="Image" style="max-width: 100px;">
                    </td>
                    <td>
                        <button wire:click="delete({{ $media->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function handleDrop(event) {
        event.preventDefault();
        let files = event.dataTransfer.files;
        document.getElementById('images').files = files;
        @this.uploadMultiple('images', files);
    }
</script>
