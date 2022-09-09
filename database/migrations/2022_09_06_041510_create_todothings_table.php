<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todothings', function (Blueprint $table) {
            $table->id();
            $table->date("deadline");
            $table->text("title");
            $table->longText("detail");
            $table->tinyInteger("user_id");
        });
        /*tinyIntegerは認証済みユーザー固有の情報を取得
        するためにTodothingテーブルにuser_id
        を追加した。 */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todothings');
    }
};
