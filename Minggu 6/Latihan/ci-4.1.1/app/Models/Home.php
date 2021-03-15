<?php

namespace App\Models;

use CodeIgniter\Model;

class Home extends Model
{
    private $str = "Hello Dandy Akbar Firmansyah (E31192292 / GolonganD)";

    public function getData()
    {
        return $this->str;
    }
}