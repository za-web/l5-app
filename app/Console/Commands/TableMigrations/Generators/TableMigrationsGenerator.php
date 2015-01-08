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
            $field = '$this->'.$type[0]."('".$column->Field."')";
        }
        else
        {
            
            $type = explode('(', preg_replace($this->columnsPatterns, $this->replaceColumnsTypes, $column->Type));
            
            $field =  '$this->'.$type[0]."('".$column->Field."')";

            if(preg_match("/string/", $type[0]))
            {
                $field = '$this->'.$type[0]."('".$column->Field."', ".$type[1];
            }
            
        }
        if($column->Null == "YES")
        {
            $field.="->nullable()";
        }
        if(preg_match("/unsigned/", $column->Type))
        {
        
            $field.="->unsigned()";
        
        }
     
        return $field.";\n";
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
        $stub = $this->files->get(__DIR__.'/stubs/'.$stub);
        return $this->replaceStub($stub, ['{{columns}}', '{{table}}'], [$this->getMigrationString(), $this->table]);
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
        return $this->files->put( "database/migrations"."/{$name}", $stub);
        
    }
    
    /**
     * Get code for migration.
     * 
     * @return string
     */
    protected function getMigrationString()
    {
        $migrateString = "";
        foreach($this->getColumns($this->table) as $column)
        {
            $migrateString.=$this->replaceTypes($column);
        }
        return $migrateString;
    }
    
    /**
     * Get the stub with replacement
     * 
     * @param array $vars
     * @param array $replacement
     * @return string
     */
    protected function replaceStub($stub, array $vars, array $replacement)
    {
        return str_replace($vars, $replacement, $stub);
    }
    
  
    
}
