<!-- Modal -->
  {!! Form::open(['method' => 'put', 'route' => ['LeaveYears.delete', $leave_year->id], 'class' => 'form-horizontal']) !!}
<div class="modal fade" id="LeaveYearDel{{ $leave_year->id }}" tabindex="-1" role="dialog" aria-labelledby="LeaveYearDelLabel{{ $leave_year->id }}">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-left text-primary" id="LeaveYearDelLabel{{ $leave_year->id }}"><strong>{{ $leave_year->name }}</strong></h4>
      </div>
      <div class="modal-body">
        <h3 class="text-center text-danger"><strong>သေချာလား ?</strong></h3>
      </div>
      <div class="modal-foter">
          <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
              @include('kopin.button-sure')<br>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
