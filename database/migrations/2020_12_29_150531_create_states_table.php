<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->unique();
            $table->string('initials', 2)->unique();
        });


        DB::statement("INSERT INTO states (id, initials, name) VALUES
        (1, 'AC', 'Acre'),
        (2, 'AL', 'Alagoas'),
        (3, 'AM', 'Amazonas'),
        (4, 'AP', 'Amapá'),
        (5, 'BA', 'Bahia'),
        (6, 'CE', 'Ceará'),
        (7, 'DF', 'Distrito Federal'),
        (8, 'ES', 'Espírito Santo'),
        (9, 'GO', 'Goiás'),
        (10, 'MA', 'Maranhão'),
        (11, 'MG', 'Minas Gerais'),
        (12, 'MS', 'Mato Grosso do Sul'),
        (13, 'MT', 'Mato Grosso'),
        (14, 'PA', 'Pará'),
        (15, 'PB', 'Paraíba'),
        (16, 'PE', 'Pernambuco'),
        (17, 'PI', 'Piauí'),
        (18, 'PR', 'Paraná'),
        (19, 'RJ', 'Rio de Janeiro'),
        (20, 'RN', 'Rio Grande do Norte'),
        (21, 'RO', 'Rondônia'),
        (22, 'RR', 'Roraima'),
        (23, 'RS', 'Rio Grande do Sul'),
        (24, 'SC', 'Santa Catarina'),
        (25, 'SE', 'Sergipe'),
        (26, 'SP', 'São Paulo'),
        (27, 'TO', 'Tocantins');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
