@if (! empty($tag->url))
        <image:image>
            <image:loc>{{ url($tag->url) }}</image:loc>
@if (! empty($tag->caption))
            <image:caption>{{ $tag->caption }}</image:caption>
@endif
@if (! empty($tag->title))
            <image:title>{{ $tag->title }}</image:title>
@endif
        </image:image>
@endif
