<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="/item">新規投稿はこちら</a>
            @foreach ($items as $item)
            <div class="mt-3 p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p>{{ $item->name }} {{ $item->price }}円</p>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>