<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     * @return  void
     */
    public function up()
    {
        Schema::table('shop_addresses', function (Blueprint $table) {
            $table->string('label')->after('is_primary')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('shop_addresses', function (Blueprint $table) {
            $table->dropColumn('label');
        });
    }
};
