<?php

namespace Skowei\Ui\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "sk/ui:install {ver=blade} {--force=false}";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "install skowei ui package";

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
        switch($this->argument('ver'))
        {
            case 'blade':
                $this->InstallBlade();
            break;
            case 'vue':
                $this->InstallVue();
            break;
            case 'react':
                $this->InstallReact();
            break;
            default:
                $this->ErrorInfo();
            break;
        }
    }
    private function InstallBlade()
    {
        $bar = $this->output->createProgressBar(5);

        $this->StartInfo();
        $bar->start();
        $this->info("");

        $this->ShowInfo("  INSTALLING LARAVEL/BREEZE PACKAGE   ", "blue");
        $bar->advance();

            Artisan::call('breeze:install');

        $this->ShowInfo("     INSTALLING SKOWEI/UI PACKAGE     ", "blue");
        $bar->advance();

            Artisan::call('vendor:publish --tag=sk-ui-blade --force');

        $this->ShowInfo("    INSTALLING FONTAWESOME PACKAGE    ", "blue");
        $bar->advance();

            shell_exec('npm install @fortawesome/fontawesome-free');

        $this->ShowInfo("     RUNNING NPM INSTALL COMMAND      ", "blue");
        $bar->advance();

            shell_exec('npm install');

        $this->EndInfo();
        $bar->advance();
        $bar->finish(); 
        
        $this->info("");
        $this->ShowInfo(" EXECUTE NPM RUN DEV TO COMPILE ASSETS", "cyan");
    }
    private function InstallVue()
    {
        $this->info("<fg=red>======================================");
        $this->info("<bg=red>       <bg=red;fg=green>VUE<bg=red> ISN'T SUPPORTED YET        ");
        $this->info("<fg=red>======================================");
    }
    private function InstallReact()
    {
        $this->info("<fg=red>======================================");
        $this->info("<bg=red>      <bg=red;fg=cyan>REACT<bg=red> ISN'T SUPPORTED YET       ");
        $this->info("<fg=red>======================================");
    }


    private function StartInfo()
    {
        if($this->option("force")){
            $this->info("<fg=magenta>======================================");
            $this->info("<bg=magenta>     INSTALLING SKOWEI UI PACKAGE     ");
            $this->info("<fg=magenta>======================================");
        }else{
            $this->info("<fg=magenta>======================================");
            $this->info("<bg=magenta> <bg=magenta;fg=red>FORCED<bg=magenta> INSTALLING SKOWEI UI PACKAGE  ");
            $this->info("<fg=magenta>======================================");
        }
    }

    private function EndInfo()
    {
        $this->info("<fg=green>======================================");
        $this->info("<bg=green>    SUCCESSFULLY INSTALLED PACKAGE    ");
        $this->info("<fg=green>======================================");
    }
    private function ErrorInfo()
    {
        $var = $this->argument("ver");
        $this->info("<fg=red>======================================");
        $this->info("<bg=red>    NOT SUPPORTED LAYOUT ".$var."     ");
        $this->info("<fg=red>======================================");
    }
    private function ShowInfo($tmp, $color)
    {
        $this->info("");
        $this->info("<fg=".$color.">======================================");
        $this->info("<bg=".$color.">".$tmp);
        $this->info("<fg=".$color.">======================================");
    }
}
