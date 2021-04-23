<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{$tweet->user->profile()}}">
            <img src="{{auth()->user()->avatar}}" alt="avtar" class="rounded-full mr-2" width="50" height="50">
        </a>
    </div>
    <div>
        <a href="{{ $tweet->user->profile() }}">
            <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        </a>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>
