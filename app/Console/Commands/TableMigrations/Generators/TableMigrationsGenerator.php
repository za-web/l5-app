<?php namespace App\Console\Commands\TableMigrations\Generators;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;

class TableMigrationsGenerator
{
    
    
    /**
     * Type of columns in table
     *
     * @var array
     */
    protected $columnsPatterns = ['/int/', '/varchar/'];
    
    /** 
     * To replacement
     * 
     * @var array
     */
    protected $replaceColumnsTypes = ['integer', 'string'];
    
    protected $table;
    /**
     * Construct
     */
    public function __construct($table) 
    {
        $this->files = new Filesystem;
        $this->table = $table;
    }
    
    /**
     * Run methods
     * 
    */
    public function make()
    {
        return $this->createMigratonsString("users");
    }
    
    /**
     * 
     * @param string $column
     * @return string
     */
    protected function replaceTypes($column)
    {
        if($column->Key == "PRI")
        {
            $type = explode('(', preg_replace('/int/', 'increment', $column->Type ));
            return '$this->'.$type[0]."('".$column->Field."');\n";
        }
        else
        {
            
            $type = explode('(', preg_replace($this->columnsPatterns, $this->replaceColumnsTypes, $column->Type));
            
            if(preg_match("/string/", $type[0]))
            {
                return '$this->'.$type[0]."('".$column->Field."', ".$type[1].";\n";
            }
            
            return '$this->'.$type[0]."('".$column->Field."');\n";
        }
    }
    
    /**
     * Get columns from table
     * 
     * @param string $table
     * @return array
     */
    protected function getColumns($table)
    {
        return DB::select(DB::raw("SHOW COLUMNS FROM {$table}"));
    }
    
    /**
     * 
     * @param string $table
     */
    protected function createMigratonsString()
    {
        $this->writeFile($this->getStub("migration.stub"), $this->table.".php");
    }
    
    /**
     * Get the stub with replacement {{name}}
     * 
     * @param string $stub
     * @param string $name
     * @return string
     */
    protected function getStub($stub)
    {
        $migrateString = "";
        $stub = $this->files->get(__DIR__.'/stubs/'.$stub);
        foreach($this->getColumns($this->table) as $column)
        {
            $migrateString.="    ".$this->replaceTypes($column);
        }
        $stub = str_replace("{{columns}}", $migrateString, $stub);
        return str_replace("{{table}}", $this->table, $stub) ;
    }
    
    /**
     * 
     * @param string $stub
     * @param string $name
     * @param string $path
     * @return void
     */
    protected function writeFile($stub, $name)
    {
        $name = str_replace('\\', DIRECTORY_SEPARATOR, $name);
        if (!$this->files->exists($fullPath = "database/migrations"."/{$name}"))
        {
            return $this->files->put($fullPath, $stub);
        }
    }
}
