<?php 
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_PUBLIC_KEY', '79b2384c6590f55387086b95618bd375');
    define('API_PRIVATE_KEY', 'bfdca98fdbd4bdadd58560f92485f6c0');
    $mj = new \Mailjet\Cl^ient(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);

    $body = [
        'Messages' => [
          [
            'From' => [
              'Email' => "syphax.bourekkache@syphax-tech-france.fr",
              'Name' => "Syphax"
            ],
            'To' => [
              [
                'Email' => "syphax.bourekkache@syphax-tech-france.fr",
                'Name' => "Syphax"
              ]
            ],
            'Subject' => "Greetings from Mailjet.",
            'TextPart' => "My first Mailjet email",
            'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
            'CustomID' => "AppGettingStartedTest"
          ]
        ]
      ];
      $response = $mj->post(Resources::$Email, ['body' => $body]);
      $response->success() && var_dump($response->getData());
    ?>
    
    