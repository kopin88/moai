@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  <div class="card card-nav-tabs">
    <div class="card-header" data-background-color="green">
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <span class="nav-tabs-title">Tasks:</span>
          <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="active">
              <a href="#vision" data-toggle="tab">
                <i class="material-icons">star</i>
                ရည်မှန်းချက် (Vision)
              <div class="ripple-container"></div></a>
            </li>
            <li class="">
              <a href="#mission" data-toggle="tab">
                <i class="material-icons">star</i>
                လုပ်ငန်းတာဝန် (Mission)

              <div class="ripple-container"></div></a>
            </li>
            <li class="">
              <a href="#Objective" data-toggle="tab">
                <i class="material-icons">star</i>
                ရည်ရွယ်ချက် (Objective)
              <div class="ripple-container"></div></a>
            </li>
            <li class="">
              <a href="#Policy" data-toggle="tab">
                <i class="material-icons">star</i>
                မူဝါဒ (Policy)
              <div class="ripple-container"></div></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="card-content">
      <div class="tab-content">
        <div class="tab-pane active" id="vision">
          <h3>စက်မှုလယ်ယာစနစ်သို့ ပြောင်းလဲကျင့်သုံးရေး</h3>
        </div>
        <div class="tab-pane" id="mission">
          Second Tab
        </div>
        <div class="tab-pane" id="Objective">
          @include('sample2')
        </div>
        <div class="tab-pane" id="Policy">
          @include('sample')
        </div>
      </div>
    </div>

  </div>
@endsection
