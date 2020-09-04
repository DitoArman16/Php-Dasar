<?php 

    // $hari = 4;

    // switch ($hari) {
    //     case 1:
    //         echo 'Minggu';
    //         break;

    //     case 2:
    //         echo 'Sennin';
    //         break;

    //     case 3:
    //         echo 'Selasa';
    //         break;
        
    //     default:
    //         echo 'Hari belum dibuat';
    //         break;
    // }

    $pilihan = 'tambah';

    switch ($pilihan) {
        case 'tambah':
            echo 'Anda memilih tambah'
            break;

        case 'ubah':
            echo 'Anda memilih ubah'
            break;

        case 'hapus':
            echo 'Anda memilih hapus'
            break;
        
        default:
            echo 'Pilihan belum ada';
            break;
    }

?>