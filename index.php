<?php include_once "header.php" ?>
<?php include "./assets/functions/function.php" ?>
<section class="home_section_1">
    <div class="header_container">
        <?php getMainSection($main_section); ?>
    </div>
</section>
<section class="home_section_2">
    <div class="container">
        <div class="content_section_1">
            <?php getSections($first_section, []); ?>
        </div>
    </div>
</section>
<section class="home_section_3">
    <div class="container">
        <div class="content_section_2">
            <?php getThirdSection($second_section); ?>
        </div>
    </div>
</section>
<section class="home_section_4">
    <div class="container">
        <div class="content_section_1 content_section_3">
            <?php getSections($third_section, []); ?>
        </div>
    </div>
</section>
<?php include_once "footer.php" ?>