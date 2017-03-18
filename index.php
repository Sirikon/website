<?php
/**
 *
 *
 * @author Asier Marqués <asiermarques@gmail.com>
 */

require __DIR__ . '/vendor/autoload.php';

$site = new \ElComite\Website();

include __DIR__ . "/config/services.php";

$medium_posts = $site["articles"]->getLastPosts();
$events       = $site["events"]->getLastEvent();
$sponsors     = $site["config"]->getSponsors();
$hero_images  = $site["config"]->getHeroImages();

