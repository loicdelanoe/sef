<?php

namespace inc;

class ContactForm
{
    public function __construct($data)
    {
        $_SESSION['errors'] = [];
        $_SESSION['old'] = [];
        $_SESSION['feedback'] = '';

        $rules = [
            "fullname" => ['required'],
            "email" => ['required', 'email'],
            "subject" => ['required'],
            "message" => ['required'],
            "g-recaptcha-response" => ['recaptcha'],
        ];

        self::validate($data, $rules);

        if (count($_SESSION['errors']) > 0) {
            $_SESSION['old'] = $data;
        } else {
            $_SESSION['feedback'] = __("Votre message a bien été envoyé");
            self::sendMail($data);
        }

        wp_redirect(wp_get_referer());
        exit();
    }

    protected static function validate(array $data, array $rules): void
    {
        foreach ($rules as $field => $checks) {

            $key = $field ?? null;

            foreach ($checks as $check) {
                $method = $check;

                self::$method($key, $data);
            }
        }
    }

    public static function feedback(): string
    {
        $feedback = $_SESSION['feedback'] ?? '';

        unset($_SESSION['feedback']);

        return $feedback;
    }

    private static function required(string $key, array $data): bool
    {
        if (empty($data[$key])) {
            $_SESSION['errors'][$key] = __("Ce champ est requis");
            return false;
        }

        return true;
    }

    private static function email(string $key, array $data): bool
    {
        if (!filter_var($data[$key], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['errors'][$key] = __("L'adresse mail n'est pas valide");
            return false;
        }
        return true;
    }

    private static function sendMail(array $data): void
    {
        wp_mail(get_bloginfo('admin_email'), $data['subject'], $data['message'] );
    }

    private static function recaptcha(string $key, array $data)
    {
        $secret_key = '6LdCETIqAAAAAJpcaPQEUxrg2IJRJ3Y9p-xnxrHm';

        $response = wp_remote_post("https://www.google.com/recaptcha/api/siteverify", [
            'body' => [
                'secret' => $secret_key,
                'response' => $data[$key],
            ]
        ]);

        $response_body = wp_remote_retrieve_body($response);
        $result = json_decode($response_body, true);

        if (!$result['success']) {
            $_SESSION['errors'][$key] = __("La vérification reCAPTCHA a échoué. Veuillez réessayer.");
            return false;
        }

        return true;
    }
}