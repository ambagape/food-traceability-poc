<?php

use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Tag::create(['name' => 'Farmer','description' => 'Farm owner' ]);
        Tag::create(['name' => 'Packer','description' => 'Packer' ]);
        Tag::create(['name' => 'Distributor','description' => 'Carries out distribution' ]);
        Tag::create(['name' => 'Retailer','description' => 'Involved with retailing' ]);
        Tag::create(['name' => 'Wholesaler','description' => 'Wholesaler' ]);
        Tag::create(['name' => 'Consumer','description' => 'Consumer' ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
