<?php

namespace App\Console\Commands\TableMigrations;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use App\Console\Commands\TableMigrations\Generators\TableMigrationsGenerator;

class TableMigrations extends Command 
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'migrate:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate migrations from an existing database';

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
    public function fire()
    {
        $generator = new TableMigrationsGenerator($this->argument('table'));
        $generator->make();
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments() {
        return [
            ['table', InputArgument::REQUIRED, 'Table from which to create the migration'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }

}
