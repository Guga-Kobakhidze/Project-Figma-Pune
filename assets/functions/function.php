<?php

// Main Section functions

$main_section = [
    'link_name' => 'Queen of the Deccan',
    'title' => 'Discover <br><span>Rapchik Pune',
    'scroll_btn' => 'Scroll down',
    'social_title' => 'Follow us',
    'instagram' => '#',
    'twitter' => '#',
    'facebook' => '#',
];

function getMainSection($main_section)
{
    echo '<div class="main_section_content">
        <div class="link_image">
            <img src="./assets/images/line.png" alt="line">
            <a class="content_link_2" href="#">' . $main_section['link_name'] . '</a>
        </div>
            <h1 class="main_title">' . $main_section['title'] . '</h1>
        </div>
        <div class="scroll_button">
            <a class="content_link" href="#">' . $main_section['scroll_btn'] . '</a>
            <img src="./assets/images/downarrow.png" alt="downarrow">
        </div>
        <div class="social_networks">
            <h3 class="rotate_title">' . $main_section['social_title'] . '</h3>
            <a href="' . $main_section['instagram'] . '"><img src="./assets/images/instagram.png" alt="instagram"></a>
            <a href="' . $main_section['twitter'] . '"><img src="./assets/images/twitter.png" alt="twitter"></a>
            <a href="' . $main_section['facebook'] . '"><img src="./assets/images/Facebook.png" alt="facebook"></a>
        </div>';
    return $main_section;
}

$first_section = [
    'image' => './assets/images/FirstSectionImage.png',
    'subtitle' => 'KING OF FORT',
    'title' => 'Rajgad Fort',
    'text' => "Rajgad is a hill fort in Pune. It was initially called Murumbdev and was
               later renamed to Rajgad by Shivaji Maharaj. It is located south-west to Pune City. The base village
               Gunjavane is around 60km from Pune. This fort was initially the capital of Shivaji Maharaj's Hindavi
               Swarajya. The capital was later shifted to Raigad. The area of the fort base is 24 square miles.",
    'link_name' => 'read more'
];

$third_section = [
    'image' => './assets/images/thirdSectionImage.png',
    'subtitle' => 'f.c. road pune',
    'title' => 'Our Culture Here Is Very Friendly To People',
    'text' => "Pune is a sprawling city in the western Indian state of Maharashtra. It was
               once the base of the Peshwas (prime ministers) of the Maratha Empire, which lasted from 1674 to
               1818.",
    'link_name' => 'read more'
];

function getSections($first_section, $third_section)
{
    $mergeSections = array_merge($first_section, $third_section);
    echo '<img src="' . $mergeSections['image'] . '" alt="FirstSectionIMG">
            <div class="fort_section_content">
                <div class="link_image link_image_only">
                    <img src="./assets/images/line.png" alt="line">
                    <a class="content_link_2" href="#">' . $mergeSections['subtitle'] . '</a>
                </div>
                <h2 class="content_title">' . $mergeSections['title'] . '</h2>
                <p class="content_paragraph">' . $mergeSections['text'] . '</p>
                <div class="link_image">
                    <a class="content_link" href="#">' . $mergeSections['link_name'] . '</a>
                    <img src="./assets/images/buttonright.png" alt="butonRight">
                </div>
            </div>';
    return $mergeSections;
}

$second_section = [
    'image' => './assets/images/SecondSectionImage.png',
    'title' => 'Shreemant Dagdusheth Halwai Ganpati Mandir',
    'text' => 'The Dagadusheth Halwai Ganapati temple in Pune is
               dedicated to the Hindu
               god Ganesh. The temple is visited by over hundred thousand pilgrims every year. Devotees of the
               temple include celebrities and chief ministers of Maharashtra who visit during the annual ten-day
               Ganeshotsav festival.',
    'link_name' => 'read more'
];

function getThirdSection($second_section)
{
    echo '<img src="' . $second_section['image'] . '" alt="SecondSectionIMG">
    <div class="inner_content">
        <h2 class="content_title another_title">' . $second_section['title'] . '</h2>
        <p class="content_paragraph another_paragraph">' . $second_section['text'] . '</p>
        <div class="link_image another_link_img">
            <a class="content_link another_link" href="#">' . $second_section['link_name'] . '</a>
            <img src="./assets/images/buttonright.png" alt="butonRight">
        </div>
    </div>';
    return $second_section;
}
