<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Memo;
use Illuminate\Support\Facades\DB;

class MemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //最初に全件削除
        DB::table('memos')->delete();

        Memo::create([
            'content' => 'データの読み取り・追加しました'
        ]);

        Memo::create([
            'content' => 'Viewの表示をしました。'
        ]);
    }
}
