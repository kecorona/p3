<?php #!/usr/bin/bash /usr/bin/php
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);

try {
        $payload = json_decode($_REQUEST['payload']);
}

catch(Exception $e) {

        // log the error
        file_put_contents('/var/www/p3.kristincorona.com/logs/github.txt$

        exit(0);
}

if ($payload->ref === 'refs/heads/master') {

        $project_directory = '/var/www/p3.kristincorona.com/public/';

        $output = shell_exec("/var/www/p3.kristincorona.com/public/git-p$

        // log the request
        file_put_contents('/var/www/p3.kristincorona.com/logs/github.txt$

}
?>