<?php

function get_path($type, $model)
{
    $url = array("images"=> array(
           "closed_questions"=> "images/closed_questions",
           "messages"=> "images/messages",
           "choices"=> "images/choices",
           "photo_tag"=> "images/photo_tags",
           "find"=> "projects/images/" ),
         array("videos" => array(
           "closed_questions" => "videos/closed_questions") ),
         array("texts"=> array(
           "categories" => "v1/text/text_categories",
           "closed_questions"=> "v1/text/text_closed_questions",
           "conversations"=> "v1/text/text_conversations"
         )  ),
         array("ai" => array(
          "predictor" => "prime/predictions",
          "find" => "projects/images/"
         ) )
      );

    return $url[$type][$model];
}

function base_url($model)
{
    $url = array("images"=> "http://localhost:3001/api/", "videos" => "http://localhost:3001/api/",
           "texts" => "http://localhost:3002/api/", "ai"=> "http://localhost:3001/api/");
    return url[model];
}
