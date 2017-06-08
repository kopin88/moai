@extends('layouts.app')

  @section('sidebar')
    @include('layouts.sidebar')
  @endsection

  @section('content')
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header" data-background-color="green">
            {{ $month->financial_year->name }} {{ $month->name }} လစာပေးမှတ်တမ်း
            {{-- <p class="category">ဝန်ထမ်းရေးရာ</p> --}}
          </div>

          <div class="card-content">
            @include('accounts.payrolls._index-table')
            {{-- <div class="tab-content">
            </div> --}}
          </div>
          <div class="card-footer">
            <a class="text-success" href="{{ route('months.index', $month->financial_year->id) }}">
              <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
                နောက်သို့
            </a>
          </div>
        </div>
      </div>

@endsection
