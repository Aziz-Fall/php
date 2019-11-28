<?php

class GuestBook
{
    private $_file;
    
    public function __construct($file)
    {
        $this->_file = $file;
    }

    public function addMessage(Message $message): void
    {
        file_put_contents($this->_file, $message->toJSON(), FILE_APPEND);
    }

    public function getMessage(): array
    {
        return file($this->_file, FILE_IGNORE_NEW_LINES);
    }
}