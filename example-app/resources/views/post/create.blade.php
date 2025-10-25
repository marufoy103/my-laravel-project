<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
    </x-slot>

     <div>
        @if(session('message'))
            <div class="max-w-7xl mx-auto mt-4 px-6">
                {{session('message')}}
            </div>
        @endif
        <form class="max-w-7xl mx-auto mt-4 px-6" method="post" action="{{route('post.store')}}">
            @csrf
            <div class="flex flex-col">
                <label for="title" class="font-semibold mt-4">件名</label>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                <input type="text" name="title" id="title" class="w-auto py-2 border-2 border-gray-300 rounded-md"
                value="{{old('title')}}">
            </div>
            <div class="w-full flex flex-col">
                <label for="body" class="mt-4 font-semibold">本文</label>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                <textarea name="body" id="body" rows="5" cols="30" class="w-auto py-2 border-2 border-gray-300 rounded-md">
                {{old('body')}}
                </textarea>
            </div>
            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>

</x-app-layout>
