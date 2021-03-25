<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToProyectsAndTask extends Migration
{

    public function up()
    {
        Schema::table('proyects', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->unsigned()->after('id');
        });

        Schema::table(  'tasks', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->unsigned()->after('id');
        });
    }
    public function down()
    {
        Schema::table('proyects', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
