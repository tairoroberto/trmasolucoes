<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->truncate(); 
        $users = array(
            array('id' => '1','name' => 'Admin','email' => 'admin@trmasolucoes.com.br','password' => '$2y$10$BeRqRBo0j6RxSXOhuzyq/elglI8w4WYvUyLeNM1RHL6q21KEL6HN6','remember_token' => '0pgG0Z1TX2ewynyqgqMxy905tYrQU9Il0kV5wDAHOyiC1SW3BN08kFFBfqjr', 'role_id' => 1,'created_at' => '2016-07-02 13:12:30','updated_at' => '2016-07-02 23:21:27'),
            array('id' => '2','name' => 'Cliente','email' => 'cliente@trmasolucoes.com.br','password' => '$2y$10$BeRqRBo0j6RxSXOhuzyq/elglI8w4WYvUyLeNM1RHL6q21KEL6HN6','remember_token' => '0pgG0Z1TX2ewynyqgqMxy905tYrQU9Il0kV5wDAHOyiC1SW3BN08kFFBfqjr', 'role_id' => 5,'created_at' => '2016-07-02 13:12:30','updated_at' => '2016-07-02 23:21:27')
        );
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
