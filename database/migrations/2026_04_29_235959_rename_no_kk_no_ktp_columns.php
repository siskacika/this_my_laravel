<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement('ALTER TABLE masyarakats CHANGE no_kk nomor_kk VARCHAR(255) NOT NULL');
            DB::statement('ALTER TABLE masyarakats CHANGE no_ktp nomor_ktp VARCHAR(255) NOT NULL');
        } elseif ($driver === 'sqlite') {
            DB::statement('ALTER TABLE masyarakats RENAME COLUMN no_kk TO nomor_kk');
            DB::statement('ALTER TABLE masyarakats RENAME COLUMN no_ktp TO nomor_ktp');
        } else {
            Schema::table('masyarakats', function (Blueprint $table) {
                $table->renameColumn('no_kk', 'nomor_kk');
                $table->renameColumn('no_ktp', 'nomor_ktp');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement('ALTER TABLE masyarakats CHANGE nomor_kk no_kk VARCHAR(255) NOT NULL');
            DB::statement('ALTER TABLE masyarakats CHANGE nomor_ktp no_ktp VARCHAR(255) NOT NULL');
        } elseif ($driver === 'sqlite') {
            DB::statement('ALTER TABLE masyarakats RENAME COLUMN nomor_kk TO no_kk');
            DB::statement('ALTER TABLE masyarakats RENAME COLUMN nomor_ktp TO no_ktp');
        } else {
            Schema::table('masyarakats', function (Blueprint $table) {
                $table->renameColumn('nomor_kk', 'no_kk');
                $table->renameColumn('nomor_ktp', 'no_ktp');
            });
        }
    }
};
