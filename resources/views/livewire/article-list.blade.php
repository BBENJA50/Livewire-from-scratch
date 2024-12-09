<div class="m-auto w-1/2 mb-4">
    <table>
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr wire:key="{{ $article->id }}"
                    class="border-b bg-gray-800 border-gray-700 text-gray-400 hover:bg-gray-700">
                    <td class="px-6 py-3 ">
                        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button class="text-gray-200 p-2 bg-red-700 hover:bg-red-900 rounded-sm"
                            wire:click="delete({{ $article->id }})" wire:confirm="Are you sure?">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
