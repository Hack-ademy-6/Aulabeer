<?php

use App\Models\Beer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->float('price');
            $table->timestamps();

        });

        $beers = [
            ['name'=>'Mahou','type'=>'rubia','price'=>2.5],
            ['name'=>'Estrella Galicia','type'=>'rubia','price'=>3],
            ['name'=>'Alhambra','type'=>'rubia','price'=>2],
            ['name'=>'Leffe','type'=>'red','price'=>3],
          ];
          foreach($beers as $beer){
              Beer::create($beer);
          }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
