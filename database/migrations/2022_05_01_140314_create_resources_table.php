<?php

use App\Models\Group;
use App\Models\ResourceType;
use App\Models\User;
use App\Models\Website;
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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Website::class)->constrained();
            $table->foreignIdFor(Group::class)->nullable()->constrained();
            $table->foreignIdFor(ResourceType::class)->constrained();
            $table->string('title');
            $table->text('description');
            $table->string('key_image');
            $table->string('author');
            $table->boolean('group_featured')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('form_united_way')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resources');
    }
};
