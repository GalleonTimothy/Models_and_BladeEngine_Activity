@include('partials.header')

<div class="flex justify-center mt-8">
    <table class="border-collapse border border-gray-400">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ISBN</th>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Author</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr class="border border-gray-400">
                <td class="px-4 py-2">{{ $book->isbn }}</td>
                <td class="px-4 py-2">{{ $book->title }}</td>
                <td class="px-4 py-2">{{ $book->author }}</td>
                <td class="px-4 py-2">{{ $book->description }}</td>
                <td class="px-4 py-2">{{ $book->date_published }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials.footer')
