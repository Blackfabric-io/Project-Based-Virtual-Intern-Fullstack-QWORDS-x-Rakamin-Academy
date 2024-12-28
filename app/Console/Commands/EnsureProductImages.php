<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class EnsureProductImages extends Command
{
    protected $signature = 'products:ensure-images';
    protected $description = 'Ensure product images exist in the public directory';

    public function handle()
    {
        $imagePath = public_path('images/products');

        if (!File::exists($imagePath)) {
            File::makeDirectory($imagePath, 0755, true);
        }

        $placeholderImages = [
            'value-hosting.jpg',
            'signature-hosting.jpg',
            'enterprise-hosting.jpg'
        ];

        foreach ($placeholderImages as $image) {
            $path = $imagePath . '/' . $image;
            if (!File::exists($path)) {
                // Create a placeholder image using intervention/image if available
                // For now, just copy a default image
                File::copy(
                    public_path('images/placeholder-hosting.jpg'),
                    $path
                );
            }
        }

        $this->info('Product images have been ensured.');
    }
}
