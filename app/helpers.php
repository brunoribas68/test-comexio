<?php

if (! function_exists('show_script_path')) {
    function show_script_path($project, $script = null)
    {
        if ($script === null) {
            $script = &$project;
        }

        return "../scriptPython/{$project}/{$script}.py";
    }
}
