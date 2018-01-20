
@extends('layouts.penulis')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>PENULIS</center></div>
                &nbsp&nbsp&nbsp Nama : Rizal Pradana<br>
&nbsp&nbsp&nbsp Umur : 16 tahun<br>
&nbsp&nbsp&nbsp TTL  : BANDUNG,13 FEBUARI 2001<br>
&nbsp&nbsp&nbsp Jenis klamin : Laki-laki<br>
&nbsp&nbsp&nbsp Sekolah : SMK ASSALAAM BANDUNG<br>
&nbsp&nbsp&nbsp Kelas : XI Rpl 1<br>
&nbsp&nbsp&nbsp Jurusan : RPL<br>
&nbsp&nbsp&nbsp Hobi : badminton<br>
&nbsp&nbsp&nbsp Cita-cita : insyaalloh jadi programmer<br>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection