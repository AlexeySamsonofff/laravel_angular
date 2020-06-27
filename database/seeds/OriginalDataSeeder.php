<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class OriginalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filesInFolder = File::files(database_path() . '/original-data-dump');

        foreach($filesInFolder as $path) {
            $file = pathinfo($path);

            try {
                $sql = file_get_contents(database_path() . '/original-data-dump/' . $file['basename']);

                DB::unprepared($sql);
            } catch(\Illuminate\Database\QueryException $ex){
                dd($ex);
                // Note any method of class PDOException can be called on $ex.
                die();
            }
        }
    }
}
