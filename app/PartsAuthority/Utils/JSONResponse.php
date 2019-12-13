<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Utils;


class JSONResponse {
    public static function get($fileName) {
        return file_get_contents(app_path('PartsAuthority/response/' . $fileName));
    }
}
