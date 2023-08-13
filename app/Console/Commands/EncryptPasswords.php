<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class EncryptPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:encrypt-passwords';
    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch passwords from users table, encrypt them, and save again';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        // Encrypt and update passwords
        foreach ($users as $user) {
            if (!$this->passwordIsEncrypted($user->password)) {
                $encryptedPassword = Hash::make($user->password);
                $user->update(['password' => $encryptedPassword]);
            }
        }

        $this->info('Passwords have been encrypted and updated successfully.');
    }

    private function passwordIsEncrypted($password)
    {
         // Get information about the hashed password
        $info = Hash::info($password);

        // Check if the algorithm used is bcrypt
        return $info['algo'] === PASSWORD_BCRYPT;
    }
}
