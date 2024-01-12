<x-app-layout>
    <x-slot name="header">
        
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold">List of Posts</h1>
            <x-button><a href="">Add new Post</a></x-button>
        </div>
    </x-slot>
    <div class="mx-5 mt-3">
        <table class="w-full border border-gray-800 text-center text-sm rtl:text-right">
            <thead class="bg-gray-50 text-base uppercase text-gray-700 dark:bg-gray-700 dark:text-white">
                <tr class="px-6 py-3">
                    <th scope="">id</th>
                    <th class="border-x">title</th>
                    <th class="border-x">content</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody class="border-b border-gray-200 font-semibold dark:border-gray-700">
                @foreach ($posts as $post)
                    <tr class="border-b border-black">
                        <td class="px-4">{{ $post->id }}</td>
                        <td class="border-x py-3">{{ $post->title }}</td>
                        <td class="border-x">{{ $post->content }}</td>
                        <td>
                            <div class="flex gap-1 px-2">

                                <x-button><a href="{{route('posts.show', $post)}}">Show</a></x-button>
                                <x-button color="danger"><a href="">Edit</a></x-button>
                                <x-button color="warn"><a href="">Delete</a></x-button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
