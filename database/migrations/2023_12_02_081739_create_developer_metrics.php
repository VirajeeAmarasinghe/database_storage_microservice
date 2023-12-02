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
        Schema::create('developer_metrics', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('repo_name');
            $table->integer('commit_frequency');
            // Add other metric columns (code_review_involvement, issue_resolution_time, code_churn, etc.)
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
        Schema::dropIfExists('developer_metrics');
    }
};
