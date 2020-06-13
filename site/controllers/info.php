<?php
return function($kirby, $pages, $page) {

    $alert = null;

    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'name'  => get('name'),
            'email' => get('email'),
        ];

        $rules = [
            'name'  => ['required', 'min' => 2],
            'email' => ['required', 'email'],
        ];

        $messages = [
            'name'  => 'Please enter a valid name',
            'email' => 'Please enter a valid email address',
        ];

        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'emails/email',
                    'from'     => 'jadeandpearls@gmail.com',
                    'replyTo'  => $data['email'],
                    'to'       => 'jadeandpearls@gmail.com',
                    'subject'  => 'HIYA wants to be added to the list!',
                    'data'     => [
                        'sender' => 'Jo'
                    ]
                ]);

            } catch (Exception $error) {
                $alert['error'] = "The form could not be sent";
            }

            // no exception occured, let's send a success message
            if (empty($alert) === true) {
                $success = 'Your message has been sent, thank you. We will get back to you soon!';
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};