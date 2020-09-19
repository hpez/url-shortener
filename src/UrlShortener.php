<?php


namespace Hpez\UrlShortener;


use Illuminate\Database\Eloquent\ModelNotFoundException;

class UrlShortener
{
    public function shorten($url)
    {
        try {
            $shortened = ShortenedUrl::where('url', $url)->firstOrFail();
            $shortened = $shortened->shortened;
        } catch (ModelNotFoundException $exception) {
            do {
                $shortened = bin2hex(random_bytes(5));
                $exists = ShortenedUrl::where('shortened', $shortened)->exists();
            } while ($exists);

            ShortenedUrl::create([
                'url' => $url,
                'shortened' => $shortened
            ]);
        }

        return $shortened;
    }
}
