<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acl_permissions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid');
            $table->string('name', 50);
            $table->string('label', 200);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('acl_permission_acl_role', function (Blueprint $table) {
            $table->uuid('uid');

            $table->unsignedBigInteger('acl_permission_id');
            $table->foreign('acl_permission_id')->references('id')->on('acl_permissions')->onDelete('cascade');

            $table->unsignedBigInteger('acl_role_id');
            $table->foreign('acl_role_id')->references('id')->on('acl_roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acl_permission_acl_role');
        Schema::dropIfExists('acl_permissions');
    }
}
