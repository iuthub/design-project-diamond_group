<div class="jumbotron">
  @foreach($templates as $template)
    <a href="/templates/{{$template}}"><h3>{{$template}}</h3></a>
  @endforeach
</div>
