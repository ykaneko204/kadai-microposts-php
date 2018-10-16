@if (Auth::user()->is_liking($micropost->id))
    {!! Form::open(['route' => ['user.likeoff', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.likeon', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-default btn-xs"]) !!}
    {!! Form::close() !!}
@endif