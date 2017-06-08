@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header" data-background-color="green">
        <h4 class="title">ရည်မှန်းချက် (Vision)</h4>
        {{-- <p class="category">ဝန်ထမ်းရေးရာ</p> --}}
      </div>
      <div class="card-content">
        <blockquote class="text-success">
          <h4><strong>စက်မှုလယ်ယာစနစ်သို့ ပြောင်းလဲကျင့်သုံးရေး</strong></h4>
        </blockquote>
      </div>
    </div>
    <div class="card">
      <div class="card-header" data-background-color="green">
        <h4 class="title">လုပ်ငန်းတာဝန် (Mission)</h4>
        {{-- <p class="category">ဝန်ထမ်းရေးရာ</p> --}}
      </div>
      <div class="card-content">
        <blockquote class="text-success"><h4><span class="bg-warning">(က)</span>
          လယ်ယာဝန်ဆောင်မှုလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရန်။</h4>
        </blockquote>
        <blockquote class="text-success"><h4><span class="bg-warning">(ခ)</span>
          စက်မှုလယ်ယာစနစ် ကျင့်သုံးနိုင်သော လယ်ယာမြေနှင့် စိုက်ပျိုးမြေများ တိုးတက်ပေါ်ထွန်းလာစေရန်။</h4>
        </blockquote>
        <blockquote class="text-success"><h4><span class="bg-warning">(ဂ)</span>
          လယ်ယာလုပ်ငန်းခွင်တွင် လယ်ယာသုံးစက်ကိရိယာများ တိုးတက် သုံးစွဲနိုင်ရေး ကူညီပံ့ပိုးဆောင်ရွက်သွားရန်။</h4>
        </blockquote>
        <blockquote class="text-success"><h4><span class="bg-warning">(ဃ)</span>
          စက်မှုလယ်ယာ အသိပညာ၊ အတတ်ပညာများ လေ့ကျင့်ပညာပေးသွားရန်နှင့် စက်မှုလယ်ယာသုတေသနလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး ကြိုးပမ်းဆောင်ရွက်သွားရန်။</h4>
        </blockquote>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header" data-background-color="green">
        <h4 class="title">ရည်ရွယ်ချက် (Objective)</h4>
        {{-- <p class="category">ဝန်ထမ်းရေးရာ</p> --}}
      </div>
      <div class="card-content">
          <blockquote class="text-success">
            <h4>နိုင်ငံတော်တွင် လက်ရှိကျင့်သုံးဆောင်ရွက်နေသော သမရိုးကျ လယ်ယာ စိုက်ပျိုးရေးနည်းစနစ်မှ စက်မှုလယ်ယာစနစ်သို့ ကူးပြောင်းဆောင်ရွက်ခြင်းဖြင့် နိုင်ငံတော်၏ လယ်ယာစိုက်ပျိုးရေးကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန်။</h4>
          </blockquote>
      </div>
    </div>
    <div class="card">
      <div class="card-header" data-background-color="green">
        <h4 class="title">မူဝါဒ (Policy)</h4>
        {{-- <p class="category">ဝန်ထမ်းရေးရာ</p> --}}
      </div>
      <div class="card-content">
          <blockquote class="text-success"><h4><span class="bg-warning">(က)</span>
            တောင်သူလယ်သမားများ၏ လိုအပ်ချက်များ၊ တွေ့ကြုံနေရသော အခက်အခဲများကို သိရှိအောင် ကြိုးပမ်းဆောင်ရွက်ပြီး စက်မှုလယ်ယာဦးစီးဌာနမှ ကိုယ်စွမ်း ဉာဏ်စွမ်းရှိသရွေ့ စိတ်ရင်းစေတနာမှန်ဖြင့် စေတနာထား ကူညီဖြေရှင်း ဆောင်ရွက်ပေးရန်။</h4>
          </blockquote>
          <blockquote class="text-success"><h4><span class="bg-warning">(ခ)</span>
            နိုင်ငံတော်တွင် တောင်သူလယ်သမားများ၏ ယုံကြည်အားထားရာ အဖွဲ့အစည်း တစ်ခုအဖြစ် ကြိုးပမ်းတည်ဆောက်ပြီး လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်ရေးအတွက် တောင်သူလယ်သမားများနှင့် တသားတည်းပူးပေါင်းကာ စက်မှုလယ်ယာ ကူးပြောင်းရေး အကောင်အထည်ဖော် ဆောင်ရွက်ရန်။</h4>
          </blockquote>
      </div>
    </div>
  </div>


</div>

@endsection
