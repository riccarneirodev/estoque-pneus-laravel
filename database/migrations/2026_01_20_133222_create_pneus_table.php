<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('pneus', function (Blueprint $table) {
            $table->string('medida')->after('modelo');
            $table->string('status')->default('em_uso')->after('vida');
            $table->integer('km_rodado')->default(0)->after('status');
            $table->date('data_instalacao')->nullable()->after('km_rodado');
        });
    }

    public function down(): void
    {
        Schema::table('pneus', function (Blueprint $table) {
            $table->dropColumn([
                'medida',
                'status',
                'km_rodado',
                'data_instalacao'
            ]);
        });
    }
};