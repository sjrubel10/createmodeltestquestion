<?php

//array_pop($questions);

$question_title_info = array(
    'is_model_test' => 1,
    'title' => 'this is title',
    'description' =>  'Question description',
    'time' =>   '30',
    'negetive_marking' =>   0,
    'select_privacy' =>   0,
    'auto_disable' =>   0,
    'selecttime' =>   0,
    'exam_year' =>   2024,
    'image_url' =>   '',
    'date_published' =>   '22/09/2024',
    'author_name' =>   'rubel',
);
$schema = [
    "@context" => "https://schema.org",
    "@type" => "Article",
    "headline" => $question_title_info['title'],
    "image" => $question_title_info['image_url'],
    "datePublished" => $question_title_info['date_published'],
    "author" => [
        "@type" => "Person",
        "name" => $question_title_info['author_name']
    ],
    "publisher" => [
        "@type" => "Organization",
        "name" => "Prostuty",
        "logo" => [
            "@type" => "ImageObject",
            "url" => "https://www.prostuty.com/logo.png"
        ]
    ],
    "description" => $question_title_info['description']
];

// Encode schema to JSON
$jsonSchema = json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

// Embed schema in the page

?>
<body>
<head>
    <?php echo '<script type="application/ld+json">' . $jsonSchema . '</script>';?>
</head>
Here
</body>

