
<div class="col-lg-12 col-md-12">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">{{ $financial_year->name }} ငွေစာရင်း</h4>
      		<p class="category">ငွေစာရင်း</p>
      	</div>
      	<div class="card-content table-responsive">
      		<table class="table table-bordered">
      			<thead class="text-primary">
              <th class="text-center" ><h5><strong>လ</strong></h5></th>
              <th class="text-center"><h5><strong>အကြောင်းအရာ</strong></h5></th>
              <th class="text-center"><h5><strong>လစာပေးမှတ်တမ်း</strong></h5></th>
              @foreach(Auth::user()->roles as $key => $navrole)
                @if ($navrole->name == "Administrator")
                  <th width="80px;" class="text-center">
                    @include('accounts.months.create')
                  </th>
                @elseif ($navrole->name == "Account Manager")
                  <th width="80px;" class="text-center">
                    @include('accounts.months.create')
                  </th>
                @elseif ($navrole->name == "Account Write")
                  <th width="80px;" class="text-center">
                    @include('accounts.months.create')
                  </th>
                @endif
              @endforeach

      			</thead>
            <tbody>
              @foreach ($months as $financial_year=>$month)
                <tr>
                  <td>{{ $month->name }}</td>
                  <td><a href="{{ route('accounts.show', $month->id) }}">{{ $month->title }}</a></td>
                  <td class="text-center">
                    <a href="{{ route('payrolls.index', $month->id) }}">
                      <button type="button" rel="tooltip" title="ကြည့်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;">
                          <i class="fa fa-money text-warning"></i>
                      </button>
                    </a>
                  </td>
                  @foreach (Auth::user()->roles as $key => $navrole)
                    @if ($navrole->name == "Administrator")
                      <td class="text-center">
                        <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;"  data-toggle="modal" data-target="#monthModel{{ $month->id }}">
                            <i class="fa fa-edit text-success"></i>
                        </button>
                        @include('accounts.months.edit')
                      </td>
                    @elseif ($navrole->name == "Account Manager")
                      <td class="text-center">
                        <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;"  data-toggle="modal" data-target="#monthModel{{ $month->id }}">
                            <i class="fa fa-edit text-success"></i>
                        </button>
                        @include('accounts.months.edit')
                      </td>
                    @elseif ($navrole->name == "Account Write")
                      <td class="text-center">
                        <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;"  data-toggle="modal" data-target="#monthModel{{ $month->id }}">
                            <i class="fa fa-edit text-success"></i>
                        </button>
                        @include('accounts.months.edit')
                      </td>
                    @endif
                  @endforeach

                </tr>
              @endforeach
            </tbody>
      		</table>

      	</div>
        <div class="card-footer">
          <a class="text-success" href="{{ url('/financial_years') }}">
            <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
              နောက်သို့
          </a>
        </div>
      </div>
    </div>
