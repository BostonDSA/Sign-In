<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectEventsAndAttendees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attendees', function (Blueprint $table) {

            # Add a new INT field called `event_id` that has to be unsigned (i.e. positive)
            $table->integer('event_id')->unsigned()->nullable();

            # This field `event_id` is a foreign key that connects to the `id` field in the `events` table
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendees', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('attendees_event_id_foreign');

            $table->dropColumn('event_id');
        });
    }
}
