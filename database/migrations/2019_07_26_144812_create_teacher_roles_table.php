<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_roles', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('Teacher_id');
            $table->unsignedInteger('Role_id');
            $table->foreign('Teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('Role_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('teacher_roles');
    }
}
