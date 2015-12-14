<?php
namespace Iapps\Common;

class Folder
{
    private $folder;

    public function __construct($folder)
    {
        $this->folder = $folder;
    }

    public function getFolder($size = null)
    {
        switch ($size) {
            case 'medium':
                $mediumfolder = $this->folder;
                $folder = isset($mediumfolder['m']) ? $mediumfolder['m'] : '';
                break;
            case 'large':
                $mediumfolder = $this->folder;
                $folder = isset($mediumfolder['b']) ? $mediumfolder['b'] : '';
                break;
            default:
                $mediumfolder = $this->folder;
                $folder = isset($mediumfolder['s']) ? $mediumfolder['s'] : '';
                break;
        }

        return $folder;
    }
}
