<?php

namespace App\Services;

use App\Models\Server;

class ServerService
{
    public $servers;

    public function __construct()
    {
        $spreadsheetReader = new SpreadsheetReaderService();

        foreach ($spreadsheetReader->spreadsheet as $row) {
            $this->servers[] = new Server($row[0], $row[1], $row[2], $row[3], $row[4]);
        }

        
    }
}
