<?php

namespace App\Services\Media\Interfaces;

/**
 * Interface AccountAdminInterface
 *
 * @package App\Modules\Admin\Account\Interfaces
 */
interface MediaInterface
{
    /**
     * @param $file
     * @param $disk
     * @param $directory
     */
    public function upload($file, $disk = null, $directory = null);

    /**
     * @param $media
     * @param bool $is_first
     */
    public function deleteExistingFile($media, bool $is_first = true);
}
