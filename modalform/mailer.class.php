<?php

class Mailer {

    private $recipients = [
        'redhat.ua@gmail.com',
        '1986nekrasow@gmail.com',
        'Myskat_06@mail.ru',
    ];
    private $sender = 'remclimat.pro@yandex.ru';

    private $fields = [
        'uphone'   => '<b>Телефон:</b>',
        'formInfo' => '<b>Тема:</b>',
    ];

    private $subject;

    private $headers = [];

    private $message;

    private $sended = false;

    function __construct($post_data) {
        $this->fill_headers();
        $this->subject = (isset($post_data['formInfo']) && !empty($post_data['formInfo'])) ? $post_data['formInfo'] : 'No subject!';
        $this->fill_message($post_data);
        $this->send_email(implode(',', $this->recipients), $this->subject, $this->message, $this->headers);
    }

    private function fill_headers() {
        $headers = [
            "From: " . $this->sender,
            "Reply-To: " . $this->sender,
            "MIME-Version: 1.0",
            "Content-Type: text/html;charset=utf-8",
            "Content-Transfer-Encoding: 8bit ",
        ];
        $this->headers = implode(PHP_EOL, $headers);
    }

    private function fill_message(array $post_data) {
        $message = [];
        foreach ($post_data as $key => $item) {
            if (array_key_exists($key, $this->fields)) {
                $message[] .= implode(' ', [$this->fields[$key], $item]);
            }
        }
        if ([] !== $message) {
            $this->message = implode('<br />', $message);
        }
    }

    private function send_email($to, $subject, $body, $headers) {
        $this->sended = mail($to, $subject, $body, $headers);
    }

}
