<div class="card-content">
  <div class="col-md-offset-1">
    <div class="row">
      <div class="col-md-1">
        <img src="/uploads/user_images/{{ $user->avatar }}" alt="" style="width:50px; height:50px; border-radius:50%"/>
      </div>
      <div class="col-md-6">
        User Name :  {{ $user->name }}<br>
        Email : {{ $user->email }}<input type="hidden" name="email" value="{{$user->email}}">
      </div>
    </div>
    <hr>
    <strong>User</strong>
    <div class="row" style="margin:10px 0 5px;">
          <div class="togglebutton">
          	<label>
              	<input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user">
          	</label> :
            <label><strong>User</strong></label>
          </div>
          <div class="togglebutton">
            <label>
              <input type="checkbox" {{ $user->hasRole('User Manager') ? 'checked' : '' }} name="role_user_manager">
            </label> :
            <label><strong>Manager</strong></label>
          </div>
    </div>
    <hr>
    <strong>Personal</strong>
    <div class="row" style="margin:10px 0 5px;">
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Personal Read') ? 'checked' : '' }} name="role_personal_r">
          </label> :
          <label><strong>Read</strong></label>
        </div>
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Personal Write') ? 'checked' : '' }} name="role_personal_w">
          </label> :
          <label><strong>Write</strong></label>
        </div>
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Personal Manager') ? 'checked' : '' }} name="role_personal_m">
          </label> :
          <label><strong>Manager</strong></label>
        </div>
    </div>

    @foreach (Auth::user()->roles as $key => $navrole)
      @if ($navrole->name == "Administrator")
        <hr>
        <strong>Administrator</strong>
        <div class="row" style="margin:10px 0 5px;">
            <div class="togglebutton">
              <label>
                  <input type="checkbox" {{ $user->hasRole('Administrator') ? 'checked' : '' }} name="role_admin">
              </label> :
              <label><strong>Administrator</strong></label>
            </div>
        </div>
      @endif
    @endforeach


  </div>
</div>
<div class="card-footer">
  {{ csrf_field() }}
  <div class="col-md-offset-1 col-md-2">
    {!! Form::submit('Assign Role', ['class' => 'btn btn-success btn-sm']) !!}
  </div>
</div>
