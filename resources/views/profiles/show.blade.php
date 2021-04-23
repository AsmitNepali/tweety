@extends('components.app')

@section('content')
   <header class="mb-6 relative">
       <div class="relative">
           <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">

           <img src="{{$user ->avatar}}" alt="avtar" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150" style="left: 50%;">
       </div>

       <div class="flex justify-between items-center mb-6">
           <div>
               <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
               <p class="text-sm">Joined {{$user->created_at}}</p>
           </div>
           <div class="flex">
               @if(current_user()->is($user))
                <a href="{{ $user->profile('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 mx-2 text-sm text-black text-xs"> Edit Profile </a>
               @endif
               @unless(current_user()->is($user))
                   <form method="POST" action="/profiles/{{ $user->name }}/follows">
                       @csrf
                       <button class="bg-blue-500 rounded-full shadow py-2 px-4 text-sm text-white text-xs"> {{(auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me')}} </button>
                   </form>
               @endunless
           </div>
       </div>
        <p class="text-sm">
            In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
        </p>

   </header>
    @include('_timeline',[
    'tweets' => $user->tweets
])
@endsection
