<?php


namespace Hpez\UrlShortener;


use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UrlShortenerController extends Controller
{
    public function index($url)
    {
        try {
            $shortenedUrl = ShortenedUrl::where('shortened', $url)->firstOrFail();
            return redirect()->to($shortenedUrl->url);
        } catch (ModelNotFoundException $exception) {
            return abort(404);
        }
    }
}
