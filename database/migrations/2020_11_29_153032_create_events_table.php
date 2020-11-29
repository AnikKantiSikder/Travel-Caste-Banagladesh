<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('division_id');
            $table->string('event_date');
            $table->string('event_name');
            $table->string('slug')->nullable();
            $table->string('district_name')->nullable();
            $table->longText('details');
            $table->longText('suggestion');
            $table->string('no_members');
            $table->string('cost');
            $table->string('contact_number');
            $table->string('image')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
