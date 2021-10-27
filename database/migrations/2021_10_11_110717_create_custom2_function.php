<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCustom2Function extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "CREATE FUNCTION `FIND_SET_EQUALS`(`s1` VARCHAR(200), `s2`  VARCHAR(200))
              RETURNS TINYINT(1)
              LANGUAGE SQL
              BEGIN
                    DECLARE a INT Default 0 ;
                      DECLARE isEquals TINYINT(1) Default 0 ;
                    DECLARE str VARCHAR(255);
                    IF s1 IS NOT NULL AND s2 IS NOT NULL THEN
                       simple_loop: LOOP
                           SET a=a+1;
                           SET str= SPLIT_STR(s2,',',a);
                           IF str='' THEN
                              LEAVE simple_loop;
                           END IF;
                           #Do  check is in set
                           IF FIND_IN_SET(str, s1)!=0 THEN
                              SET isEquals=1;
                               LEAVE simple_loop;
                           END IF;
                      END LOOP simple_loop;
                    END IF;
                  RETURN isEquals;
              END;
              $$
              DELIMITER ;
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
        DB::unprepared('DROP FUNCTION IF EXISTS FIND_SET_EQUALS;');
    }
}
