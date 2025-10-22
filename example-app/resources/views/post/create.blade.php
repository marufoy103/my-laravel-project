<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
    </x-slot>

     <div>
        <form>
            <div>
                <label for="title">件名</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="body">本文</label>
                <textarea name="body" id="body" rows="5" cols="30"></textarea>
            </div>
            <x-primary-button>
                送信する
            </x-primary-button>
        </form>
    </div>

</x-app-layout>
