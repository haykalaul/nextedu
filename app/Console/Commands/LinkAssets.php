<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class LinkAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a symbolic link from public/assets to storage/app/public/assets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $target = storage_path('app/public/assets');
        $link = public_path('assets');

        // Check if the target directory exists, create if not
        if (!File::exists($target)) {
            $this->info('Creating assets directory in storage/app/public...');
            File::makeDirectory($target, 0755, true);
        }

        // If public/assets exists and is not a symlink, copy its contents to storage
        if (File::exists($link) && !is_link($link)) {
            $this->info('Copying existing assets to storage...');
            File::copyDirectory($link, $target);
        }

        // Remove existing link if it exists
        if (File::exists($link) && is_link($link)) {
            unlink($link);
        } elseif (File::exists($link) && !is_link($link)) {
            // If it's a directory, remove it after copying
            File::deleteDirectory($link);
        }

        // Create the symlink
        if (symlink($target, $link)) {
            $this->info('Assets link created successfully.');
        } else {
            $this->error('Failed to create assets link.');
        }
    }
}
