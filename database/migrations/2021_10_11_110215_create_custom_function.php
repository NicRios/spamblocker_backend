<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCustomFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "CREATE FUNCTION SPLIT_STR(
            x VARCHAR(255),
            delim VARCHAR(12),
            pos INT
          )
          RETURNS VARCHAR(255)
          RETURN REPLACE(SUBSTRING(SUBSTRING_INDEX(x, delim, pos),
                 LENGTH(SUBSTRING_INDEX(x, delim, pos -1)) + 1),
                 delim, '');
                ";

        DB::unprepared($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP FUNCTION IF EXISTS SPLIT_STR;');
    }
}
