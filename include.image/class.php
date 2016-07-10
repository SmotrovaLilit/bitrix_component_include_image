<?php
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Type\DateTime;


class IncludeFile extends CBitrixComponent {

    
    public function executeComponent () {
        $this->includeComponentTemplate();
    }

}