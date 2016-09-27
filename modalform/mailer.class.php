<?php

class Mailer {

    private $recipients = array(
        '1986nekrasow@gmail.com',
        'Myskat_06@mail.ru',
    );
    private $sender = 'remclimat.pro@yandex.ru';

    private $fields = array(
        'uphone'       => '<b>Телефон:</b>',
        'formInfo'     => '<b>Тема:</b>',
        'trueFormInfo' => '<b>Тема:</b>', // temporary fix
        'leftFormInfo' => '<b>Тема:</b>', // left form
    );

    private $subject = 'No Subject!';

    private $headers = array();

    private $message;

    private $sended = false;

    function __construct($post_data) {
        $this->fill_headers();
        if (isset($post_data['trueFormInfo'])) {
            $this->subject = $post_data['trueFormInfo'];
        }
        if (isset($post_data['leftFormInfo'])) {
            $this->subject = $post_data['leftFormInfo'];
        }
        $this->fill_message($post_data);
        $this->send_email(implode(',', $this->recipients), $this->subject, $this->message, $this->headers);
    }

    private function fill_headers() {
        $headers = array(
            "From: " . $this->sender,
            "Reply-To: " . $this->sender,
            "MIME-Version: 1.0",
            "Content-Type: text/html;charset=utf-8",
            "Content-Transfer-Encoding: 8bit ",
        );
        $this->headers = implode(PHP_EOL, $headers);
    }

    private function fill_message(array $post_data) {
        $message = array();
        foreach ($post_data as $key => $item) {
            if (array_key_exists($key, $this->fields)) {
                $message[] .= implode(' ', array($this->fields[$key], $item));
            }
        }
        if (array() !== $message) {
            $this->message = implode('<br />', $message);
        }
    }

    private function send_email($to, $subject, $body, $headers) {
        $this->sended = mail($to, $subject, $body, $headers);
    }

}
