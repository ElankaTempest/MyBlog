<?php
declare( strict_types=1 );
spl_autoload_register(
    function( $class )
    {
        require_once( __DIR__ . '/Parts/' . $class . '.php' );
    }
);
// Authors
$author1 = new Author();
$author1->setId( 1 );
$author1->setFirstName( 'Egan' );
$author1->setLastName( 'Loo' );

$author2 = new Author();
$author2->setId( 2 );
$author2->setFirstName( 'Rafael Antonio' );
$author2->setLastName( 'Pineda' );

$author3 = new Author();
$author3->setId( 4 );
$author3->setFirstName( 'Alex' );
$author3->setLastName( 'Mateo' );

// Category
$category1 = new Category();
$category1->setId( 1 );
$category1->setTitle( 'News' );
$category1->setAlias( 'nes' );

$category2 = new Category();
$category2->setId( 2 );
$category2->setTitle( 'Review' );
$category2->setAlias( 'review' );

$category3 = new Category();
$category3->setId( 3 );
$category3->setTitle( 'Events' );
$category3->setAlias( 'events' );

//1st Post and Cover
$cover1 = new Cover( '01', 'My Hero Academia' );
$post1 = new Post();
$post1->setId( 1 );
$post1->setTitle( 'My Hero Academia Film Returns to #1, Belle Drops to #3' );
$post1->setAlias( 'my-hero-academia-film-returns-to-1' );
$post1->setDescription( 'My Hero Academia THE MOVIE: World Heroes\' Mission, the third anime film in the My Hero Academia franchise, rose from #4 to #1 in its sixth weekend.' );
$post1->setAuthor( $author1 );
$post1->setPublishDate( '2021-09-14 02:01:00' );
$post1->setCategory( $category1 );
$post1->setCover( $cover1 );

var_dump( $post1 );

// 2nd Post and Cover
$cover2 = new Cover( '02', 'Tensei shitara Slime Datta Ken' );

$post2 = new Post();
$post2->setId( 2 );
$post2->setTitle( 'That Time I Got Reincarnated as a Slime Season 2' );
$post2->setAlias( 'that-time-i-got-reincarnated-as-a-slime-season-2' );
$post2->setDescription( 'It\'s funny. Last episode, the show pulled out all the stops narratively to try and convince us that Clayman\'s forces had the upper hand—to the point where Beretta\'s interference was needed to make things evenly matched—only for all that tension to be deflated this episode.' );
$post2->setAuthor( $author2 );
$post2->setPublishDate( '2021-09-15 19:30:00' );
$post2->setCategory( $category2 );
$post2->setCover( $cover2 );

var_dump( $post2 );

//3rd Post and Cover
$cover3 = new Cover( '03', 'TV Ranking' );

$post3 = new Post();
$post3->setId( 3 );
$post3->setTitle( 'Japanese Animation TV Ranking, June 14-20' );
$post3->setAlias( 'japanese-animation-tv-ranking-june' );
$post3->setDescription( <<<'EOD'
                            The first live-action film adaptation of Katsuhisa Minami's The Fable manga aired on NTV on Friday, June 18 at 9:00 p.m. and it earned an 11.1% rating.
                            EOD );
$post3->setAuthor( $author3 );
$post3->setPublishDate( '2021-06-26 15:02:00' );
$post3->setCategory( $category3 );
$post3->setCover( $cover3 );

var_dump( $post3 );