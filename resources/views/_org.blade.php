@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
        <div class="card">
        	<div class="card-header text-center" data-background-color="green">
        		<h3 class="title">စက်မှုလယ်ယာဦးစီးဌာန <br>
        		<small class="category">ပင်မပစ္စည်းသိုလှောင်ရုံအဆင့်(က)၊ ကျိုက္ကလို့၏ ဖွဲ့စည်းပုံဇယား (Family Tree)</small></h3>
        	</div>
          <div class="card-content">
                @include('sample2')
        	</div>
        </div>
@endsection
