<?php
class Message
{
    private $_userName;
    private $_message;
    private $_date;

    public function __construct(string $userName, string $message, DateTime $date = null)
    {
        $this->_userName = $userName;
        $this->_message = $message;
        $this->_date = date_format($date, 'Y-m-d à H:i:s');
    }

    public function isValid(): bool
    {
        if(strlen($this->_userName) > 3)
            return true;
        return false;
    }


    public function toHTML():string
    {
        return " ";
       /* return <<<HTML 
                <p>
                    <strong>$this->_userName</strong> <em>$this->$_date</em><br>
                    $this->_message
                </p>
HTML;*/
    }

    public function getError(): array
    {
        $error = [
            'userName' => null,
            'message' => null
        ];
        if($this->isValid())
        {
            $error['userName'] = $this->_userName;
            $error['message']  = $this->_message;
        }
        return $error;
    }
    public function toJSON():string
    {
        $tableau = [
                'userName' => $this->_userName,
                'message' => $this->_message,
                'date'  => $this->_date
        ];

        return json_encode($tableau);
    }

    public static function fromJSON(string $message): Message
    {
        $tableau = [];

        $tableau = json_decode($message);

        $m = new Message($tableau['userName'], $tableau['message'], $tableau['date']);

        return $m;
    }

}