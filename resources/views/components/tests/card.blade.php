@props(['title', 'message' => '初期値です。', 'content' => '初期値です。'])

<div class="w-1/4 p-2 border-2 shadow-md">
    <div>{{ $title }}</div>
    <div>画像</div>
    <div> {{ $content }} </div>
    <div> {{ $message }} </div>
</div>
