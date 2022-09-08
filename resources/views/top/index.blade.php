<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            トップページ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">バックエンド課題</h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3">A</h2>
            <p>curl -X POST -H "Content-Type: application/json" -d '{"name":"apple", "price":"100"}' localhost/api/item</p>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3">B</h2>
            <div class="mt-3"><a href="/register">新規登録はこちら</a></div>
            <div class="mt-3"><a href="/login">ログインはこちら</a></div>
            <div class="mt-3"><a href="/items">投稿一覧はこちら</a></div>
            <div class="mt-3"><a href="/item">新規投稿はこちら</a></div>
        </div>
    </div>
</x-app-layout>