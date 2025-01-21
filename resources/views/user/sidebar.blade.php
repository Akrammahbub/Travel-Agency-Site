<ul class="list-group list-group-flush">
    <li class="list-group-item active {{Request::is('user_dashboard') ? 'active' : ''}}">
        <a href="{{route('user_dashboard')}}">Dashboard</a>
    </li>
    <li class="list-group-item">
        <a href="">Booking</a>
    </li>
    <li class="list-group-item">
        <a href="user-wishlist.html">Wishlist</a>
    </li>
    <li class="list-group-item">
        <a href="user-message.html">Message</a>
    </li>
    <li class="list-group-item">
        <a href="user-review.html">Reviews</a>
    </li>
    <li class="list-group-item {{Request::is('user_profile') ? 'active' : ''}}">
        <a href="{{route('user_profile')}}">Edit Profile</a>
    </li>
    <li class="list-group-item">
        <a href="{{route('logout')}}">Logout</a>
    </li>
</ul>