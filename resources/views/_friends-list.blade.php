<h3 class="font-bold text-xl mb-4">
    Following
</h3>
<ul>
    @forelse (auth()->user()->follows    as $user)
        <li class="mb-4">
            <a href="{{$user->profile()}}" class="flex items-center text-sm">
                <img src="{{$user->avatar}}" alt="Avtar" class="rounded-full mr-2" width="40" height="40">
                {{$user->name}}
            </a>
        </li>
    @empty
        <p class="p-4"> No Friends Yet. </p>
    @endforelse
</ul>
