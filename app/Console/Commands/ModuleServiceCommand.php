<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ModuleServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make-service
                            {nameService : service name to create}
                            {nameModule : the module name containing the service to be created}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create new service';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $nameService = $this->argument('nameService');
        $nameModule = $this->argument('nameModule');

        $this->service($nameService, $nameModule);
        return Command::SUCCESS;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    protected function getStub($type)
    {
        return file_get_contents(base_path("stubs/$type.stub"));
    }

    protected function service($nameService, $nameModule)
    {
        if(!file_exists($path = base_path("/Modules/{$nameModule}/Services"))) {
            mkdir($path, 0777, true);
        }
        $requestTemplate = str_replace(
            ['{{nameModule}}'],
            ['{{nameService}}'],
            $this->getStub('service')
        );
        file_put_contents(base_path("/Modules/{$nameModule}/Services/{$nameService}Service.php"), $requestTemplate);
    }

    protected function interface($name, $addFame)
    {
        if(!file_exists($path = app_path("/Domains/{$name}/Interface"))) {
            mkdir($path, 0777, true);
        }
        $requestTemplate = str_replace(
            ['{{modelName}}'],
            [$addFame ?? $name],
            $this->getStub('interface')
        );
        file_put_contents(app_path("/Domains/{$name}/Interface/".($addFame ?? $name)."ServiceInterface.php"), $requestTemplate);
    }
}
