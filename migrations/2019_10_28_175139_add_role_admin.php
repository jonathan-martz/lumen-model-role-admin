<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddRoleAdmin
 */
class AddRoleAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * @todo fix bug if database migrations for user_role is not executed
         */
        if(Schema::hasTable('user_role')) {
            $count = DB::table('user_role')->where('name', '=', 'admin')->count();
            if($count === 0) {
                DB::table('user_role')->insert([
                    'name' => 'admin'
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
