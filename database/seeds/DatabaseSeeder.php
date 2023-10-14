<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> Mathematics >> Nursery',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> Mathematics >> kindergarten 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> Mathematics >> kindergarten 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> English >> Nursery',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> English >> kindergarten 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> English >> kindergarten 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> Science >> Nursery',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> Science >> kindergarten 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Pre-School >> Science >> kindergarten 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> Mathematics >> Primary 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> Mathematics >> Primary 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> Mathematics >> Primary 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> English >> Primary 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> English >> Primary 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> English >> Primary 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> Integrated Science >> Primary 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> Integrated Science >> Primary 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Primary School >> Integrated Science >> Primary 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'JHS >> English >> JHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'JHS >> English >> JHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'JHS >> English >> JHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'JHS >> Mathematics >> JHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'JHS >> Mathematics >> JHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'JHS >> Mathematics >> JHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Core Mathematics >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Core Mathematics >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Core Mathematics >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> English >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> English >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> English >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Integrated Science >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Integrated Science >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Integrated Science >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Elective Mathematics >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Elective Mathematics >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Elective Mathematics >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Physics >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Physics >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Physics >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Chemistry >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Chemistry >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Chemistry >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Biology >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Biology >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Biology >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Economics >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Economics >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Economics >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Financial Accounting >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Financial Accounting >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Cost Accounting >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Cost Accounting >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Cost Accounting >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Government >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Government >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Government >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Literature In English >> SHS 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Literature In English >> SHS 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'SHS >> Literature In English >> SHS 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Professional >> Computer Hardware and Networking >> Part 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Professional >> Computer Hardware and Networking >> Part 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Professional >> Computer Hardware and Networking >> Part 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Professional >> Software Engineering >> Part 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Professional >> Software Engineering >> Part 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Professional >> Software Engineering >> Part 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Garment Making >> Part 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Garment Making >> Part 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Garment Making >> Part 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Sewing >> Part 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Sewing >> Part 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Sewing >> Part 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Leather >> Part 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Leather >> Part 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'course_code' => Str::upper(Str::random(4)),
                'course_name' => 'Vocational >> Leather >> Part 3',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'Cyril Gardesey',
                'email' => 'cyrilgardesey@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ]
        ]);
    }
}
