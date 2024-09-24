<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateStateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:state {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new JS State';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $stub = file_get_contents(base_path("stubs/state.stub"));
        $filename = $this->getClassName($this->argument("name"));
        $stub = str_replace("{{ StoreName }}",$filename,$stub);
        $path = resource_path("js\\state\\".str_replace("/","\\",$this->argument("name")).".js");
        $directory = dirname($path);
        if (!file_exists($path)) {
            if (!is_dir($directory)) {
                mkdir($directory,0777,true);
            }
            file_put_contents($path,$stub,FILE_APPEND);
            $this->info("JS State [".$path."] created successfully");
        } else {
            $this->error("JS State already exists.");
        }
    }

    function getClassName(string $name) : string {
        $name = str_replace("/","\\",$this->argument("name"));
        $name = explode("\\",$name);
        $name = end($name);
        return $name;
    }
}
