@extends('layouts/main')

@section('container')
  <h1 class="mb-5">Post Authors</h1>

  <div class="container">
    <div class="row">
      @foreach ($authors as $author)
        <div class="col-md-4">
          <a href="/posts?author={{ $author->username }}" class="text-decoration-none">
            <div class="row shadow p-2 mb-5 bg-body rounded ms-1 me-1 p-2">
              <div class="col-md-4">
                <img src="/img/personal.jpg" class="rounded-circle" alt="..." width="75" height="75">
              </div>
              <div class="col-md-8 my-auto">
                <span class="badge bg-secondary text-uppercase">{{ $author->name }}</span>
                <p class="text-muted">&commat;{{ $author->username }}</p>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection