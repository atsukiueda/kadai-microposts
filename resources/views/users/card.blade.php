<div class="card">
    <div class="crad-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="crad-body">
        <img class="media-object rounded img-fluid" src="{{ Gravatar::src($user->emial, 500) }}" alt="">
    </div>
</div>
@include('user_follow.follow_button', ['user' => $user])