<?php

use App\Models\SubjectArea;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_areaables', function (Blueprint $table) {
            $table->foreignIdFor(SubjectArea::class)->constrained();
            $table->integer('subject_areaable_id');
            $table->string('subject_areaable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_areaables');
    }
};
