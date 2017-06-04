<li class="{{ Request::is('personals/create') ? "active" : "" }}">
  <a href="{{ url('/personals/create') }}">
    <i class="material-icons">person_add</i>
    <p>ဝန်ထမ်း အသစ်ထည့်ရန်</p>
  </a>
</li>
<li class="{{ Request::is('financial_years') ? "active" : "" }} || {{ Request::is('financial_years/*') ? "active" : "" }}">
    <a href="{{ url('/financial_years') }}">
        <i class="material-icons">monetization_on</i>
      <p>လစာပေးမှတ်တမ်း</p>
    </a>
</li>

@foreach (Auth::user()->roles as $key => $navrole)
  @if ($navrole->name == "Administrator")
    <li class="{{ Request::is('position_types') ? "active" : "" }}">
      <a href="{{ route('position_types.index') }}">
          <i class="material-icons">person_pin</i>
        <p>ရာထူးစာရင်း</p>
      </a>
    </li>
    <li class="{{ Request::is('depts') ? "active" : "" }}">
        <a href="{{ route('depts.index') }}">
          <i class="material-icons">view_quilt</i>
          <p>ဌာနစာရင်း</p>
        </a>
    </li>
  @elseif ($navrole->name == "Personal Manager")
    <li class="{{ Request::is('position_types') ? "active" : "" }}">
      <a href="{{ route('position_types.index') }}">
          <i class="material-icons">person_pin</i>
        <p>ရာထူးစာရင်း</p>
      </a>
    </li>
    <li class="{{ Request::is('depts') ? "active" : "" }}">
        <a href="{{ route('depts.index') }}">
          <i class="material-icons">view_quilt</i>
          <p>ဌာနစာရင်း</p>
        </a>
    </li>
  @endif
@endforeach
