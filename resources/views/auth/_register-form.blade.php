
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-success">
                  <label for="name" class="col-md-4 control-label"><h4>Name :</h4></label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-success">
                  <label for="email" class="col-md-4 control-label"><h4>E-Mail Address :</h4></label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-success">
                  <label for="password" class="col-md-4 control-label"><h4>Password :</h4></label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password" required>

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group has-success">
                  <label for="password-confirm" class="col-md-4 control-label"><h4>Confirm Password :</h4></label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-success btn-md">
                          Register
                      </button>
                  </div>
              </div>
          </form>
