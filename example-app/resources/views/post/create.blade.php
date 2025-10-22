<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
    </x-slot>

     <div>
        <form class="max-w-7xl mx-auto mt-4 px-6">
            <div class="flex flex-col">
                <label for="title">件名</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="w-full flex flex-col">
                <label for="body" class="mt-4">本文</label>
                <textarea name="body" id="body" rows="5" cols="30"></textarea>
            </div>
            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>

</x-app-layout>
