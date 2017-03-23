<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class documentation extends Model
{
    /**
     * desc 1. 요청된 파일을 가져옴
     * 2. 파일을 리턴
     * @param $file
     */
    public function get($file)
    {
        return File::get($this->path($file));
    }

    /**
     * desc 요청된 파일명에 파일을 로드
     * @param $file
     */
    public function path($file)
    {
        $path = base_path('docs' . DIRECTORY_SEPARATOR . $file);

        if (!File::exists($path)) {
            abort(404, "There is no file");
        }
        return $path;
    }
}
