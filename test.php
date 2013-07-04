<?php
echo (int)ini_get('zlib.output_compression');
@ini_set('zlib.output_compression_level', 1);
echo (int)ini_get('zlib.output_compression');
echo ini_get('output_buffering');
echo 'done';

phpinfo();