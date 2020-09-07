<?php


namespace Hpez\UrlShortener;


class UrlShortener
{
    public function shorten($url)
    {
        do {
            $shortened = bin2hex(random_bytes(5));
            $exists = ShortenedUrl::where('shortened', $shortened)->exists();
        } while ($exists);

        ShortenedUrl::create([
            'url' => $url,
            'shortened' => $shortened
        ]);

        return $shortened;
    }
}
