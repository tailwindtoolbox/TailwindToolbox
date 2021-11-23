<?php


$to = 'support@tailwindtoolbox.com';

$section = strip_tags(htmlspecialchars($_POST['section']));
$title = strip_tags(htmlspecialchars($_POST['title']));
$description = nl2br(strip_tags(htmlspecialchars($_POST['desc'])));
$url = strip_tags(htmlspecialchars($_POST['url']));
$author = strip_tags(htmlspecialchars($_POST['author']));
$authorLink = strip_tags(htmlspecialchars($_POST['authorLink']));
$image = strip_tags(htmlspecialchars($_POST['image']));

$subject = 'TailwindToolbox Submission';

$useImage = $image == "" ? 'placeholder.png' : $image;

$emailHTML = '
    {<br>
	  "site_section": "' . $section . '",<br>
	  "url": "' . $url . '",<br>
	  "url_image": "' . $useImage . '",<br>
	  "title": "' . $title . '",<br>
	  "description": "' . $description . '",<br>
	  "url_author": "' . $authorLink . '",<br>
	  "author": "' . $author . '",<br>
	  "download": "",<br>
	  "category": "tbc",<br>
	  "new": false,<br>
	  "home": false,<br>
      "sticky": false,<br>
      "affiliate": false<br>
	  },<br><br>
	';

$emailHTML .= $image == "" ? '' : '<br><br><img src="' . $image . '" />';

$headers = "From: noreply@tailwindtoolbox.com \r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$emailSent = mail($to, $subject, $emailHTML, $headers);

if ($emailSent)
{
	echo '<p style="color:#3b7977;">🙌 Thank you!!! We will review your submission and add it to the site shortly</p>';
}
else
{
	echo '<p style="color:red;">😓 Oops! Something went wrong! Tweet us instead? @tailwindtoolbox</p>';
}
