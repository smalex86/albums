<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\{Album, Photo};

class FillAlbum extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'album:fill {albumId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Заполнить данные альбома';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $albumId = $this->argument('albumId');
        $this->info('album_id = ' . $albumId);
        $album = Album::where('id', $albumId)->first();
        $this->info('Очистка фотографий альбома ...');
        $album->photos()->delete();
        $this->info('Заполнение ...');
        $thumbs = $album->getThumbFiles();
        $counter = 0;
        foreach ($thumbs as $thumb) {
            $info = pathinfo($thumb);
            $album->photos()->create([
                'name' => $info['basename'],
                'filename' => $info['basename'],
                'guid' => $this->uniqidReal()
            ]);
            $this->info('Добавлено фото: ' . $thumb);
            $counter++;
        }
        $this->info('Добавлено фотографий всего: ' . $counter);
    }

    private function uniqidReal($lenght = 13) {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }

}
