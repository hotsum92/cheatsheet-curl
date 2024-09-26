<?php

error_log('$_SERVER='.json_encode($_SERVER, JSON_UNESCAPED_UNICODE));
error_log('$_POST='.json_encode($_POST, JSON_UNESCAPED_UNICODE));
error_log('$_GET='.json_encode($_GET, JSON_UNESCAPED_UNICODE));
error_log('$_REQUEST='.json_encode($_REQUEST, JSON_UNESCAPED_UNICODE));
error_log('$_FILES='.json_encode($_FILES, JSON_UNESCAPED_UNICODE));
error_log('$_ENV='.json_encode($_ENV, JSON_UNESCAPED_UNICODE));
error_log('$_COOKIE='.json_encode($_COOKIE, JSON_UNESCAPED_UNICODE));
error_log('php://input='.file_get_contents('php://input'));
