<div class="m-auto w-1/2 mb-4">
    <h3 class="text-lg text-gray-200 mb-3">Edit Article</h3>
    <form wire:submit="save">
        <div class="mb-3">
            <label for="article-title" class="block">Title</label>
            <input type="text" class="p-2 w-full border rounded-md bg-gray-700 text-white" wire:model="form.title">

            <div>
                @error('title')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="article-content" class="block">Content</label>
            <textarea id="article-content" class="p-2 w-full border rounded-md bg-gray-700 text-white" wire:model="form.content"></textarea>

            <div>
                @error('content')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="text-white font-medium rounded-md px-4 py-2 bg-blue-600">Save</button>
        </div>
    </form>
</div>
