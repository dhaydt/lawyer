<?php

namespace App\CPU;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ImageManager
{
    public static function upload(string $dir, string $format, $image = null)
    {
        if (env('APP_ENV') == 'live') {
            if ($image != null) {
                $imageName = Carbon::now()->toDateString().'-'.uniqid().'.'.$format;
                if (!Storage::disk('public')->exists($dir)) {
                    Storage::disk('public')->makeDirectory($dir);
                }
                Storage::disk('public')->put($dir.$imageName, file_get_contents($image));
            } else {
                $imageName = 'def.png';
            }

            return $imageName;
        } else {
            if ($image != null) {
                $imageName = Carbon::now()->toDateString().'-'.uniqid().'.'.$format;
                if (!Storage::disk('public')->exists($dir)) {
                    Storage::disk('public')->makeDirectory($dir);
                }
                Storage::disk('public')->put($dir.$imageName, file_get_contents($image));
            } else {
                $imageName = 'def.png';
            }

            return $imageName;
        }
    }

    public static function update(string $dir, $old_image, string $format, $image = null)
    {
        if (Storage::disk('public')->exists($dir.$old_image)) {
            Storage::disk('public')->delete($dir.$old_image);
        }
        $imageName = ImageManager::upload($dir, $format, $image);

        return $imageName;
    }

    public static function delete(string $dir, $old_image)
    {
        if (Storage::disk('public')->exists($dir.$old_image)) {
            Storage::disk('public')->delete($dir.$old_image);
        }
    }

    public static function deleteImg($full_path)
    {
        $dir = str_replace('storage/', '', $full_path);
        if (Storage::disk('public')->exists($dir)) {
            Storage::disk('public')->delete($dir);
        }

        return [
            'success' => 1,
            'message' => 'Removed successfully !',
        ];
    }
}
