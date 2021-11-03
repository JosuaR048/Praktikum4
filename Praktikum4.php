<?php
     abstract class karyawan {
        public $no;
        public $nama;
        public $tempatTanggalLahir;
        public $jenisKelamin;
        public $level;
        public $status;
        public $gajiKaryawan;


    abstract public function get_no();
    abstract public function set_no($no);
    
    abstract public function get_nama();
    abstract public function set_nama($nama);

    abstract public function get_tempatTanggalLahir();
    abstract public function set_tempatTanggalLahir($tempatTanggalLahir);

    abstract public function get_jenisKelamin();
    abstract public function set_jenisKelamin($jenisKelamin);

    }
    class fulltime extends karyawan
    {
       public $status = "Fulltime";

       public function set_no($no)
       {
         $this->no = $no;
       }
       public function get_no()
       {
           return $this->no;
       }

       public function set_nama($nama)
       {
         $this->nama = $nama;
       }
       public function get_nama()
       {
           return $this->nama;
       }

       public function set_tempatTanggalLahir($tempatTanggalLahir)
       {
         $this->tempatTanggalLahir = $tempatTanggalLahir;
       }
       public function get_tempatTanggalLahir()
       {
           return $this->tempatTanggalLahir;
       }

       public function set_jenisKelamin($jenisKelamin)
       {
         $this->jenisKelamin = $jenisKelamin;
       }
       public function get_jenisKelamin()
       {
           return $this->jenisKelamin;
       }

        function __construct($no, $nama, $tempatTanggalLahir, $jenisKelamin, $level)
        {
            $this->no = $no;
            $this->nama = $nama;
            $this->tempatTanggalLahir = $tempatTanggalLahir;
            $this->jenisKelamin = $jenisKelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gajiKaryawan = 2000000;
            }
            elseif($this->level == "Amature"){
                $this->gajiKaryawan =  3500000;
            }
            else{
                $this->gajiKaryawan = 5000000;
            }
        }


    }

    class parttime extends karyawan
    {
        public $status = "Parttime";

        public function set_no($no)
        {
          $this->no = $no;
        }
        public function get_no()
        {
            return $this->no;
        }

        public function set_nama($nama)
        {
          $this->nama = $nama;
        }
        public function get_nama()
        {
            return $this->nama;
        }

        public function set_tempatTanggalLahir($tempatTanggalLahir)
        {
          $this->tempatTanggalLahir = $tempatTanggalLahir;
        }
        public function get_tempatTanggalLahir()
        {
            return $this->tempatTanggalLahir;
        }

        public function set_jenisKelamin($jenisKelamin)
        {
          $this->jenisKelamin = $jenisKelamin;
        }
        public function get_jenisKelamin()
        {
            return $this->jenisKelamin;
        }


        function __construct($no, $nama, $tempatTanggalLahir, $jenisKelamin, $level)
        {
            $this->no = $no;
            $this->nama = $nama;
            $this->tempatTanggalLahir = $tempatTanggalLahir;
            $this->jenisKelamin = $jenisKelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gajiKaryawan = 2000000/2;
            }
            elseif($this->level == "Amature"){
                $this->gajiKaryawan =  3500000/2;
            }
            else{
                $this->gajiKaryawan = 5000000/2;
            }
        }
    } 
    $arr = array();
    $arr[0] = $karyawan1 = new fulltime(1, "Josua Raun", "Jakarta 3 Agustus 2001", "Laki-Laki", "Junior");
    $arr[1] = $karyawan2 = new fulltime(2, "Jojo", "Jakarta 3 Agustus 2001", "Laki-Laki", "Amateur");
    $arr[2] = $karyawan3 = new parttime(3, "Raun", "Jakarta 3 Agustus 2001", "Laki-Laki", "Amateur");
    $arr[3] = $karyawan4 = new parttime(4, "Martha", "Jakarta 3 Agustus 2001", "Perempuan", "Senior");

?>
<!DOCTYPE html>
<html style="background-color:#ffffff;">
  <head>
    <style>
      * {
        color: black;
      }
    </style>
  </head>
  <body>
  <center><h2 style="Color:#000000"> Daftar Pegawai </h2></center>
    <table class="tabel" border='1' style="border-radius:1px; margin-left: auto; margin-right: auto; margin-top :1px;">
      <tr>
        <td style="text-align:center; background-color:#00cec9">No</td>
        <td style="text-align:center; background-color:#00cec9">Nama</td>
        <td style="text-align:center;background-color:#00cec9">Tempat Tanggal Lahir</td>
        <td style="text-align:center; background-color:#00cec9">Jenis Kelamin</td>
        <td style="text-align:center; background-color:#00cec9">Level</td>
        <td style="text-align:center; background-color:#00cec9">Status</td>
        <td style="text-align:center; background-color:#00cec9">Gaji Karyawan</td>
      </tr> <?php for ($i=0; $i < 4; $i++) { ?> <tr>
        <td><?= $arr[$i]->no; ?> </td>
        <td><?=  $arr[$i]->nama; ?> </td>
        <td><?=  $arr[$i]->tempatTanggalLahir; ?> </td>
        <td><?=  $arr[$i]->jenisKelamin; ?> </td>
        <td><?=  $arr[$i]->level ?> </td>
        <td><?=  $arr[$i]->status; ?> </td>
        <td><?=  $arr[$i]->gajiKaryawan; ?> </td>
      </tr> <?php } ?>
    </table>
    <center><h2 style="Color:#000000"> Josua Raun - 105219048 </h2></center>
  </body>
</html>