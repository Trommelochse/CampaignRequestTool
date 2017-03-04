<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            //Main
            $table->increments('id');
            $table->string('state')->default('draft');
            $table->string('title');
            $table->string('segment', 30)->nullable();
            $table->text('body')->nullable();
            $table->string('type')->nullable();
            $table->string('relatedCampaign')->nullable();
            $table->boolean('sb')->default(0)->nullable();
            $table->boolean('ca')->default(0)->nullable();
            $table->boolean('vca')->default(0)->nullable();
            $table->boolean('lca')->default(0)->nullable();
            $table->boolean('vs')->default(0)->nullable();
            $table->boolean('pk')->default(0)->nullable();
            $table->boolean('mx')->default(0)->nullable();
            $table->boolean('in')->default(0)->nullable();
            $table->boolean('mw')->default(0)->nullable();
            $table->boolean('native')->default(0)->nullable();
            $table->boolean('web')->default(0)->nullable();
            $table->boolean('meeting')->default(0)->nullable();
            $table->string('startDate')->nullable();
            $table->string('endDate')->default(0)->nullable();
            $table->boolean('recurring')->default(0)->nullable();
            $table->string('recurringBody')->nullable();

            // Localisation
            $table->boolean('logo')->nullable();
            $table->text('logoBody')->nullable();
            $table->string('dkBody')->nullable();
            $table->string('svBody')->nullable();
            $table->string('noBody')->nullable();
            $table->string('fiBody')->nullable();
            $table->string('deBody')->nullable();
            $table->string('enBody')->nullable();
            $table->boolean('dk')->default(0)->nullable();
            $table->boolean('sv')->default(0)->nullable();
            $table->boolean('no')->default(0)->nullable();
            $table->boolean('fi')->default(0)->nullable();
            $table->boolean('de')->default(0)->nullable();
            $table->boolean('en')->default(0)->nullable();

            //Creative
            $table->text('creativeBody')->nullable();

            $table->boolean('onsite')->default(0)->nullable();
            $table->boolean('lp')->default(0)->nullable();
            $table->boolean('nl')->default(0)->nullable();
            $table->boolean('oms')->default(0)->nullable();
            $table->boolean('sms')->default(0)->nullable();
            $table->boolean('push')->default(0)->nullable();
            $table->boolean('blog')->default(0)->nullable();
            $table->boolean('some')->default(0)->nullable();

            $table->string('onsiteBody')->nullable();
            $table->text('lpBody')->nullable();
            $table->string('lpUrl')->nullable();
            $table->string('lpSimilar')->nullable();
            $table->text('nlBody')->nullable();
            $table->text('omsBody')->nullable();
            $table->text('smsBody')->nullable();
            $table->text('pushBody')->nullable();
            $table->text('blogBody')->nullable();
            $table->string('blogCategory')->nullable();
            $table->text('someBody')->nullable();

            $table->boolean('aff')->default(0)->nullable();
            $table->boolean('extba')->default(0)->nullable();
            $table->boolean('lbm')->default(0)->nullable();
            $table->boolean('print')->default(0)->nullable();
            $table->boolean('dm')->default(0)->nullable();
            $table->boolean('tvc')->default(0)->nullable();

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
        Schema::dropIfExists('campaigns');
    }
}
