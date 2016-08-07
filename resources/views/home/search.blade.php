<ul class="list-group">
    @foreach($searchUsers as $user)

        <li class="list-group-item">Name :{{ $user->name }}</li>
        <li class="list-group-item">Id :{{ $user->email }}</li>


    @endforeach
</ul>