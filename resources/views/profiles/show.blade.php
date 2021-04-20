@extends('layouts.app')

@section('content')
   <header class="mb-6 relative">
       <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">

       <div class="flex justify-between items-center mb-6">
           <div>
               <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
               <p class="text-sm">Joined {{$user->created_at->diffForHumans() }}</p>
           </div>
           <div>
               <a href="" class="rounded-full border border-gray-300 py-2 px-4 mx-2 text-sm text-black text-xs"> Edit Profile </a>
               <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-sm text-white text-xs"> Fllow Me </a>
           </div>
       </div>
        <p class="text-sm">
            In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
        </p>
       <img src="{{$user ->avatar}}" alt="avtar" class="rounded-full mr-2 absolute" style="width: 150px; left: calc(50% - 75px); top: 138px;">
   </header>
    @include('_timeline',[
    'tweets' => $user->tweets
])
@endsection