<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateJsApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:jsapi {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new JS API Function';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $stub = file_get_contents(base_path("stubs/jsapi.stub"));
        $filename = $this->getClassName($this->argument("name"));
        $stub = str_replace("{{ API }}",$filename,$stub);
        $path = resource_path("js\\api\\".str_replace("/","\\",$this->argument("name")).".js");
        $directory = dirname($path);
        if (!file_exists($path)) {
            if (!is_dir($directory)) {
                mkdir($directory,0777,true);
            }
            file_put_contents($path,$stub,FILE_APPEND);
            $this->info("JS API [".$path."] created successfully");
        } else {
            $this->error("JS API already exists.");
        }
    }

    function getClassName(string $name) : string {
        $name = str_replace("/","\\",$this->argument("name"));
        $name = explode("\\",$name);
        $name = end($name);
        return $name;
    }
}
