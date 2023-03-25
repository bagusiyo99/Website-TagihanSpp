<?php

namespace App\Traits;

trait HasFormatRupiah {

    
 function formatRupiah($field, $prefix = null)
        {
            $prefix = $prefix ? $prefix : 'Rp. ';
            Return $prefix . number_format($this->attributes[$field], 0, ',' ,'.');
        }

}


?>