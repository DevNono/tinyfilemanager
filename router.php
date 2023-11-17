<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|webp)$/', $_SERVER["REQUEST_URI"])) {
    // add cache for images (7 days)
    $seconds_to_cache = 604800;
    $ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";

    header("Expires: $ts");
    header("Pragma: cache");
    header("Cache-Control: max-age=$seconds_to_cache, public");
}

// execute the file if it exists
return false;