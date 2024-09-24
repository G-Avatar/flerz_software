<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateVueComponentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:component {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Vue component';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $stub = file_get_contents(base_path("stubs/component.stub"));
        $filename = $this->getClassName($this->argument("name"));
        $stub = str_replace("{{ StoreName }}",$filename,$stub);
        $path = resource_path("js\\components\\".str_replace("/","\\",$this->argument("name")).".vue");
        $directory = dirname($path);
        if (!file_exists($path)) {
            if (!is_dir($directory)) {
                mkdir($directory,0777,true);
            }
            file_put_contents($path,$stub,FILE_APPEND);
            $this->info("Vue component [".$path."] created successfully");
        } else {
            $this->error("Vue component already exists.");
        }
    }

    function getClassName(string $name) : string {
        $name = str_replace("/","\\",$this->argument("name"));
        $name = explode("\\",$name);
        $name = end($name);
        return $name;
    }
}
