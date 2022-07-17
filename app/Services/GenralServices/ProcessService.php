<?php

namespace App\Services\GenralServices;

use App\Models\General\Process;

/**
 * Class ProcessService.
 */
class ProcessService
{
    public static function registerProcess($name_process, $user, $slug, $status = null, $type_url = null, $last_url = null, $next_url = null, $percentage = null, $total_steps = null, $last_step = null): Process
    {
        if ($status == null) {
            $status = "incomplete";
        }
        if ($slug == null) {
            $slug = slug_token($user . $name_process);
        }

        $process = new Process();

        return Process::updateOrCreate(
            [
                'user_id' => $user,
                'process' => $name_process,
                'slug' => $slug,
            ],
            [
                'status' => $status,
                'percentage' => $percentage,
                'total_steps' => $total_steps,
                'last_step' => $last_step,
                'type_url' => $process->type_url()[$type_url],
                'last_url' => $last_url,
                'next_url' => $next_url
            ]
        );
    }

}
