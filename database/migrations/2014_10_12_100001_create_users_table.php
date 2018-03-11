<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateUsersTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $now = Carbon::now();
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');            
            $table->string('password');
            $table->string('email');
            $table->date('birthday')->nullable('$now');
            $table->integer('status')->comment('0 => inativo, 1 => ativo')->default(1);
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->date('dt_admissao')->nullable('$now');
            $table->string('imagem')->nullable();
            $table->integer('reset')->nullable();
            $table->rememberToken();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
