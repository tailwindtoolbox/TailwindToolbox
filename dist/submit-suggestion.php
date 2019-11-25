<?php


    $to = 'amritnagi@gmail.com';

    $section = strip_tags(htmlspecialchars($_POST['section']));
    $title = strip_tags(htmlspecialchars($_POST['title']));
    $description = nl2br(strip_tags(htmlspecialchars($_POST['desc'])));
    $url = strip_tags(htmlspecialchars($_POST['url']));
    $author = strip_tags(htmlspecialchars($_POST['author']));

    $subject = 'TailwindToolbox Submission';
    $emailHTML = '
    {
	  "site_section": "'. $section .'",
	  "url": "'. $url .'",
	  "url_image": "placeholder.png",
	  "title": "'. $title .'",
	  "description": "'. $description .'",
	  "url_author": "tbc",
	  "author": "'. $author .'",
	  "category": "tbc",
	  "new": false,
	  "home": false
      },
    ';
    
    $headers = "From: noreply@tailwindtoolbox.com \r\n";
    
    $emailSent = mail($to,$subject,$emailHTML,$headers);;

    if($emailSent)
    {
        echo '<center>Success! We will review your submission and add it to the site shortly</center>';

    }
    else
    {
        echo '<center>Oops! Something went wrong! Tweet us instead? @tailwindtoolbox</center>';
    }
