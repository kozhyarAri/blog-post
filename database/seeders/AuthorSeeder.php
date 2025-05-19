<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'kozhyar ari',
            'email' => 'kozhyar@gmail.com'
        ]);
        Author::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com'
        ]);
        Author::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com'
        ]);
        Author::create([
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com'
        ]);
        Author::create([
            'name' => 'Bob Williams',
            'email' => 'bob.williams@example.com'
        ]);
        Author::create([
            'name' => 'Charlie Brown',
            'email' => 'charlie.brown@example.com'
        ]);
        Author::create([
            'name' => 'Diana Prince',
            'email' => 'diana.prince@example.com'
        ]);
        Author::create([
            'name' => 'Ethan Hunt',
            'email' => 'ethan.hunt@example.com'
        ]);
        Author::create([
            'name' => 'Fiona Gallagher',
            'email' => 'fiona.gallagher@example.com'
        ]);
        Author::create([
            'name' => 'George Martin',
            'email' => 'george.martin@example.com'
        ]);
        Author::create([
            'name' => 'Hannah Lee',
            'email' => 'hannah.lee@example.com'
        ]);
        Author::create([
            'name' => 'Ian Wright',
            'email' => 'ian.wright@example.com'
        ]);
        Author::create([
            'name' => 'Julia Roberts',
            'email' => 'julia.roberts@example.com'
        ]);
        Author::create([
            'name' => 'Kevin Spacey',
            'email' => 'kevin.spacey@example.com'
        ]);
        Author::create([
            'name' => 'Laura Palmer',
            'email' => 'laura.palmer@example.com'
        ]);
        Author::create([
            'name' => 'Mike Ross',
            'email' => 'mike.ross@example.com'
        ]);
        Author::create([
            'name' => 'Nina Simone',
            'email' => 'nina.simone@example.com'
        ]);
        Author::create([
            'name' => 'Oscar Wilde',
            'email' => 'oscar.wilde@example.com'
        ]);
        Author::create([
            'name' => 'Paula Abdul',
            'email' => 'paula.abdul@example.com'
        ]);
        Author::create([
            'name' => 'Quentin Blake',
            'email' => 'quentin.blake@example.com'
        ]);
    }
}
