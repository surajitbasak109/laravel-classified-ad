<?php
  
  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;
  
  class CreateAdpostsTable extends Migration
  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('adposts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->foreignId('category_id')
          ->constrained()
          ->onDelete('cascade');
        $table->string('ad_type');
        $table->double('price');
        $table->text('description');
        $table->string('ad_image');
        $table->string('name');
        $table->string('email');
        $table->string('phone');
        $table->string('address');
        $table->foreignId('country_id')
          ->constrained()
          ->onDelete('cascade');
        $table->foreignId('state_id')
          ->constrained()
          ->onDelete('cascade');
        $table->foreignId('city_id')
          ->constrained()
          ->onDelete('cascade');
        $table->foreignId('user_id')
          ->constrained()
          ->onDelete('cascade');
        $table->boolean('active');
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
      Schema::dropIfExists('adposts');
    }
  }
