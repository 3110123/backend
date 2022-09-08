<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      投稿
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      @if ($errors->any())
      <div class="alert alert-danger mt-3">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      {{Form::open(['url' => '/item', 'files' => true])}}
      <div>
        {{ Form::text('name', null, ['placeholder'=>'名前を入力']) }}
      </div>
      <div class="mt-3">
        {{ Form::text('price', null, ['placeholder'=>'値段を入力']) }} 円
      </div>
      <div class="mt-3">
        {{ Form::submit('送信', ['class' => 'inline-flex items-center px-4 py-2 bg-gray-800 text-white']) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</x-app-layout>