{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>2026-02-11T10:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ url('/faculty') }}</loc>
        <lastmod>2026-02-11T10:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/gallery') }}</loc>
        <lastmod>2026-02-11T10:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    @foreach($categories as $category)
    <url>
        <loc>{{ route('get_register', $category) }}</loc>
        <lastmod>2026-02-11T10:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
</urlset>