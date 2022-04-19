<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start zag2">
            <h2>Читайте также</h2>
        </div>
        <div class="col-12">
            <div class="owl-carousel owl-carousel4 owl-theme">
                @foreach($articles as $article)
                    <div class="item">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <a href="{{ route('articles.show', ['article' => $article->slug]) }}">
                                        <picture>
                                            <img src="{{ $article->SmallThumb }}" alt="{{ $article->title }}">
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <span>{{ date('d-m-Y', strtotime($article->created_at)) }}</span>
                                    <a href="{{ route('articles.show', ['article' => $article->slug]) }}">{{ \Illuminate\Support\Str::limit($article->title, 75,'...')}}</a>
                                    <!--{!! \Illuminate\Support\Str::limit($article->first_content, 157,'...') !!}--> <br>    
                                    {!! \Illuminate\Support\Str::limit(strip_tags($article->first_content), 100,'...') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>  