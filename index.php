<?php

require 'functions.php';

$db = createDB();

    $stmt = $db->query("SELECT `title` ,`intro_text` FROM `intro`");
    $title_array = $stmt->fetch();
    $stmt = $db->query("SELECT `paragraph_1`, `image`, `paragraph_2` FROM `about_me`");
    $about_me_array = $stmt->fetch();
    $stmt = $db->query("SELECT `title`, `image`, `paragraph` FROM `projects`");
    $projects_array = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fanwood+Text" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rob Reeves | Portfolio</title>
</head>

<body>
    <header class="main-nav">
        <div class="nav-button-left">
            <a class="nav-text" href="#C1">ABOUT ME</a>
            <a class="nav-text" href="#C4">PROJECTS</a>
            <a class="nav-text" href="#C3">CONTACT</a>
            <a class="nav-text" href="login.php">ADMIN LOGIN</a>
        </div>
        <div class="nav-button-right">
            <a class="nav-text" href="#C2">THREE PEDALS ONLY</a>
        </div>
    </header>
        <div class="main-header-wrapper">
            <div class="main-header-centre">
                <h1>ROB REEVES</h1>
                    <div class="sub-heading-wrapper">
                        <div class="sub-heading">
                            <h3><?php echo $title_array["title"] ?></h3>
                        </div>
                    </div>
                    <div class="sub-heading-wrapper-bottom">
                        <p class="sub-heading-blog"><?php echo $title_array["intro_text"] ?></p>
                    </div>
            </div>
        </div>
    <section class="main-content" id="C1">
        <div class="main-content-wrapper">
            <div class="top-sub-heading">
                <h2>ABOUT ME</h2>
            </div>
            <p class="main-content-text"><?php echo $about_me_array["paragraph_1"] ?></p>
            <div class="article">
                <img src="<?php echo $about_me_array["image"] ?>" class="image" alt="sea shore">
                <p class="main-content-text"><?php echo $about_me_array["paragraph_2"] ?></p>
            </div>
        </div>
        <div class="main-content-wrapper">
            <div class="top-sub-heading" id="C4">
                <h2>PROJECTS</h2>
            </div>
            <p class="main-content-text"><?php echo $projects_array["title"] ?></p>
            <div class="article">
                <img src="<?php echo $projects_array["image"] ?>" class="image" alt="project logo">
                <p class="main-content-text"><?php echo $projects_array["paragraph"] ?></p>
            </div>
        </div>
    </section>
    <section class="blog-wrapper">
        <div class="main-content-wrapper">
                <div class="blog-container" id="C2">
                    <div class="top-sub-heading">
                        <h2>THREE PEDALS ONLY</h2>
                    </div>
                    <p class="main-content-text">This is basically just a blog for me to not only rant about the death of the manual gearbox but also the prevalence of the automatic gearbox in high-performance cars. How has this come about? There are many factors, principle of which is high-performance cars are a lot more accessible now and regular people who may have found them hard work are now taking an interest. </p>
                    <div class="blog-text">
                        <img class="gears" src="img/if_f085_213059.png" alt="gears">
                        <p class="blog-text-paragraph">Should we as car enthusiasts be worried about this? Well, yes and no. On one hand we should be thankful for the fact that high-performance cars are becoming more accessible. More people are buying them and consequently more development money is being spent making the cars faster and more reliable. As a knock-on effect, lots of other cool stuff like tyre technology gets more development mileage as well as manufacturers taking things more seriously.</p>
                        <img class="gearbox" src="https://user-images.githubusercontent.com/271652/38042847-6d825426-3283-11e8-8b37-bb58514c3a2f.png" alt="stick shift">
                        <p class="blog-text-paragraph">I suppose where we should really worry is that most of that aforementioned development capital being spread out across many different components and this very much includes gear boxes. Many performance car manufacturers are no longer producing manual gearboxes at all where previously this was all they made. McLaren, Ferrari, Lamborghini, Pagani, Koenigsegg have all bowed out. Even more disheartening is the fact that the open-gate gearbox has also been killed-off with Audi removing it from the R8. So where does this leave us manual bores who want three pedals and a stick? We pretty much have to grin and bare it is the unfortunate answer. Andreas Preuninger, Head of GT cars at Porsche has recently announced that he will need at least 10% of new 991.2 GT3s to be manual to justify keeping the shift-all-by-yourself option for the next generation and he seems hopeful rather than confident that this will happen.</p>
                        <p>So why do people not want manual gearboxes anymore? I suppose it's a combination of factors; new-gen double-clutch gearboxes really are bloody amazing and shift gears very quickly and smoothly making track work and other high-speed driving easier. Not only this but auto or semi-auto gearboxes are easier to live with thus making high-performance cars more usable and expand their breadth of ability. I'm sure there are a couple of other small factors that I am overlooking here but for me the main reason is that the vast majority of people who buy high-performance cars are not car enthusiasts, or rather, do not take a particular pleasure from the immersive experience of operating all the controls yourself. They just want to get in, drive and not have to worry about pushing a clutch pedal down.</p>
                        <img class="gearbox-image" src="img/epcp_0802_03_z+2007_lamborghini_gallardo+stainless_steel_gear_shifter.jpg" alt="gaited shifter">
                        <p>Will the manual gearbox eventually die out? Quite possibly although there is a die-hard following who are pretty much keeping this type of gearbox alive in high-performance cars. The stick-shift is alive and kicking in normal passenger vehicles and this could also be helping a bit and in some cases it's a USP for a manufacturer to offer both. Interestingly enough it seems to be The Yanks who are leading the way here. Now, is this down to a lack of technology or are they just super keen on manual gearboxes. I rather have my suspicions that it's the latter. After all it was they who coerced BMW into producing the F10 M5 with a manual when the rest of us went without. </p>
                    </div>
                </div>
        </div>
    </section>
    <footer id="C3">
        <div class="footer-text">
            <a class="nav-text">CONTACT DETAILS:<img class="contact-image" src="img/if_5303_-_Gmail_1218788.png" alt="email">ROBERTKIERONREEVES@GMAIL.COM<img class="contact-image" src="img/if_phone_281830.png" alt="phone">+447762060755</a>
        </div>
        <div class="social-media-container">
            <a href="https://www.facebook.com" target="_blank">
                <img class="facebook_logo" src="img/if_facebook_2142575.png" alt="Facebook logo">
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <img class="Instagram_logo" src="img/if_instagram_2142569.png" alt="Instagram logo">
            </a>
            <a href="https://www.linkedin.com" target="_black">
                <img class="linkedin_logo" src="img/if_linkedin_2142574.png" alt="Linkedin logo">
            </a>
            <a href="https://www.github.com" target="_blank">
                <img class="github_logo" src="img/if_social_media_social_media_logo_github_1916014.png" alt="Github logo">
            </a>
        </div>
    </footer>
</body>

</html>