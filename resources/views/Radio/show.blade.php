@include('my_layout.head')
@include('include_files.header')
<div class="container detail_container">
  <div class="detail_text">
    <h2>{{ $radio->name }}</h2>
  </div>
<div class="warpframe">
  <div class="article_iframe">
      <iframe width="240" height="315" src="https://www.youtube.com/embed/{{ $radio->url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<div class="return">
  @if ($radio->id >= 2 )
  <a href="{{ action('RadioController@show', ($radio->id - 1) ) }}"><i class="fas fa-arrow-left"></i></a>
  @endif
  <a href="{{ url('/Radio/index') }}"><i class="fas fa-home"></i></a>
  @if($radio->id !== $max)
  <a href="{{ action('RadioController@show', ($radio->id + 1) ) }}"><i class="fas fa-arrow-right"></i></a>
  @endif
</div>

<div class="recommend">
  <div class="recommend_title-box">
    <h3 class="recommend_title">おすすめ動画</h3>
  </div>

  @php $random[0] = Videos($max) @endphp
  <div class="recommend_box1 recommend_sp">
   <a href="{{ action('RadioController@show', $random[0]) }}"><img src="/img/{{ $random[0][0] }}.jpg"></a>
  </div>
  <div class="recommend_box1 recommend_sp">
   <a href="{{ action('RadioController@show', $random[0][1]) }}"><img src="/img/{{ $random[0][1] }}.jpg"></a>
  </div>
  <div class="recommend_box1 recommend_sp">
   <a href="{{ action('RadioController@show', $random[0][2]) }}"><img src="/img/{{ $random[0][2] }}.jpg"></a>
  </div>
  <div class="recommend_box3 ">
    <a href="{{ action('RadioController@show', $random[0][3]) }}"><img src="/img/{{ $random[0][3] }}.jpg"></a>
  </div>
  <div class="recommend_box3 ">
    <a href="{{ action('RadioController@show', $random[0][4]) }}"><img src="/img/{{ $random[0][4] }}.jpg"></a>
  </div>
</div>
