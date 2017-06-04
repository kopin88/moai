
  <button type="button" rel="tooltip" title="စာရင်းဖွင့်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#monthModel">
    {{-- <i class="material-icons text-primary">add_circle</i> --}}
    <i class="fa fa-plus-circle text-primary" aria-hidden="true"></i>
  </button>
{!! Form::open(['method' => 'POST', 'route' => ['months.store', $financial_year->id], 'class' => 'form-horizontal']) !!}

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="modal fade" id="monthModel" tabindex="-1" role="dialog" aria-labelledby="monthModel">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-primary">
      <div class="card-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="monthModel">ငွေစာရင်း အသစ်ထည့်မည်</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
                {!! Form::select('name', ['ဇန်နဝါရီ'=>'ဇန်နဝါရီ', 'ဖေဖော်ဝါရီ'=>'ဖေဖော်ဝါရီ', 'မတ်'=>'မတ်', 'ဧပြီ'=>'ဧပြီ', 'မေ'=>'မေ', 'ဇွန်'=>'ဇွန်', 'ဇူလိုင်'=>'ဇူလိုင်', 'သြဂုတ်'=>'သြဂုတ်', 'စက်တင်ဘာ'=>'စက်တင်ဘာ', 'အောက်တိုဘာလ'=>'အောက်တိုဘာလ', 'နိုဝင်ဘာ'=>'နိုဝင်ဘာ', 'ဒီဇင်ဘာ'=>'ဒီဇင်ဘာ' ], null, ['class'=>'form-control', 'placeholder' => '-- လ ရွေးရန် -- ', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('name') }}</small>
              </div>
              {{-- {!! Form::select('name', ['January'=>'January', 'February'=>'February', 'March'=>'March', 'April'=>'April', 'May'=>'May', 'June'=>'June', 'July'=>'July', 'August'=>'August', 'September'=>'September', 'October'=>'October', 'November'=>'November', 'December'=>'December' ], null, ['class'=>'form-control', 'placeholder' => '-- Select Month -- ']) !!} --}}
            </div>
            <div class="col-md-7 col-md-offset-1">
              <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} label-floating has-success">
                  {!! Form::textarea('title', null, ['class' => 'form-control', 'required' => 'required', 'rows'=>'1']) !!}
                  <small class="text-danger">{{ $errors->first('title') }}</small>
              </div>
            </div>
          </div>

          @if ($month_balance != null)
            <div class="row">
              <div class="col-md-4">
                <div class="form-group{{ $errors->has('month_balance_id') ? ' has-error' : '' }} label-floating has-success">
                  {!! Form::select('month_balance_id', $month_balance, null, ['class'=>'form-control', 'placeholder' => '- စာရင်းဖွင့်လက်ကျန် - ', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('month_balance_id') }}</small>
                </div>
              </div>
              <div class="hidden form-group{{ $errors->has('balance') ? ' has-error' : '' }} label-floating has-success">
                  {{-- {!! Form::label('open_balance', 'စာရင်းဖွင့်') !!} --}}
                  {!! Form::number('open_balance', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'စာရင်းဖွင့်']) !!}
                  <small class="text-danger">{{ $errors->first('balance') }}</small>
              </div>
            </div>
          @else
            <div class="row">
              <div class="col-md-4">
                <div class="form-group{{ $errors->has('balance') ? ' has-error' : '' }} label-floating has-success">
                    {{-- {!! Form::label('open_balance', 'စာရင်းဖွင့်') !!} --}}
                    {!! Form::number('open_balance', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'စာရင်းဖွင့်']) !!}
                    <small class="text-danger">{{ $errors->first('balance') }}</small>
                </div>
                <div class="hidden form-group{{ $errors->has('balance') ? ' has-error' : '' }} label-floating has-success">
                    {{-- {!! Form::label('open_balance', 'စာရင်းဖွင့်') !!} --}}
                    {!! Form::number('open_balance', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'စာရင်းဖွင့်']) !!}
                    <small class="text-danger">{{ $errors->first('balance') }}</small>
                </div>
              </div>

              <div class="col-md-7 col-md-offset-1">

              </div>
            </div>
          @endif
        </div>
      </div>
      <div class="modal-footer">
        @include('kopin.button-add')
      </div>
    </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{!! Form::close() !!}
