@include('my_layout.head')
@include('include_files.header')
<article class="article_box">
@foreach ( $radios as $radio)
    <div class="article_inner-box">
      <span>No{{ $radio->id }}.</span>
      <div class="article-title_box">
        <h2><a href="{{ action('RadioController@show',$radio->id) }}">{{ $radio->name }}</a></h2>
      </div>
       <div class="article_inner-picture">
        <a href="{{ action('RadioController@show', $radio->id) }}"><img src="/img/{{ $radio->id }}.jpg" ></a>
       </div>
    </div>
@endforeach
</article>
<div class="paginate">
{{ $radios->links() }}
</div>
