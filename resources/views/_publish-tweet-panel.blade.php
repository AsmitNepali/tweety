<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="post">
        @csrf

        <textarea name="body" id="" class="w-full" placeholder="What's up doc?"></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img src="{{auth()->user()->avatar}}" alt="avtar" class="rounded-full mr-2" width="50" height="50">
            <button type="submit" class="bg-blue-500 rounded-lg shadow px-2 py-2 text-white ">Tweet-a-roo</button>
        </footer>
    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>
