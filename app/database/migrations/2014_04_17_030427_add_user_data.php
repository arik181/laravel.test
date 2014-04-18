<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserData extends Migration {

	public function up()
	{
        DB::table('users')->insert(
            array(
                'email' => 'arik181@arik181.net',
                'name'  => 'Arik Oneeightone'
            )
        );
	}

	public function down()
	{
        DB::table('users')->delete();
	}

}
