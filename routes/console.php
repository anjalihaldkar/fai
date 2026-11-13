<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Console\ServeCommand;

// Ensure Windows environment variables are passed through to PHP server worker processes
if (class_exists(ServeCommand::class)) {
    ServeCommand::$passthroughVariables = array_merge(
        ServeCommand::$passthroughVariables,
        ['SystemRoot', 'windir', 'WINDIR', 'ComSpec', 'COMSPEC', 'TEMP', 'TMP', 'SystemDrive', 'SYSTEMDRIVE', 'ALLUSERSPROFILE', 'ProgramData']
    );
}

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
