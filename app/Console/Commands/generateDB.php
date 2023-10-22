<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\File;

use Illuminate\Console\Command;
use PhpParser\Node\Expr\Print_;

class generateDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generateDB:catedral';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea la base de datos de la Catedral de Santiago';

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
     * @return int
     */
    public function handle()
    {
        $fileCatedral = public_path("storage/json/CATEDRALFOTOS.json");
        if (!file_exists($fileCatedral)) {
            $this->output->write('FICHERO CATTEDRAL.JSON INEXISTENTE', false);
            return 0;
        }


        $json = json_decode(file_get_contents($fileCatedral), true);
        $json = File::get($fileCatedral);
        $leido = json_decode($json, true);

        $elementos = $leido['FOTOS'];


        foreach ($elementos as $elemento) {
            $this->output->write($elemento['FILE'], true);
        }

        return 0;
    }
}
