<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a=[
        	[
'nis'=>'1617101045','nama_siswa'=>'rizal pradana','alamat'=>'parunghalang','tempat_lahir'=>'bandung','cita_cita'=>'insyaaloh jadi programmer','tanggal_lahir'=>'2001-02-13','hobi'=>'badminton','foto'=>'a.jpg'
            ],
            [
'nis'=>'1234567891','nama_siswa'=>'aang','alamat'=>'parunghalang','tempat_lahir'=>'bandung','cita_cita'=>'polisi','tanggal_lahir'=>'2001-05-25','hobi'=>'sepakbola','foto'=>'q.jpg'
            ]
     ];
        DB::table('rizalps')->insert($a);
    }
}
