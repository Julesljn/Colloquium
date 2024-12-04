<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Carbon\Carbon;
use Log;

class DeleteExpiredUserAccounts implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $now = Carbon::now();

        $expiredUsers = User::where('email_verification_expires_at', '<', $now)
                            ->whereNull('email_verified_at')
                            ->get();

        Log::info('Nombre d\'utilisateurs expirés trouvés : ' . $expiredUsers->count());

        foreach ($expiredUsers as $user) {
            $user->delete();
        }
    }
}
