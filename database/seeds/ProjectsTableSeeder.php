<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('projects')->delete();

        $projects = array(
            ['id' => 1001, 'name' => 'Project 1', 'slug' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 1002, 'name' => 'Project 2', 'slug' => 'project-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 1003, 'name' => 'Project 3', 'slug' => 'project-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('projects')->insert($projects);
    }
}
