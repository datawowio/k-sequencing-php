<?php

function get_path($type, $model)
{
    $url = ["images"=> [
           "closed_questions"=> "images/closed_questions",
           "messages"=> "images/messages",
           "choices"=> "images/choices",
           "photo_tag"=> "images/photo_tags",
           "find"=> "projects/images/" ],
         ["videos" => [
           "closed_questions" => "videos/closed_questions"] ],
         ["texts"=> [
           "categories" => "v1/text/text_categories",
           "closed_questions"=> "v1/text/text_closed_questions",
           "conversations"=> "v1/text/text_conversations"
         ]  ],
         ["ai" => [
          "predictor" => "prime/predictions",
          "find" => "projects/images/"
         ] ]
      ];

    return $url[$type][$model];
}
