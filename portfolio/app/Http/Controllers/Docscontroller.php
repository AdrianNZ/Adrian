<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentation;

class Docscontroller extends Controller
{
    protected $docs;

    public function __construct(Documentation $docs)
    {
        $this->docs = $docs;
    }

    public function show($file = null)
    {
//        $index = \Cache::remember('docs.index', 120, function () {
//            return markdown($this->docs->get());
//        });
        $content = \Cache::remember('docs.{$file}', 60, function () use ($file) {
            return markdown($this->docs->get($file ?: 'hello.md'));
        });
        return view('markdown', compact('index', 'content'));
    }

    public function show2($file = null)
    {
        $reqEtag = \Request::getEtags();
        $genEtag = $this->docs->etag($file);

        if (isset($reqEtag[0])) {
            if ($reqEtag[0] === $genEtag) {
                return response('', 304);
            }
        }

//        $index = \Cache::remember('docs.index', 120, function () {
//            return markdown($this->docs->get());
//        });

        $content = \Cache::remember('docs.{$file}', 60, function () use ($file) {
            return markdown($this->docs->get($file ?: 'hello.md'));
        });
        return response($content, 200, ['Etag' => $genEtag]);
    }
}
