<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Catedral;

class generateSitemaps extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemaps';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera ficheros sitemaps';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $lastMod = "<lastmod>2022-10-09</lastmod>\n";

        $cabecera = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"'.PHP_EOL.'xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';

        $myfile = fopen(public_path("sitemap.xml"), "w");
       /*  $myfile = fopen(asset("storage/sitemap.xml"), "w"); */
        fwrite($myfile, $cabecera."\n");
        $allUrls = Catedral::where('categoria',Catedral::FACHADAS)
        ->orWhere('categoria', Catedral::OTROS)
        ->orWhere('categoria', Catedral::CAPILLAS)
        ->orWhere('categoria', Catedral::MUSEO)
        ->get();
        fwrite($myfile, "<url>\n");
        $loc = "<loc>https://catedraldesantiago.online/</loc>\n";
        fwrite($myfile, $loc);
        fwrite($myfile, $lastMod);
        $home = Catedral::where('categoria',Catedral::HOME)->first();
        $this->output->write($home->name, false);
        $fotos = $home->fotos;
        foreach($fotos as $eachFoto) {
            fwrite($myfile, "\t<image:image>".PHP_EOL);
            $urlFoto="\t\t".'<image:loc>https://catedraldesantiago.online/'.'storage/fotos/' . $home->id . '/original/' . $eachFoto->url.'</image:loc>';
            fwrite($myfile,$urlFoto.PHP_EOL);
            fwrite($myfile, "\t</image:image>".PHP_EOL);
        }




        fwrite($myfile, "</url>\n");



        foreach($allUrls as $each) {
            fwrite($myfile, "<url>\n");
            $loc = "\t"."<loc>https://catedraldesantiago.online/".$each->slug."</loc>\n";
            fwrite($myfile, $loc);
            fwrite($myfile, "\t".$lastMod);
            $fotos = $each->fotos;
            foreach($fotos as $eachFoto) {
                fwrite($myfile, "\t<image:image>".PHP_EOL);
                $urlFoto="\t\t".'<image:loc>https://catedraldesantiago.online/'.'storage/fotos/' . $each->id . '/original/' . $eachFoto->url.'</image:loc>';
                fwrite($myfile,$urlFoto.PHP_EOL);
                fwrite($myfile, "\t</image:image>".PHP_EOL);
            }







            fwrite($myfile, "</url>\n");
        }

        fwrite($myfile, "</urlset>\n");
        fclose($myfile);







        return 0;
    }



}

