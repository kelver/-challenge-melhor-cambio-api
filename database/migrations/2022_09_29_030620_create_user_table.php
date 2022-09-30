<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up ()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->uuid();
                $table->string('name');
                $table->string('username')->unique();
                $table->string('avatar_url');
                $table->string('about');
                $table->string('user_id');
                $table->bigInteger('repos_count')->unsigned();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down ()
        {
            Schema::dropIfExists('users');
        }
    };
