<?php

// database/migrations/xxxx_xx_xx_create_pessoas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nome');
            $table->string('cargo');
            $table->string('setor');
            $table->string('vinculo');
            $table->string('matricula');
            $table->string('sala');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
