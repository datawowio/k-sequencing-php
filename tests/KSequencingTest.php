<?php


require_once dirname(__FILE__).'/TestingEnv.php';

class KSequencing extends TestingEnv
{
    public function testImportImageChoice()
    {
        $var = new ImageChoices();
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testImportImageCloseQuestion()
    {
        $var = new ImageClosedQuestions();
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testImportImageMessage()
    {
        $var = new ImageMessages();
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testImportImagePhotoTag()
    {
        $var = new ImagePhotoTags();
        $this->assertTrue(is_object($var));
        unset($var);
    }
}
