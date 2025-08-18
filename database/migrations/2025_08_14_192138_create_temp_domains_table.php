<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('temp_domains', function (Blueprint $t) {
            $t->id();
            $t->string('domain')->unique();
            $t->boolean('enabled')->default(true);
            $t->timestamps();
        });

        Schema::create('temp_mailboxes', function (Blueprint $t) {
            $t->id();
            $t->string('local_part');                 // e.g. x7p9kz
            $t->foreignId('temp_domain_id')->constrained()->cascadeOnDelete();
            $t->string('full_address')->unique();     // x7p9kz@yourdomain.tld
            $t->timestamp('expires_at')->nullable();
            $t->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $t->timestamps();
            $t->index(['expires_at']);
        });

        Schema::create('temp_emails', function (Blueprint $t) {
            $t->id();
            $t->foreignId('temp_mailbox_id')->constrained()->cascadeOnDelete();
            $t->string('message_id')->nullable()->index();
            $t->string('from_name')->nullable();
            $t->string('from_email')->nullable()->index();
            $t->string('subject')->nullable();
            $t->json('to')->nullable();
            $t->json('cc')->nullable();
            $t->json('headers')->nullable();
            $t->longText('text_body')->nullable();
            $t->longText('html_body')->nullable();        // sanitize on render
            $t->timestamp('received_at')->nullable();
            $t->timestamps();
        });

        Schema::create('temp_attachments', function (Blueprint $t) {
            $t->id();
            $t->foreignId('temp_email_id')->constrained()->cascadeOnDelete();
            $t->string('filename')->nullable();
            $t->string('mime')->nullable();
            $t->unsignedBigInteger('size')->default(0);
            $t->string('disk')->default('public');
            $t->string('path'); // storage path
            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('temp_attachments');
        Schema::dropIfExists('temp_emails');
        Schema::dropIfExists('temp_mailboxes');
        Schema::dropIfExists('temp_domains');
    }
};
