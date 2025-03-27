@if ($feelings->isEmpty())
   <div class="text-center pt-3">Không có cảm nhận nào</div>
@else
<ul>
    @foreach ($feelings as $feeling)
        <li>
            <div class="bd-postbox-comment-box">
                <div class="bd-postbox-comment-info">
                    <div class="bd-postbox-comment-avatar">
                        <img src="{{ asset($feeling->image ?: '/source/images/instructor-thumb-05.webp') }}"
                            alt="image">
                    </div>
                </div>
                <div class="bd-postbox-comment-text">
                    <div class="bd-postbox-comment-name">
                        <h5 class="title"><a href="#">{{ $feeling->title }}</a></h5>
                        <span class="post-meta">
                            {{ \Carbon\Carbon::parse($feeling->created_at)->locale('vi')->translatedFormat('d F Y') }}</span>
                    </div>
                    <div class="rating">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="{{ $i <= $feeling->rating ? 'text-warning' : 'text-muted' }}"><i
                                    class="fas fa-star"></i></span>
                        @endfor
                    </div>
                    <p>{{ $feeling->content }}</p>

                </div>
            </div>
        </li>
    @endforeach
</ul>
@endif