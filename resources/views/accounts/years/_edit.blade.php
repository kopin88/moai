{!! Form::model($financial_year, ['route' => ['financial_years.update', $financial_year->id], 'method' => 'PATCH']) !!}

<div class="modal fade" id="FinancialYearEdit{{ $financial_year->id }}" tabindex="-1" role="dialog" aria-labelledby="FinancialYearEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-primary" id="FinancialYearEditLabel">{{ $financial_year->name }}   ပြင်ရန်</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
              {!!Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'ဌာနအမည်', 'required'=>'required', 'autofocus'=>'autofocus'])!!}
              <small class="text-danger">{{ $errors->first('name') }}</small>
          </div>
        </div>
      </div>
      <hr>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div>

{!! Form::close() !!}
