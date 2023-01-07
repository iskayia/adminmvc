<?php

define('WEB_HOSTING', config('web_hosting'));
define('HTDOCS_FOLDER', config('htdocs_folder'));
define('ADDED_FOLDER', '');

define('DBS_HOST', config('mysql_host'));
define('DBS_USER', config('mysql_username'));
define('DBS_PASS', config('mysql_password'));
define('DBS_NAME', config('mysql_name'));

define('IMG_LOCATION', 'uploads');
define('LIMIT_FILESIZE', '1048576');
define('FILE_EXTENSION', 'jpg|png|gif|jpeg|svg');

define('HTACCESS_TYPE', 'CI');
define('IMG_URL', config('img_url'));
/*
HTACCESS_TYPE = CI
**
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
**
HTACCESS_TYPE = GET
**
Options -Multiviews
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php?url=$1 [L]
**
*/
