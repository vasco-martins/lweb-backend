<?php

namespace App\Services;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SpreadsheetReaderService extends AbstractController
{


    public $spreadsheet;
    private $file;

    public function __construct()
    {
        $this->file = $this->loadFile();

        $this->spreadsheet = $this->loadSpreadsheet();
        unset($this->spreadsheet[0]);
    }

    public function loadSpreadsheet()
    {
        return $this->file->getActiveSheet()->toArray();
    }

    private function loadFile()
    {

        return IOFactory::load(pathinfo(__DIR__)['dirname'] . '/../LeaseWeb_servers_filters_assignment.xlsx');
    }
}
