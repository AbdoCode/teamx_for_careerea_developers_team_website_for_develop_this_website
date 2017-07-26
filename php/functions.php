<?php

    // Title for pages

    function getTitle(){

        global $pageTitle;

        if (isset($pageTitle)) {
            echo $pageTitle;
        } else {
            echo 'Careerea';
        }

    }


    // check in database

    function checkItem($select, $from, $value) {

        global $connect;

        $statment = $connect->prepare("SELECT $select FROM $from WHERE $select = ?");
        $statment->execute(array($value));

        $count = $statment->rowCount();

        return $count;

    }