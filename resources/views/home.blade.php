@foreach (Auth::user()->roles as $key => $navrole)
@if ($navrole->name == "User")
  @include('kopin.del-user')
@else
  {{-- Home Page Style --}}

  {{-- @include('about._home1') --}}
  @include('about._home2')
@endif
@endforeach
