<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
    'database_url' => env('https://shibafood-3e0d0.firebaseio.com', ''),
    'project_id' => env('shibafood-3e0d0', ''),
    'private_key_id' => env('3452614df803e5c9993625cb6b0424a94cbb889b', 'your-key'),
    'private_key' => str_replace("\\n", "\n", env('"-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDBVHJUUHDvrB3F\nz8wzeLexT9rs8vYnJ1YjNp4/Q5E6tXAlZETBTnsSOccH4+Y+o1kzEx8PHu+lWJ6R\nZVRavj1YuK5evW03TE9wEhnxpW1lFh6ZrJ7ANLS1q/aH/XsK+83N6V7YdE+jSCiM\nu6+IdJFhyZ5NNrSskz+x4MyNCl1+1TH4rM1bJYeqyM2+ta6K2ldXbZE9VdEUtKFe\nmZKJ4qgVb1DA7tTfknTh/evcbUPuegKNnqxShKGW7T4deJ3IO1WVOIJrTvR3Dq43\n2mZr3tVPw2QloVSHvvQ+yN8iMgml0c9sAlyoss+2CUWhJlExQs9g8OhKh2ciNsvb\nlpH+QOpDAgMBAAECggEAT2mIrOl9+nUQpbh9gIcNrV/H5ZzHT73wu/YreoEenqb4\nseNF+sFp/EqPXsZWRVSDx18LWwKyHZERUVf2FnAectsphPD6c8R8vOQyk/gHv4Ye\ne7FUZE9CC33ffmy4pgJYv0QlGXRtYfy561UM/Vgkf655v+3AuUKi30Yfv6+KSBZC\n1+ql0zTDBlHd2tSafu9r8Q4blva1iJoWPE2oj8sEwvwwwO9zPvZ1nd6w+OMY/Q1f\nAM91U9AWQ2XyCU/SRR8ghgRUpnEFv6PmDb/gWTJ5laP+MjFVD2wZ0mxoW1V1gdme\nV+BiL0IJ8xXaA4X7m56gbAJvXRwuSiYf1b/gq0phgQKBgQD4ZexN+Dh06XRQFyij\nhMwFLXGXLWE0B84xRL3TUX3GvBwAUEd5oRSB9PnavmeGfgygmzKDr9cZVHmp2Ihd\nNLQXUd0yHAs1a9V7z5E08030yat+POPa38M4u6JpfT8g7kuUqZ7wyVfxRgqhDPJk\nckEnzWifI/cECL5QqJ/Dk6ZhmQKBgQDHPxc/RhF0fDSTI8MB3Fjs5o9yStFFVwDF\njRQS7fTZ6Y8TTR+rv7slx8XsOUujHXFM0JUunU0L6orOoKuFOh/M72W1/6JFPOLf\nAtGKswrg5zDkGb0GnsRWHYcgl6f3BqcrTSpYBQyS64vLNo0/bUc6E3eXvib83hag\nhCQp1MdMOwKBgQDEtwr98G7df6iiaMTBQsDD9Oo5PDH3n5rWf8cJHEdMZNqUEP+Z\nvkxcYuKgLhwUcayUYHQPv+jL4Y98R8QudDePJEDVl0n1I5HsvEQVt/1rt259ycD1\nLDIRst77RboB3VWzxOTfccSYicyPII6xp54b5FtPdI8B/d6iR/hGTZ79OQKBgQC9\nX/fmieB5SLxnxavJjvduY02gIgB52VHAcnDL9SOuItF8VOdvRJLKO/Cgr2x2ortX\neUDxx0y9sLUx44Bi5nXnQPr5WvmOuWog8Prcy4Phc5wCkXwaWLjf6LzQe5SHs+kb\nvQIsGtByrDJ4eWcTC/iQ+IPI1FEWMrhq5G3C3Jx4lQKBgDg5OSFTbf6bJN2qY2CK\nunJCPEqJ38S+rgrCvXli312fLLYZ/PhiHgMS09V7MqlJQ1HMg/FGYw3ExAfLlraJ\nrTE+bMn0+DBfYpGmSKIrHEe3BYHbyWnn7dRKMJ2/oqgvdwc7kfkMEB+1QW2DICna\n+lx6OAvl+7L0YtIPyBNUpYN6\n-----END PRIVATE KEY-----\n', '')),
    'client_email' => env('shibafood-3e0d0@appspot.gserviceaccount.com', 'e@email.com'),
    'client_id' => env('106037479498848966965', ''),
    'client_x509_cert_url' => env('https://www.googleapis.com/robot/v1/metadata/x509/shibafood-3e0d0%40appspot.gserviceaccount.com', ''),
    ],

];
