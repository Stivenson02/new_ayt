<?php

namespace App\Services\GeneralServices;

use App\Models\General\Process;

/**
 * Class ProcessService.
 */
class ProcessService
{
    public static function registerProcess($register_process): Process
    {
        if (!array_key_exists('status', $register_process)) {
            $register_process['status'] = "incomplete";
        }

        $register_process['slug'] = slug_token($register_process['slug_table']. $register_process['process']);

        $process = new Process();

        return Process::updateOrCreate(
            [
                'user_id' => $register_process['user_id'],
                'process' => $register_process['process'],
                'slug_table' => $register_process['slug_table']
            ],
            [
                'slug' => $register_process['slug'],
                'status' => array_key_exists('status', $register_process) ? $register_process['status'] : null,
                'percentage' => array_key_exists('percentage', $register_process) ? $register_process['percentage'] : null,
                'total_steps' => array_key_exists('total_steps', $register_process) ? $register_process['total_steps'] : null,
                'last_step' => array_key_exists('last_step', $register_process) ? $register_process['last_step'] : null,
                'type_url' => $process->type_url()[$register_process['type_url']],
                'last_url' => array_key_exists('last_url', $register_process) ? $register_process['last_url'] : null,
                'next_url' => array_key_exists('next_url', $register_process) ? $register_process['next_url'] : null,
                'table' => array_key_exists('table', $register_process) ? $register_process['table'] : null
            ]
        );
    }

}
