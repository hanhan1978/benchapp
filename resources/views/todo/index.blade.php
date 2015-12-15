
<ul>
@foreach($todos as $todo)
<li>{{ $todo->content }}</li>
@endforeach
</ul>
