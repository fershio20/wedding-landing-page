<?php namespace Fvera\WeddingManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFveraWeddingmanagerMusica extends Migration
{
    public function up()
    {
        Schema::create('fvera_weddingmanager_musica', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fvera_weddingmanager_musica');
    }
}
