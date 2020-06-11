<?php

use Illuminate\Database\Seeder;
use Kreait\Firebase\Factory;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Services\FirebaseService;

class UsersTableSeeder extends Seeder
{
    protected $firebase;
    protected $database;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebase = $firebaseService->firebase;
        $this->database = $this->firebase->createDatabase();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            $now  = Carbon::now();
            $userRef = $this->database->getReference('users')->push([
                'email' => $faker->unique()->email,
                'password' => bcrypt('1234567'),
                'created_at' => $now,
                'updated_at' => '',
                'deleted_at' => '',
            ]);
        }
    }
}