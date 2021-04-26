@extends('components.app')

@section('content')
    <div>
        @foreach($users as $user)
            <a href="{{ $user->profile() }}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}"
                     alt="{{ $user->username }}'s avatar"
                     width="60"
                     class="mr-4 rounded"
                >
            </a>
            <div>
                <h4 class="font-bold">{{ '@'.$user->username }}</h4>
            </div>

        @endforeach
        {{ $users->links() }}
    </div>
@endsection
