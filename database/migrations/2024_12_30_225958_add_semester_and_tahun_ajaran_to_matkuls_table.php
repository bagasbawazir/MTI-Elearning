<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSemesterAndTahunAjaranToMatkulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matkuls', function (Blueprint $table) {
            $table->string('semester')->after('sks'); // Menambahkan kolom semester setelah kolom sks
            $table->string('tahun_ajaran')->after('semester'); // Menambahkan kolom tahun_ajaran setelah kolom semester
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matkuls', function (Blueprint $table) {
            $table->dropColumn('semester'); // Menghapus kolom semester jika migrasi di-rollback
            $table->dropColumn('tahun_ajaran'); // Menghapus kolom tahun_ajaran jika migrasi di-rollback
        });
    }
}
