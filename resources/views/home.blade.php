
{{-- {{ dump("7 this is view") }} --}}

{{-- {{ print_r($settings)}}   an example of shared view data --}}

{{-- <x-test-component name='yousef'></x-test-component> --}}


<br>

<x-page-title color="red" text="page title dynamic component"></x-page-title>

<br>


      @php
        $language=request()->segment(1, 'default')=='ar'? 'en':'ar';
      @endphp
      <a href="{{ LaravelLocalization::getLocalizedURL($language) }}"> {{ strtoupper($language) }}</a>
     <br>

     {{ __('keywords.pagename')}}

<br>
<br>
<br>






<a href="{{ url("/send-mail") }}">
   <button class="btn-primary">send mail</button>
</a>

<br>
<br>
<a href="{{ url("/send-notification") }}">
   <button class="btn-primary">send notification</button>
</a>
<br>
<br>

{{--  applayin on slug manually --}}







 <a href="{{ url('posts'.'',$post) }}">
    <button class="btn-primary">go to second post </button>
</a>




<br>


