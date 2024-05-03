<div class="pagetitle">
  <h1>{{$pageTitle}}</h1>
  <nav>
    <ol class="breadcrumb">
      @foreach($breadcrumb as $key=>$value)
      <li class="breadcrumb-item"><a href="{{$value}}">{{$key}}</a></li>
      @endforeach
      <li class="breadcrumb-item active">{{$pageTitle}}</li>
    </ol>
  </nav>
</div><!-- End Page Title -->