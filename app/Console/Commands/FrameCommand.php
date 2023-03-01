<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class FrameCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:frame
                            {name : Class (singular) for example User}
                            {--relationship : Create relationship folder App/Domains}
                            {--enum : Create enum folder App/Domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CRUD operations';

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
        $name = $this->argument('name');
        $optRelationship = $this->option('relationship');
        $optEnum = $this->option('enum');

        if ($optRelationship) {
            $this->relationship($name);
        }

        if ($optEnum) {
            $this->enum($name);
        }

        $this->model($name);
        $this->controller($name);
        $this->request($name);
        $this->service($name);

        $this->info("The create Domains/{$name} command was successful!");

        return Command::SUCCESS;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function controller($name)
    {
        if(!file_exists($path = app_path("/Domains/{$name}/Http/Controllers"))) {
            mkdir($path, 0777, true);
        }
        $controllerTemplate = str_replace(
            ['{{modelName}}'],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Controller')
        );

        file_put_contents(app_path("/Domains/{$name}/Http/Controllers/{$name}Controller.php"), $controllerTemplate);
    }

    protected function model($name)
    {
        if(!file_exists($path = app_path("/Domains/{$name}/Models"))) {
            mkdir($path, 0777, true);
        }
        $modelTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Model')
        );

        file_put_contents(app_path("/Domains/{$name}/Models/{$name}.php"), $modelTemplate);
    }

    protected function request($name)
    {
        if(!file_exists($path = app_path("/Domains/{$name}/Http/Requests"))) {
            mkdir($path, 0777, true);
        }
        $requestTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Request')
        );
        file_put_contents(app_path("/Domains/{$name}/Http/Requests/{$name}Request.php"), $requestTemplate);
    }

    protected function relationship($name)
    {
        if(!file_exists($path = app_path("/Domains/{$name}/Traits/Relationships"))) {
            mkdir($path, 0777, true);
        }
        $requestTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Relationship')
        );
        file_put_contents(app_path("/Domains/{$name}/Traits/Relationships/{$name}Relationship.php"), $requestTemplate);
    }

    protected function enum($name)
    {
        if(!file_exists($path = app_path("/Domains/{$name}/Enums"))) {
            mkdir($path, 0777, true);
        }
        $requestTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Enum')
        );
        file_put_contents(app_path("/Domains/{$name}/Enums/{$name}Enum.php"), $requestTemplate);
    }

    protected function service($name)
    {
        if(!file_exists($path = app_path("/Domains/{$name}/Services"))) {
            mkdir($path, 0777, true);
        }
        $requestTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Service')
        );
        file_put_contents(app_path("/Domains/{$name}/Services/{$name}Service.php"), $requestTemplate);
    }
}
