<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">Home</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Explore</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Notification</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Message</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Bookmarks</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ auth()->user()->profile() }}">Profile</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Lists</a>
    </li>
</ul>
