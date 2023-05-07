<?php

namespace App\Services\Media\Services;

use Exception;
use App\Services\Media\Interfaces\MediaInterface;
use App\Services\Media\Models\Media;
use App\Services\BaseService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Plank\Mediable\Exceptions\MediaUploadException;
use Plank\Mediable\HandlesMediaUploadExceptions;
use Plank\Mediable\MediaUploader;

/**
 * Class MediaService
 *
 * @package App\Modules\Media\Services
 */
class MediaService extends BaseService implements MediaInterface
{
    use HandlesMediaUploadExceptions;

    protected MediaUploader $mediaUploader;

    /**
     * MediaService constructor.
     *
     * @param Media         $media
     * @param MediaUploader $mediaUploader
     */
    public function __construct(Media $media, MediaUploader $mediaUploader)
    {
        $this->model = $media;
        $this->mediaUploader = $mediaUploader;
    }

    /**
     * @param        $file
     * @param string $disk
     * @param null   $directory
     *
     * @return \Plank\Mediable\Media
     * @throws Exception
     */
    public function upload($file, $disk = 'public', $directory = null): \Plank\Mediable\Media
    {
        try {
            return $this->mediaUploader
                ->fromSource($file)
                ->toDestination($disk, $directory)
                ->useFilename(Str::random(40) . time())
                ->upload();
        } catch (MediaUploadException $e) {
            throw $this->transformMediaUploadException($e);
        }
    }

    /**
     * @param      $media
     * @param bool $is_first
     *
     * @return void
     */
    public function deleteExistingFile($media, bool $is_first = true): void
    {
        if (!$is_first && $media) {
            foreach ($media as $value) {
                $value->delete();
                Storage::disk($value->disk)->delete($value->getDiskPath());
            }
        } else if($media) {
            $media->delete();
            Storage::disk($media->disk)->delete($media->getDiskPath());
        }
    }
}
