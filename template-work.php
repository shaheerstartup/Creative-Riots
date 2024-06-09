<?php
//Template Name: work
get_header();
function get_custom_data()
{

    return '<div class="text">
    <h1 class="layer link3" data-valu="0.21">
        WORK!
    </h1>
</div>';
}
?>

    <section class="work">
        <div class="work-container">
            <div class="work-links change-template">
                <button id="btn-template1" data-text="POST PRODUCTION" data-template-id="1" class="link">POST Production </button> <span>/</span>
                <button id="btn-template5" data-text="Graphic design" data-template-id="5" class="link">Graphic design </button><span>/</span>
                <button id="btn-template2" data-text="Web & App Development" data-template-id="2" class="link">Web & App Development </button><span>/</span>
                <button id="btn-template3" data-text="Ui & ux Design" data-template-id="3" class="link">Ui & ux Design </button><span>/</span>
                <!-- <button id="btn-template6" data-template-id="6" class="link">REELS /</button> -->
                <button id="btn-template7" data-text="3D & 2d animation" data-template-id="7" class="link">3D & 2d animation </button>
                <!-- <button id="btn-template8" data-template-id="8" class="link">podcast</button> -->
            </div>
        </div>
    </section>

    <section class="portfolio-show">
        <div class="portfolio-container">
        <div class="portfolio-cards template template1" id="template1">
                <div class="video-categories">
                    <div>
                        <span id="video-ctg-btn-1" data-section="1" class="video-ctg-btns video-ctg-btns1 link" onclick='videoCategoryToggle(1)'>Long Form </span>
                        <span id="video-ctg-btn-2" data-section="2" class="video-ctg-btns video-ctg-btns2 link" onclick='videoCategoryToggle(2)'>Short Form </span>
                        <span id="video-ctg-btn-3" data-section="3" class="video-ctg-btns video-ctg-btns3 link" onclick='videoCategoryToggle(3)'>Podcast</span>
                    </div>
                </div>
                <div class='video-category-section' id="video-category-sec1" data-section="1">
                    <div class="portfolio-card-sec">
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Long video/Christopher Origin Story.png" alt="">
                            <div>
                                <span class="video-link" src="https://player.vimeo.com/video/858871102?"></span>
                                <span class="title">Christopher's Journey</span>
                                <span class="desc">Come along on my journey, led by Christopher, as I share a tale of
                                    financial
                                    independence in this captivating video. I'll reveal how I transformed setbacks from
                                    a
                                    failed
                                    startup into opportunities, eventually contributing to the success of three
                                    companies
                                    that
                                    achieved IPO status. This is my personal story of growth, wealth creation, and the
                                    path
                                    to
                                    financial freedom. If you're intrigued by turning challenges into triumphs, charting
                                    a
                                    prosperous career, and reaching financial independence, this video is a must-watch.
                                    Let's
                                    embark on this narrative together and extract valuable insights for your own
                                    path!</span>
                                    <span class="role">Long Video Editing</span>
                                    <span class="client">TC&MT</span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-card-sec">
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Long video/Michael Every Small Business Tastes like Chicken.jpg"
                                alt="" style="height: 360px; object-fit: cover;">
                            <div>
                                <span class="video-link" src="https://player.vimeo.com/video/858870129?"></span>
                                <span class="title">Michael Secrets to Small Business Success</span>
                                <span class="desc">Unlocking the Secrets to Small Business Success! Join me, Michael, in
                                    the
                                    exciting premiere episode of GirdleyWorld, where I unveil a profound revelation:
                                    Every
                                    small
                                    business 'tastes like chicken' because they all grapple with identical core
                                    challenges.
                                    Drawing from over 2 years of intensive research, I've unearthed 9 ingenious yet
                                    affordable
                                    systems that hold the power to address these concerns head-on. With these systems in
                                    place,
                                    I've orchestrated transformative shifts across all my ventures. Ready to
                                    revolutionize
                                    your
                                    business game? Don't miss out on this enlightening episode that promises to reshape
                                    your
                                    perspective. Tune in now and embark on the journey to business excellence!
                                </span>
                                <span class="role">Long Video Editing</span>
                                <span class="client">Artifacts Labs</span>
                            </div>
                        </div>
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Long video/For ALL TAI LOPEZ HORIZONTAL VIDEOS.png" alt=""
                                style="height: 450px; object-fit: cover;">
                            <div>
                                <span class="video-link" src="https://player.vimeo.com/video/858870579?"></span>
                                <span class="title">Tai Lopez Webinar AD</span>
                                <span class="desc"> Uncover the Art of Persuasion and Profits with Tai Lopez!
                                    Are you leaving money on the table by not selling yourself effectively? Join us for
                                    an
                                    eye-opening webinar with the one and only Tai Lopez, a master in the world of
                                    influence
                                    and
                                    success. In this exclusive event, Tai will unravel the secrets behind compelling
                                    persuasion,
                                    drawing insights from icons like Elon Musk, the ultimate salesman. Discover how to
                                    revolutionize your approach to selling, enhance your money-making potential, and
                                    harness
                                    the
                                    tactics that have propelled Elon Musk to legendary status.
                                    If you're ready to up your sales game, seize control of your financial destiny, and
                                    learn
                                    from the best, this webinar is your golden ticket. Don't miss this chance to
                                    redefine
                                    your
                                    success trajectory. Secure your spot now and join Tai Lopez in unraveling the power
                                    of
                                    selling yourself to achieve unparalleled prosperity!"</span>
                                    <span class="role">Long Video Editing</span>
                                    <span class="client">Artifacts Labs</span>
                            </div>
                        </div>
                        <!-- <button class="link">view more <img src="<?php echo get_template_directory_uri(); ?>/img/arrowdown2.png" alt=""></button> -->
                    </div>
                    <div class="portfolio-card-sec">
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Long video/Jason Sales Secrets Revelead.png" alt="">
                            <div>
                                <span class="video-link" src="https://player.vimeo.com/video/858870867?"></span>
                                <span class="title">Jason's How to Sell Better</span>
                                <span class="desc">Tune into this video as Jason Feltman deep dives into the world of
                                    sales
                                    and
                                    teaches you how to dominate the game with 10 tips and tricks to tackle your sales
                                    team.
                                    These core values are something that every business owner should know even if they
                                    have
                                    been
                                    running the race for quite some time.
                                    Learn how to perfectly manage and command your sales force to guide them to becoming
                                    the
                                    best at what they do, and sell!
                                    From building confidence to make that call to valuing your prospect's values
                                    Watch this video to learn and relearn how to sell to your salesforce so they can
                                    sell
                                    better.</span>
                                <span class="role">Long Video Editing</span>
                                <span class="client">Insurance Dudes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-category-section" id="video-category-sec2" data-section="2">
                    <div class="portfolio-card-sec">
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-short-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Reels/Animated reel_CDG.jpg" alt="">
                            <div>
                                <iframe class="video-link" frameborder="0" allowfullscreen
                                    src="https://player.vimeo.com/video/858879526?"></iframe>
                                <span class="title">CDG Animated Reel</span>
                                <span class="desc">Our latest video edit project, where audio meets animation to craft a
                                    captivating visual experience. With just a voiceover in hand, we've orchestrated a
                                    symphony of animated screens and dynamic elements that breathe life into the narrative.
                                    Every word comes alive through meticulously synchronized visuals, painting a vivid
                                    tapestry that adds a new dimension to the spoken word.
                                </span>
                            </div>
                            <span class="role">Reels Editing</span>
                            <span class="client">Artifacts Labs</span>
                        </div>
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-short-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Reels/Wiz Khalifa.png" alt="">
                            <div>
                                <span class="video-link" src="https://player.vimeo.com/video/858879504?"></span>
                                <span class="title">Wiz Khalifa
                                </span>
                                <span class="desc">We've put together a fun reel from Wiz Khalifa's chat with Playboy. It's
                                    all about music, cool talks, and good vibes. Just hit play and enjoy!"
                                </span>
                            </div>
                            <span class="role">Reels Editing</span>
                            <span class="client">Artifacts Labs</span>
                        </div>
                    </div>
                    <div class="portfolio-card-sec">
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-short-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Reels/It's your Fault (1).png" alt=""
                                style="height: 360px; object-fit: cover;">
                            <div>
                                <span class="video-link"
                                    src="https://player.vimeo.com/video/858879423?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></span>
                                <span class="title">Drew It is your fault
                                </span>
                                <span class="desc">Want to know how we turned podcast moments into an exciting video reel?
                                    It's like picking out the best parts of a story. We carefully listened to the podcast
                                    and chose the most interesting parts. Then, we added words on the screen so you can read
                                    along easily. To make it even better, we put in videos that match the story, so it feels
                                    real. And guess what? We found music that makes the whole thing feel even cooler!
                                    So, if you're curious about how we made the podcast come alive in a video, let's take a
                                    look together. Just hit that play button and enjoy the show!"

                                </span>
                                
                            </div>
                            <span class="role">Reels Editing</span>
                            <span class="client">Doublethem</span>
                        </div>
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-short-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Reels/Lark Sylvester Stallone's Lesson On Getting Rich (1).png"
                                alt="" style=" object-fit: cover;">
                            <div>
                                <span class="video-link" src="https://player.vimeo.com/video/858879435?"></span>
                                <span class="title">Sylvester Stallone's Lesson On Getting Rich.</span>
                                <span class="desc"> We took a talking head video and turned it into an engaging reel that's
                                    all about achieving success. Dive into this visual experience and discover how we
                                    transform ideas into captivating videos. Just hit play and enjoy the insights!"
                                </span>
                            </div>
                            <span class="role">Reels Editing</span>
                            <span class="client">Impact Digital Marketing</span>
                        </div>
                        <!-- <button class="link">view more <img src="<?php echo get_template_directory_uri(); ?>/img/arrowdown2.png" alt=""></button> -->
                    </div>
                    <div class="portfolio-card-sec">
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-short-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Reels/Tai lopez reels.png" alt="">
                            <div>
                                <span class="video-link" src="https://player.vimeo.com/video/858879458?"></span>
                                <span class="title">Tai Lopez
                                </span>
                                <span class="desc">Discover how we turned Tai Lopez's podcast into an exciting reel with
                                    subtitles! Curious about his secret to reading 3 books a day? Hit play and join the
                                    journey of learning and inspiration."
                                </span>
                            </div>
                            <span class="role">Reels Editing</span>
                            <span class="client">Artifacts Labs</span>
                        </div>
                        <div onclick="disableScroll()" class="portfolio-card link2 portfolio-short-video-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Reels/Vulnerability_Oprah Winfrey.png" alt="">
                            <div>
                                <span class="video-link" src="https://player.vimeo.com/video/858879479?"></span>
                                <span class="title">Vulnerability - Oprah Winfrey
                                </span>
                                <span class="desc">We've extracted Oprah Winfrey insights on vulnerability and transformed
                                    it with subtitles and captivating visuals. Join us in exploring the power of being
                                    authentic, as Oprah's words come to life through seamless editing. Hit play and immerse
                                    yourself in this insightful journey!"
                                </span>
                            </div>
                            <span class="role">Reels Editing</span>
                            <span class="client">Artifacts Labs</span>
                        </div>
                    </div>
                </div>

                <div class="video-category-section" id="video-category-sec3" data-section="3">
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Podcast/For ALL TAI LOPEZ HORIZONTAL VIDEOS.png" alt=""
                            style="height: 400px; object-fit: cover;">
                        <div>
                            <span class="video-link" src="https://player.vimeo.com/video/858875484?"></span>
                            <span class="title">Tai Lopez Podcast</span>
                            <span class="desc">Tai Lopez in his podcast as he talks with Rorion Gracie, a master of
                                Brazilian Jiu Jitsu and the creator of the Gracie Diet. They discuss their family
                                backgrounds, the power of ancient martial arts in today's world, the healthy Gracie
                                Diet,
                                and how love and traditions can fit into our modern lives. It's a fascinating
                                conversation
                                that touches on history, wellne ss, and creating meaningful connections.</span>
                        </div>
                        <span class="role">Podcast Editing</span>
                        <span class="client">Artifacts Labs</span>
                    </div>
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Podcast/Leon with NFT GOD.png" alt=""
                            style="height: 500px; object-fit: cover;">
                        <div>
                            <span class="video-link" src="https://player.vimeo.com/video/858875084?"></span>
                            <span class="title">Leon With NFT GOD:</span>
                            <span class="desc">Starting from scratch, we'll discuss the journey to success, including
                                transitioning from a job to your own venture. We explore building an X account,
                                demystifying
                                virality and aiding those under 5000 followers. Navigating content strategy, from niche
                                to
                                monetization, is covered. Discover the 'NFT God X Growth Course', catch up on X trends,
                                and
                                engage in lively debates on revealing identities, Y00ts, Ethereum, Bitcoin Ordinals, and
                                more.</span>
                        </div>
                        <span class="role">Podcast Editing</span>
                        <span class="client">Doublethem</span>
                    </div>
                    <!-- <button class="link">view more <img src="<?php echo get_template_directory_uri(); ?>/img/arrowdown2.png" alt=""></button> -->
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/Thumbnails 2/Thumbnails 2/Podcast/WIlliam and Knut.png" alt=""
                            style="height: 400px; object-fit: cover;">
                        <div>
                            <span class="video-link" src="https://player.vimeo.com/video/858876060?"></span>
                            <span class="title">William & Knut:</span>
                            <span class="desc">Explore Bitcoin's potential as the ultimate investment in this video.
                                Discover insights from author Knut's book, ∞/21M, highlighting its limited supply,
                                decentralization, and resistance to inflation. Uncover why Bitcoin is considered a
                                resilient
                                investment against economic uncertainties, offering financial autonomy. Don't miss this
                                eye-opening discussion on the transformative power of Bitcoin. Hit play and dive into
                                the
                                future of finance with us!</span>
                        </div>
                        <span class="role">Podcast Editing</span>
                        <span class="client">William Szamosszegi</span>

                    </div>
                </div>
                </div>
                
            </div>
            <div class="portfolio-cards template" id="template2">
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">LG Fixing</h2>
                            <p class="portfolio-paragraph">LG Fixing is a company that provides home appliance repair
                                services in
                                Dubai. It repairs all kinds of appliances, such as refrigerators, washing machines,
                                dishwashers, and
                                ovens, from all major brands, such as LG, Samsung, Bosch, and Whirlpool. It also offers
                                same-day
                                service and warranty. The website has a red and white color scheme and a responsive and
                                attractive
                                design. It features the company’s services, prices, and contact details.</p>
                            <span class="Webcolor1">#000000</span>
                            <span class="Webcolor2">#FF0000</span>
                            <span class="Webcolor4">#FFFFFF</span>
                            <span class="Webcolor3">#F8F8F8</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">LG-FIXING</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/4.png"></span>
                            </div>
                        </div>
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2" style="max-height: 400px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Lifeguard</h2>
                            <p class="portfolio-paragraph">Lifeguard Data Recovery is a company that provides data
                                recovery services
                                in the UAE. It recovers lost or corrupted data from various devices and media, such as
                                hard drives,
                                SSDs, RAID, flash drives, and memory cards. It also offers free diagnosis and evaluation
                                services.
                                The website has a blue and white color scheme and a simple and user-friendly design. It
                                displays the
                                company’s certifications, testimonials, and success stories.</p>
                            <span class="Webcolor1">#0571B7</span>
                            <span class="Webcolor2">#F3F3F3</span>
                            <span class="Webcolor3">#000000</span>
                            <span class="Webcolor4">#F3F3F3</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">LIFEGUARD</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/4.png"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2" style="max-height: 400px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Mac Repair</h2>
                            <p class="portfolio-paragraph">Mac Repair is a company that provides Apple device repair
                                services in
                                Dubai. It fixes all kinds of issues, such as screen damage, battery drain, water damage,
                                and data
                                recovery, for all models of Apple devices, such as iPhones, iPads, MacBooks, and iMacs.
                                It also
                                offers free pickup and delivery services. The website has a clean and elegant design. It
                                showcases
                                the company’s experience, professionalism, and customer satisfaction.</p>
                            <span class="Webcolor1">#F36C23</span>
                            <span class="Webcolor2">#313B48</span>
                            <span class="Webcolor3">#F1F5F8</span>
                            <span class="Webcolor4">#FFF</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">MAC REPAIR</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/4.png"></span>
                            </div>
                        </div>
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2" style="max-height: 400px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Rental Power
                            </h2>
                            <p class="portfolio-paragraph">Rental Power is a company that provides power generator
                                rental services
                                in the UAE. It offers different types of generators, such as diesel, gas, and hybrid,
                                for various
                                purposes, such as events, construction, and emergency. It also provides maintenance and
                                installation
                                services. The website has modern and dynamic design. It highlights the company’s
                                quality,
                                reliability, and affordability.</p>
                            <span class="Webcolor1">#30AFB8</span>
                            <span class="Webcolor2">#EB2D3B</span>
                            <span class="Webcolor3">#F9F9F9</span>
                            <span class="Webcolor4">#FFF</span>

                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">RENTAL POWER UAE</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/4.png"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <button class="link">view more <img src="<?php echo get_template_directory_uri(); ?>/img/arrowdown2.png" alt=""></button> -->
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2" style="max-height: 400px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Kantech</h2>
                            <p class="portfolio-paragraph">Kantech Medical System is a Medical products supplier
                                Company. It
                                provides information about the Medical products and supplies all over the country. It
                                also has a
                                contact form and a map to help customers reach out to the company. The website has a
                                white and blue
                                color scheme and a simple and professional design. It showcases the company’s expertise
                                in
                                anesthesia and pain management.</p>
                            <span class="Webcolor1">#0095DE</span>
                            <span class="Webcolor2">#EB2D2E</span>
                            <span class="Webcolor3">#F9F9F9</span>
                            <span class="Webcolor4">#313B48</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">KANTECH MEDICAL</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/4.png"></span>
                            </div>
                        </div>
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/App Cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Rock Edge</h2>
                            <p class="portfolio-paragraph">Rock Edge is a mobile app that provides users with latest and
                                trending
                                news from various categories, such as entertainment, economy, technology, and more. It
                                has a Red
                                Color scheme with Light and Dark mode according to the user’s preferences and a
                                minimalist and
                                elegant design. It allows users to browse, read, and share news articles from different
                                sources and
                                regions. It also has popular posts and a trending section that show the most liked and
                                viewed news
                                articles by other users.</p>
                            <span class="Webcolor1">#FF0000</span>
                            <span class="Webcolor2">#1E2733</span>
                            <span class="Webcolor3">#19212C</span>
                            <span class="Webcolor4">#FFFFFF</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">ROCK EDGE</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/4.png"></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- UI/UX Portfolio Section -->
            <div class="portfolio-cards template" id="template3">
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/App Cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Rock Edge</h2>
                            <p class="portfolio-paragraph">Rock Edge is a mobile app that provides users with latest and
                                trending
                                news from various categories, such as entertainment, economy, technology, and more. It
                                has a Red
                                Color scheme with Light and Dark mode according to the user’s preferences and a
                                minimalist and
                                elegant design. It allows users to browse, read, and share news articles from different
                                sources and
                                regions. It also has popular posts and a trending section that show the most liked and
                                viewed news
                                articles by other users.</p>
                            <span class="Webcolor1">#FF0000</span>
                            <span class="Webcolor2">#19212C</span>
                            <span class="Webcolor3">#1E2733</span>
                            <span class="Webcolor4">#FFFFFF</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">ROCKEDGE</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 7/4.png"></span>
                            </div>
                        </div>
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2" style="max-height: 400px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Mac Repair</h2>
                            <p class="portfolio-paragraph">Mac Repair is a company that provides Apple device repair
                                services in
                                Dubai. It fixes all kinds of issues, such as screen damage, battery drain, water damage,
                                and data
                                recovery, for all models of Apple devices, such as iPhones, iPads, MacBooks, and iMacs.
                                It also
                                offers free pickup and delivery services. The website has a clean and elegant design. It
                                showcases
                                the company’s experience, professionalism, and customer satisfaction.</p>
                            <span class="Webcolor1">#F36C23</span>
                            <span class="Webcolor2">#313B48</span>
                            <span class="Webcolor3">#F1F5F8</span>
                            <span class="Webcolor4">#FFFFFF</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">MAC REPAIR</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 3/4.png"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2" style="max-height: 400px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Rental Power</h2>
                            <p class="portfolio-paragraph">Rental Power is a company that provides power generator
                                rental services
                                in the UAE. It offers different types of generators, such as diesel, gas, and hybrid,
                                for various
                                purposes, such as events, construction, and emergency. It also provides maintenance and
                                installation
                                services. The website has modern and dynamic design. It highlights the company’s
                                quality,
                                reliability, and affordability.</p>
                            <span class="Webcolor1">#EB2D3B</span>
                            <span class="Webcolor2">#30AFB8</span>
                            <span class="Webcolor3">#F9F9F9</span>
                            <span class="Webcolor4">#FFFFFF</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">RENTAL POWER UAE</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 4/4.png"></span>
                            </div>
                        </div>
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Lifeguard</h2>
                            <p class="portfolio-paragraph">Lifeguard Data Recovery is a company that provides data
                                recovery services
                                in the UAE. It recovers lost or corrupted data from various devices and media, such as
                                hard drives,
                                SSDs, RAID, flash drives, and memory cards. It also offers free diagnosis and evaluation
                                services.
                                The website has a blue and white color scheme and a simple and user-friendly design. It
                                displays the
                                company’s certifications, testimonials, and success stories.</p>
                            <span class="Webcolor1">#0571B7</span>
                            <span class="Webcolor2">#000000</span>
                            <span class="Webcolor3">#F3F3F3</span>
                            <span class="Webcolor4">#FFFFFF</span>

                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">LIFEGUARD</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 2/4.png"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <button class="link">view more <img src="<?php echo get_template_directory_uri(); ?>/img/arrowdown2.png" alt=""></button> -->
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">Kantech</h2>
                            <p class="portfolio-paragraph">Kantech Medical System is a Medical products supplier
                                Company. It
                                provides information about the Medical products and supplies all over the country. It
                                also has a
                                contact form and a map to help customers reach out to the company. The website has a
                                white and blue
                                color scheme and a simple and professional design. It showcases the company’s expertise
                                in
                                anesthesia and pain management.</p>
                            <span class="Webcolor1">#0095DE</span>
                            <span class="Webcolor2">#EB2D2E</span>
                            <span class="Webcolor3">#313B48</span>
                            <span class="Webcolor4">#F9F9F9</span>
                            <div class="font-container">
                                <span>Montserrat</span>
                                <span>Poppins</span>
                                <span>Hurricane</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">KANTECH MEDICAL</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 5/4.png"></span>
                            </div>
                        </div>
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/cover.png" alt="">
                        <div class="portfolio-card-data">
                            <h2 class="portfolio-heading">LG Fixing</h2>
                            <p class="portfolio-paragraph">LG Fixing is a company that provides home appliance repair
                                services in
                                Dubai. It repairs all kinds of appliances, such as refrigerators, washing machines,
                                dishwashers, and
                                ovens, from all major brands, such as LG, Samsung, Bosch, and Whirlpool. It also offers
                                same-day
                                service and warranty. The website has a red and white color scheme and a responsive and
                                attractive
                                design. It features the company’s services, prices, and contact details.</p>
                            <span class="Webcolor1">#FF0000</span>
                            <span class="Webcolor2">#F8F8F8</span>
                            <span class="Webcolor3">#000000</span>
                            <span class="Webcolor4">#FFFFFF</span>
                            <div class="font-container">
                                <span>Hurricane</span>
                                <span>Montserrat</span>
                                <span>Poppins</span>
                            </div>
                            <span class="role">WEB DEV & UI-UX</span>
                            <span class="client">LG-FIXING</span>
                            <div class="portfolio-pic-links">
                                <span class="portfolio-main-pic" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/1.png"></span>
                                <span class="portfolio-pic1" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/1.png"></span>
                                <span class="portfolio-pic2" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/2.png"></span>
                                <span class="portfolio-pic3" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/3.png"></span>
                                <span class="portfolio-pic4" src="<?php echo get_template_directory_uri(); ?>/img/WEB/Portfolio 1/4.png"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-cards template" id="template5">
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/1.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2" style="min-height: 9rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/2.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2" style="min-height: 9rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/3.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/10.jpeg" alt="">
                    </div>
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2" style="min-height: 9rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/4.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2" style="min-height: 9rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/5.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/6.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2" style="min-height: 9rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/11.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/13.jpeg" alt="">
                    </div>
                    <!-- <button class="link">view more <img src="<?php echo get_template_directory_uri(); ?>/img/arrowdown2.png" alt=""></button> -->
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2" style="min-height: 9rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/7.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/8.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/9.jpeg" alt="">
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2" style="min-height: 9rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/GRAPHIC/12.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="portfolio-cards template" id="template6">
                
            </div>
            <div class="portfolio-cards template" id="template7">
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ANIME/1.png" alt="" style="min-height: 60rem;">
                        <div>
                            <span class="video-link" src="https://player.vimeo.com/video/858896068?"></span>
                            <span class="title">Boiling Point - Boiling point animation final:</span>
                            <span class="desc"> UTune into this video as Jason Feltman deep dives into the world of
                                sales and teaches you how to dominate the game with 10 tips and tricks to tackle your
                                sales team.
                                These core values are something that every business owner should know even if they have
                                been running the race for quite some time.
                                Learn how to perfectly manage and command your sales force to guide them to becoming the
                                best at what they do, and sell!
                                From building confidence to make that call to valuing your prospect's values
                                Watch this video to learn and relearn how to sell to your salesforce so they can sell
                                better.</span>
                        </div>
                        <span class="role">2D Animation</span>
                        <span class="client">Edtech</span>
                    </div>
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ANIME/2.png" alt="">
                        <div>
                            <span class="video-link" src="https://player.vimeo.com/video/858895868?"></span>
                            <span class="title">Industries that Require Project Management:</span>
                            <span class="desc"> UTune into this video as Jason Feltman deep dives into the world of
                                sales and teaches you how to dominate the game with 10 tips and tricks to tackle your
                                sales team.
                                These core values are something that every business owner should know even if they have
                                been running the race for quite some time.
                                Learn how to perfectly manage and command your sales force to guide them to becoming the
                                best at what they do, and sell!
                                From building confidence to make that call to valuing your prospect's values
                                Watch this video to learn and relearn how to sell to your salesforce so they can sell
                                better.</span>
                        </div>
                        <span class="role">2D Animation</span>
                        <span class="client">AIMS</span>
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ANIME/3.png" alt="">
                        <div>
                            <span class="video-link" src="https://player.vimeo.com/video/858896046?"></span>
                            <span class="title">Loan financing:</span>
                            <span class="desc"> UTune into this video as Jason Feltman deep dives into the world of
                                sales and teaches you how to dominate the game with 10 tips and tricks to tackle your
                                sales team.
                                These core values are something that every business owner should know even if they have
                                been running the race for quite some time.
                                Learn how to perfectly manage and command your sales force to guide them to becoming the
                                best at what they do, and sell!
                                From building confidence to make that call to valuing your prospect's values
                                Watch this video to learn and relearn how to sell to your salesforce so they can sell
                                better.</span>
                        </div>
                        <span class="role">2D Animation</span>
                        <span class="client">Peekaboo</span>
                    </div>
                    <!-- <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio6.png" alt="">
                    </div> -->
                    <!-- <button class="link">view more <img src="<?php echo get_template_directory_uri(); ?>/img/arrowdown2.png" alt=""></button> -->
                </div>
                <div class="portfolio-card-sec">
                    <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ANIME/4.png" alt="">
                        <div>
                            <span class="video-link" src="https://player.vimeo.com/video/858895960?"></span>
                            <span class="title">International Supply Chain Management and Logistics:</span>
                            <span class="desc"> UTune into this video as Jason Feltman deep dives into the world of
                                sales and teaches you how to dominate the game with 10 tips and tricks to tackle your
                                sales team.
                                These core values are something that every business owner should know even if they have
                                been running the race for quite some time.
                                Learn how to perfectly manage and command your sales force to guide them to becoming the
                                best at what they do, and sell!
                                From building confidence to make that call to valuing your prospect's values
                                Watch this video to learn and relearn how to sell to your salesforce so they can sell
                                better.</span>
                        </div>
                        <span class="role">2D Animation</span>
                        <span class="client">AIMS</span>
                    </div>
                    <div onclick="disableScroll()" class="portfolio-card link2 portfolio-video-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ANIME/5.png" alt="">
                        <div>
                            <span class="video-link" src="https://player.vimeo.com/video/858895826?"></span>
                            <span class="title">Energetics of solution:</span>
                            <span class="desc"> UTune into this video as Jason Feltman deep dives into the world of
                                sales and teaches you how to dominate the game with 10 tips and tricks to tackle your
                                sales team.
                                These core values are something that every business owner should know even if they have
                                been running the race for quite some time.
                                Learn how to perfectly manage and command your sales force to guide them to becoming the
                                best at what they do, and sell!
                                From building confidence to make that call to valuing your prospect's values
                                Watch this video to learn and relearn how to sell to your salesforce so they can sell
                                better.</span>
                        </div>
                        <span class="role">2D Animation</span>
                        <span class="client">Edtech</span>
                    </div>
                    <!-- <div onclick="disableScroll()" class="portfolio-card link2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio3.png" alt="">
                    </div> -->
                </div>
            </div>
            <div class="portfolio-cards template" id="template8">
                
            </div>
        </div>
    </section>

    <section class="portfolio portfolio-work">
        <div class="container">
            <span>Trusted By</span>
            <div class="portfolio-sec">
                <span class="mob-quote mob-quote1">“</span>
                <span class="mob-quote mob-quote2">“</span>
                <div class="portfolio-left">
                <span>#Trustees</span>
                <div class="portfolio-main-img link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio2.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio3.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio4.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio5.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio6.png" alt="">
                </div>

                <div class="portfolio-img-show link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio2.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio3.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio4.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio5.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio6.png" alt="">
                </div>
            </div>
                <div class="portfolio-right link">
                    <div class="heading">
                        <p>Client <span>Praises</span></p>
                        <div class="review-sec">
                            <!-- <img class="quotes quote1" src="<?php echo get_template_directory_uri(); ?>/img/quote-1.png" alt=""> -->
                            <div class="review-slide">
                                <span class="quotes quote1">“</span>
                                <p>They are extremely efficient. They have a very good creative vision and they
                                    understand our needs. They're very timely and get deliveries on time.
                                </p>
                                <!-- <img class="quotes quote2" src="<?php echo get_template_directory_uri(); ?>/img/quote-2.png" alt=""> -->
                                <span class="quotes quote2">“</span>
                                <div class="review">
                                    <h2>Ryan Turner</h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                                </div>
                            </div>
                            <div class="review-slide">
                                <span class="quotes quote1">“</span>
                                <p>We've been working with Danov Production for the past few months. Not only do they
                                    meet deadlines, but also many times we find that they send the material before the
                                    deadline, which helps a lot.
                                </p>
                                <!-- <img class="quotes quote2" src="<?php echo get_template_directory_uri(); ?>/img/quote-2.png" alt=""> -->
                                <span class="quotes quote2">“</span>
                                <div class="review">
                                    <h2>Daniela Horovitz:</h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                                </div>
                            </div>
                            <div class="review-slide">
                                <span class="quotes quote1">“</span>
                                <p>The work was of very good quality. They were very punctual, had great customer
                                    service, and were competitively priced.
                                </p>
                                <!-- <img class="quotes quote2" src="<?php echo get_template_directory_uri(); ?>/img/quote-2.png" alt=""> -->
                                <span class="quotes quote2">“</span>
                                <div class="review">
                                    <h2>Mitchell Omer:</h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                                </div>
                            </div>
                            <div class="review-slide">
                                <span class="quotes quote1">“</span>
                                <p>This guy has been nothing but awesome since we brought him on as part of our team. He
                                    really takes care of everything. Thank you, NV, appreciate you, man.
                                </p>
                                <!-- <img class="quotes quote2" src="<?php echo get_template_directory_uri(); ?>/img/quote-2.png" alt=""> -->
                                <span class="quotes quote2">“</span>
                                <div class="review">
                                    <h2>Craig Pretzinger:</h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                                </div>
                            </div>
                            <div class="review-slide">
                                <span class="quotes quote1">“</span>
                                <p>They've always gone above and beyond no matter what we've needed. They always rise to
                                    the occasion, the quality has been fantastic. Communication has been great. They've
                                    saved us an incredible amount of time. Thank you Danov
                                </p>
                                <!-- <img class="quotes quote2" src="<?php echo get_template_directory_uri(); ?>/img/quote-2.png" alt=""> -->
                                <span class="quotes quote2">“</span>
                                <div class="review">
                                    <h2>Jason Feltman:</h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                                </div>
                            </div>
                            <div class="review-slide">
                                <span class="quotes quote1">“</span>
                                <p>All I do is record the video. They grab it and edit it for my podcast, YouTube,
                                    Reels, they do everything. They're absolutely amazing.
                                </p>
                                <!-- <img class="quotes quote2" src="<?php echo get_template_directory_uri(); ?>/img/quote-2.png" alt=""> -->
                                <span class="quotes quote2">“</span>
                                <div class="review">
                                    <h2>Allie Bjerk:
                                    </h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="portfolio-sidebar" id="portf-slider">
        <div class="portfolio-s-left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/close2.png" class="close-btn" alt="" onclick="enableScroll()")>
            <img class="scrollup" src="<?php echo get_template_directory_uri(); ?>/img/scrollup.svg" alt="">
            <div class="portfolio-s-left-top">
                <img id="portfolioMainImage" src="<?php echo get_template_directory_uri(); ?>/img/portfolio1.png" alt="">
            </div>
            <div class="portfolio-s-left-bottom">
                <img class="changePortfolioImg changePImage1 link2" src="<?php echo get_template_directory_uri(); ?>/img/portfolio9.png" alt="">
                <img class="changePortfolioImg changePImage2 link2" src="<?php echo get_template_directory_uri(); ?>/img/portfolio4.png" alt="">
                <img class="changePortfolioImg changePImage3 link2" src="<?php echo get_template_directory_uri(); ?>/img/portfolio8.png" alt="">
                <img class="changePortfolioImg changePImage4 link2" src="<?php echo get_template_directory_uri(); ?>/img/portfolio1.png" alt="">
            </div>
        </div>
        <div class="portfolio-s-right">
            <!-- <span class="portfolio-name">Creative Riots</span> -->
            <h2 class="portfolio-title project-name">Head Phone</h2>
            <div class="our-role">
                <div class="role">
                    <h2>OUR ROLE</h2>
                    <span class="">WEB DEV & UI UX</span>
                </div>
                <div class="client">
                    <h2>CLIENT</h2>
                    <span class="font-display">LG FIXING</span>
                </div>
            </div>
            <h2>ABOUT</h2>
            <p class="portfolio-menu-p">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout.It is a long established fact that a reader will beIt is a
                long established fact that a reader will be distracted by the readable content of a page when looking at
                its layout.It is a long established fact that a reader will be distracted by the readable content of a
                page when looking at its layout.It is a long established fact that a reader will beIt is a long
                established fact that a reader will be distracted by the readable content of a page when looking at its
                layout.</p>
            <div class="color-fonts">
                <div class="color">
                    <h2>COLORS</h2>
                    <div class="color-variants">
                        <span class="WebColorMenu1"></span>
                        <span class="WebColorMenu2"></span>
                        <span class="WebColorMenu3"></span>
                        <span class="WebColorMenu4"></span>
                    </div>
                </div>
                <div class="fonts">
                    <h2>FONTS</h2>
                    <span class="font-display">Inter</span>
                </div>
            </div>
            <button id="profile-close-btn" onclick="enableScroll();" class="close-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></button>
        </div>
    </div>

    <div class="portfolio-sidebar video-sidebar" id="portf-video-slider">
        <div class="portfolio-v-left" style="height: 50%;">
            <div style="position:relative; height: 100%; ">
                <iframe class="videoMenuPlayer"
                    src="https://player.vimeo.com/video/858870867?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:relative;top:0;left:0;width:95%; height:100% !important;  object-fit: cover; height:100%;background: rgba(0,0,0,0.8); border-radius: 20px; overflow: hidden; padding: 0px;
                    margin: 0px;" title="Why Sales People Suck at Sales"></iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
            <button id="profile-close-btn2" onclick="enableScroll();"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></button>
        </div>
        <div class="portfolio-v-right">
            <div class="portfolio-v-about">
                <h2>TITLE</h2>
                <h3 class="video-title">What Services Does Danov Production Provides?</h3>
                <h2>CLIENT</h2>
                <h3 class="client">Client Name</h3>
                <h2>OUR ROLE</h2>
                <h3 class="role">Video Editing</h3>
                
            </div>
            <div class="portfolio-v-desc">

                <h2>Description</h2>
                <p class="video-desc">It is a long established fact that a reader will be distracted by the readable
                    content of a page when
                    looking at its layout.It is a long established fact that a reader will beIt is a long established
                    fact that a reader will be distracted by the readable content of a page when looking at its
                    layout.It is a long established fact that a reader will be distracted by the readable content of a
                    page when looking at its layout.It is a long established fact that a reader will beIt is a long </p>
            </div>
        </div>
    </div>

    <div class="portfolio-sidebar short-video-sidebar" id="portf-short-video-slider">
        <div class="portfolio-s-v-left">
            <div style="position:relative; height: 100%; width: 100%;">
                <span></span>
                <iframe class="videoMenuPlayer"
                    src="https://player.vimeo.com/video/858879526?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:relative;top:0;left:0;width:95%; height:100% !important;  object-fit: cover; height:100%;background: rgba(0,0,0,0.8); border-radius: 20px; overflow: hidden; padding: 0px;
                    margin: 0px;" title="Why Sales People Suck at Sales"></iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
            <button id="profile-close-btn3" onclick="enableScroll()"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg"
                    alt=""></button>
        </div>
        <div class="portfolio-s-v-right">
            <div class="portfolio-v-about">
                <h2>TITLE</h2>
                <h3 class="video-title">What Services Does Danov Production Provides?</h3>
                <div class="intro">
                    <div>
                        <h2>CLIENT</h2>
                        <h3 class="client">Client Name</h3>
                    </div>
                    <div>
                        <h2>OUR ROLE</h2>
                        <h3 class="role">Video Editing</h3>
                    </div>
                </div>

            </div>
            <div class="portfolio-v-desc">

                <h2>Description</h2>
                <p class="video-desc">It is a long established fact that a reader will be distracted by the readable
                    content of a page when
                    looking at its layout.It is a long established fact that a reader will beIt is a long established
                    fact that a reader will be distracted by the readable content of a page when looking at its
                    layout.It is a long established fact that a reader will be distracted by the readable content of a
                    page when looking at its layout.It is a long established fact that a reader will beIt is a long </p>
            </div>
        </div>
    </div>


    <!-- <div class="portfolio-sidebar podcast-sidebar" id="portf-podcast-slider">
        <button id="profile-close-btn3"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></button>
        <div class="portfolio-pod-top">
            <div class="podcast-sec">
                <div class="podcast-card">
                    <div class="podcast-card-top">
                        <div class="track" id="track">
                            <h2 class="currentTime">0:00</h2>
                            <div id="waveform"></div>
                            <h2 class="currentTime" id="currentTimeHeading">0:00</h2>
                        </div>
                    </div>
                    <div class="podcast-card-bottom">
                        <div class="podcast-pfp"></div>
                        <div class="podcast-dashboard">
                            <div class="podcast-dashboard-speed">
                                <p>1X</p>
                            </div>
                            <div class="podcast-dashboard-play">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/-shuffle.svg" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/backward10seconds.svg" alt="">
                                <img id="playBtn" src="<?php echo get_template_directory_uri(); ?>/img/-play.svg" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/forward10seconds.svg" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/repeat.svg" alt="">
                            </div>
                            <div class="podcast-dashboard-audio">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                Enhanced Audio
                            </div>
                        </div>
                        <div class="podcast-pfp"></div>
                    </div>
                </div>
                <div class="music-div">
                    <div class="music-btn">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/voice+.svg" alt="">
                    </div>
                    <div class="music-control">
                        <input type="range" min="1" max="100" class="music-ctl" value="50" id="myRange">
                    </div>
                    <div class="music-btn">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/voice-.svg" alt="">
                    </div>
                </div>
            </div>
            <h3>The Unlikely Podcasting Success Story with Aliya Sultani</h3>
        </div>
        <div class="portfolio-pod-bottom">
            <div class="podcast-info">
                <div class="podcast-members">
                    <div class="podcaster">
                        <h3>PODCASTER</h3>
                        <p>Mahrukh Imtiaz</p>
                    </div>
                    <div class="guest">
                        <h3>GUEST</h3>
                        <p>Aliya Sultan</p>
                    </div>
                </div>
                <div class="podcast-channel">
                    <h3>CHANNEL NAME</h3>
                    <span>Spicy Chai</span>
                </div>
            </div>
            <div class="podcast-desc">
                <h2>Description</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout.It is a long established fact that a reader will beIt is a long established
                    fact that a reader will be distracted by the readable content of a page when looking at its
                    layout.It is a long established fact that a reader will be distracted by the readable content of a
                    page when looking at its layout.It is a long established fact that a reader will beIt is a long </p>
            </div>
        </div>
    </div> -->

    <!-- Trigger the Modal -->

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>

    <script type="text/javascript">
        const lenis = new Lenis()

        lenis.on('scroll', (e) => {
            console.log(e)
        })

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)

        function enableScroll() {
            // Restore the ability to scroll
            window.onscroll = null; // Remove the event handler

            console.log('Scroll enabled');
            lenis.start()
        }

        // document.addEventListener("DOMContentLoaded", function () {
        //     const canvas2 = document.getElementById("canvas")

        //     setTimeout(function(){
        //         if(canvas2){
        //             console.log('canvas found')
        //             canvas2.addEventListener("click", function(){
        //                 enableScroll();
        //             })
        //         }
        //     }, 500);
        // )}
        // document.addEventListener("DOMContentLoaded", function () {
        // const canvas2 = document.getElementById("canvas");

        // if (canvas2) {
        //     console.log('canvas found');
        //     canvas2.addEventListener("click", enableScroll);
        // }
        // });

        function setInitialActiveSection() {
            var firstSection = document.querySelector('.video-category-section[data-section="1"]');
            if (firstSection) {
                firstSection.classList.add('active');
            }
            
            var firstButton = document.querySelector('.video-ctg-btns[data-section="1"]');
            if (firstButton) {
                firstButton.classList.add('active');
            }
        }

        function videoCategoryToggle(sectionNumber) {
            var sections = document.querySelectorAll('.video-category-section');
            for (var i = 0; i < sections.length; i++) {
                if (sections[i].getAttribute('data-section') == sectionNumber) {
                    sections[i].classList.add('active');
                } else {
                    sections[i].classList.remove('active');
                }
            }

            var buttons = document.querySelectorAll('.video-ctg-btns');
            for (var i = 0; i < buttons.length; i++) {
                if (buttons[i].getAttribute('data-section') == sectionNumber) {
                    buttons[i].classList.add('active');
                } else {
                    buttons[i].classList.remove('active');
                }
            }
        }

        // Set the first section and button as active on page load
        setInitialActiveSection();



        document.addEventListener("DOMContentLoaded", function () {
            const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            if (screenWidth <= 550) {
                const swipeContainer = document.querySelector('.portfolio-s-left-top');
                const section = document.querySelector('.portfolio-s-right');
                const sectionHeight = section.clientHeight - 130;
                let isDragging = false;
                let startY = 0;
                let startTranslateY = 0;

                const maxTopPosition = sectionHeight - 500;

                gsap.set(section, { y: 0 });

                const hammerSection = new Hammer(section);
                hammerSection.get('pan').set({ direction: Hammer.DIRECTION_VERTICAL });

                hammerSection.on('panstart', event => {
                    isDragging = true;
                    startY = event.center.y;
                    startTranslateY = gsap.getProperty(section, 'y');
                });

                hammerSection.on('pan', event => {
                    if (!isDragging) return;

                    const deltaY = event.center.y - startY;
                    let translateY = startTranslateY + deltaY;

                    translateY = Math.min(translateY, maxTopPosition);

                    gsap.set(section, { y: translateY });
                });

                hammerSection.on('panend', event => {
                    if (!isDragging) return;

                    isDragging = false;
                    const endY = event.center.y;
                    const deltaY = endY - startY;

                    const triggerThreshold = sectionHeight * 0.1;

                    if (deltaY < -triggerThreshold) {
                        gsap.to(section, { y: -sectionHeight });
                    } else {
                        gsap.to(section, { y: 0, snap: true });
                    }
                });

                const hammerSwipeContainer = new Hammer(swipeContainer);
                hammerSwipeContainer.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });

                hammerSwipeContainer.on('swipeup', () => {
                    gsap.to(section, { y: -sectionHeight });
                });

                const closeButton = document.querySelectorAll('.close-btn');

                closeButton.forEach(function (closeButton) {
                    closeButton.addEventListener('click', () => {
                        gsap.to(section, { y: 0, duration: 0.5 });
                    });
                });
            }
        });



        document.addEventListener("DOMContentLoaded", function () {
            const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            if (screenWidth <= 550) {
                const swipeContainer = document.querySelector('.portfolio-s-v-left div span');
                const section = document.querySelector('.portfolio-s-v-right');
                const sectionHeight = section.clientHeight - 130;
                let isDragging = false;
                let startY = 0;
                let startTranslateY = 0;

                const maxTopPosition = sectionHeight - 500;

                gsap.set(section, { y: 0 });

                const hammerSection = new Hammer(section);
                hammerSection.get('pan').set({ direction: Hammer.DIRECTION_VERTICAL });

                hammerSection.on('panstart', event => {
                    isDragging = true;
                    startY = event.center.y;
                    startTranslateY = gsap.getProperty(section, 'y');
                });

                hammerSection.on('pan', event => {
                    if (!isDragging) return;

                    const deltaY = event.center.y - startY;
                    let translateY = startTranslateY + deltaY;

                    translateY = Math.min(translateY, maxTopPosition);

                    gsap.set(section, { y: translateY });
                });

                hammerSection.on('panend', event => {
                    if (!isDragging) return;

                    isDragging = false;
                    const endY = event.center.y;
                    const deltaY = endY - startY;

                    const triggerThreshold = sectionHeight * 0.1;

                    if (deltaY < -triggerThreshold) {
                        gsap.to(section, { y: -sectionHeight });
                    } else {
                        gsap.to(section, { y: 0, snap: true });
                    }
                });

                const hammerSwipeContainer = new Hammer(swipeContainer);
                hammerSwipeContainer.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });

                hammerSwipeContainer.on('swipeup', () => {
                    console.log('Swiped up inside iframe!');
                    gsap.to(section, { y: -sectionHeight });
                });

                const closeButton = document.querySelectorAll('.close-btn');

                closeButton.forEach(function (closeButton) {
                    closeButton.addEventListener('click', () => {
                        gsap.to(section, { y: 0, duration: 0.5 });
                    });
                });
            }
        });

        $(document).ready(function () {
            $('#nav-icon').click(function () {
                $(this).toggleClass('open');

            });

        });
        document.querySelector(".hamburger").addEventListener("click", function () {
            document.querySelector(".menu").classList.toggle("active");
            document.querySelector(".menu").style.display = "flex";
        });




        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("portfolioMainImage");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        document.addEventListener('DOMContentLoaded', () => {
            const image = document.getElementById('portfolioMainImage');
            const imgChange = document.querySelectorAll('.changePortfolioImg');

            imgChange.forEach(imgChange => {
                imgChange.addEventListener('click', () => {
                    const imageSrc = imgChange.getAttribute('src');
                    // const imageAlt = imgChange.getAttribute('');
                    image.src = imageSrc;
                    // image.alt = imageAlt;
                });
            });
        });
        gsap.registerPlugin(TweenMax);



        document.addEventListener("DOMContentLoaded", function () {
    var sectionIdFromURL = window.location.href.split("#")[1]; // Extract the section ID from the URL

    var templates = document.querySelectorAll(".template");
    var changeTemplateBtns = document.querySelectorAll(".change-template button");

    for (var i = 0; i < changeTemplateBtns.length; i++) {
        changeTemplateBtns[i].addEventListener("click", function () {
            var templateId = "template" + this.getAttribute("data-template-id");

            // Hide all templates and remove "active" class from buttons
            for (var j = 0; j < templates.length; j++) {
                templates[j].style.display = "none";
            }
            for (var k = 0; k < changeTemplateBtns.length; k++) {
                changeTemplateBtns[k].classList.remove("active");
            }

            // Show the selected template and add "active" class to the clicked button
            var selectedTemplate = document.getElementById(templateId);
            if (selectedTemplate) {
                selectedTemplate.style.display = "flex";
                this.classList.add("active");
            }

            // Update the URL with the section ID
            var newURL = window.location.href.split("#")[0] + "#" + templateId;
            history.pushState({}, document.title, newURL);
        });
    }

    // Hide template1 if coming from another page
    if (sectionIdFromURL) {
        var template1 = document.getElementById("template1");
        if (template1) {
            template1.style.display = "none";
            var template1Button = document.querySelector('[data-template-id="1"]');
            if (template1Button) {
                template1Button.classList.remove("active");
            }
        }
    }

    if (sectionIdFromURL) {
        // Activate the corresponding button and show the corresponding template
        for (var i = 0; i < changeTemplateBtns.length; i++) {
            var templateId = "template" + changeTemplateBtns[i].getAttribute("data-template-id");
            if (templateId === sectionIdFromURL) {
                changeTemplateBtns[i].classList.add("active");

                var selectedTemplate = document.getElementById(templateId);
                if (selectedTemplate) {
                    selectedTemplate.style.display = "flex";
                }
            }
        }
    } else {
        // Show template1 by default and mark the template1 button as active
        var template1Button = document.querySelector('[data-template-id="1"]');
        var template1 = document.getElementById("template1");

        if (template1Button && template1) {
            template1.style.display = "flex";
            template1Button.classList.add("active");
        }
    }
});

        // Attach the handleWindowResize function to the window resize event
        window.addEventListener('resize', handleWindowResize);

        document.addEventListener('DOMContentLoaded', function () {

            const navbar = document.querySelectorAll('.left-navbar');
            const footer = document.querySelectorAll('.footer');

            // Function to check scroll position and toggle navbar visibility
            function toggleNavbarVisibility() {
                footer.forEach((footer) => {
                    const scrollPosition = window.scrollY;

                    const footerOffsetTop = footer.offsetTop;
                    if (scrollPosition >= footerOffsetTop - window.innerHeight) {
                        navbar.forEach((navbar) => {
                            navbar.style.opacity = '0';
                            navbar.style.transition = ".25s";
                        })
                    } else {
                        navbar.forEach((navbar) => {
                            navbar.style.opacity = '1';
                            navbar.style.transition = ".25s";
                        })
                    }
                })
            }
            // Attach the toggle function to the scroll event
            window.addEventListener('scroll', toggleNavbarVisibility);
        });

        //PORTFOLIO SECTION CARDS GET ////
        document.addEventListener('DOMContentLoaded', function () {

            const close = document.querySelectorAll(".close-btn")
            const canvas = document.getElementById("canvas")
            const pSlider = document.querySelector("#portf-slider")
            let card = document.querySelectorAll(".portfolio-card")
            var isOpen = false;

            close.forEach(function (close) {
                close.addEventListener('click', function () {
                    if (isOpen) {
                        pSlider.style.right = '0';
                        canvas.style.opacity = "0.75";
                        canvas.style.zIndex = "100";
                        canvas.classList.remove('open');
                        // canvas.style.display = "flex";
                    } else {
                        pSlider.style.right = '-100%';
                        canvas.style.opacity = "0";
                        canvas.style.zIndex = "0";
                        // canvas.style.display = "none";
                    }
                });
            })

            canvas.addEventListener('click', function () {

                pSlider.style.right = '-100%';
                canvas.style.opacity = "0";
                canvas.style.zIndex = "0";
                // canvas.style.display = "none";
                isOpen = false;

            });

            card.forEach((card) => {
                card.addEventListener("click", function (event) {
                    //Card Code ||
                    var childValue = event.currentTarget.querySelector('.portfolio-heading').textContent;
                    var paragraphVal = event.currentTarget.querySelector(".portfolio-paragraph").textContent;
                    var color1 = event.currentTarget.querySelector(".Webcolor1").textContent;
                    var color2 = event.currentTarget.querySelector(".Webcolor2").textContent;
                    var color3 = event.currentTarget.querySelector(".Webcolor3").textContent;
                    var color4 = event.currentTarget.querySelector(".Webcolor4").textContent;
                    var role = event.currentTarget.querySelector(".role").textContent;
                    var client = event.currentTarget.querySelector(".client").textContent;
                    var fontContainer = event.currentTarget.querySelector(".font-container");
                    const spans = fontContainer.querySelectorAll('span');
                    var portfolioMainPic = event.currentTarget.querySelector(".portfolio-main-pic").getAttribute("src");
                    var portfolioPic1 = event.currentTarget.querySelector(".portfolio-pic1").getAttribute("src");
                    var portfolioPic2 = event.currentTarget.querySelector(".portfolio-pic2").getAttribute("src");
                    var portfolioPic3 = event.currentTarget.querySelector(".portfolio-pic3").getAttribute("src");
                    var portfolioPic4 = event.currentTarget.querySelector(".portfolio-pic4").getAttribute("src");


                    const fontArray = [];

                    spans.forEach(span => {
                        fontArray.push(span.textContent);
                    });

                    //Menu Code ||
                    var Nametitle = pSlider.querySelector(".portfolio-title")
                    var paragraphTitle = pSlider.querySelector(".portfolio-menu-p")
                    var webMenu1 = pSlider.querySelector(".WebColorMenu1")
                    var webMenu2 = pSlider.querySelector(".WebColorMenu2")
                    var webMenu3 = pSlider.querySelector(".WebColorMenu3")
                    var webMenu4 = pSlider.querySelector(".WebColorMenu4")
                    var fontDisplay = pSlider.querySelector(".font-display")
                    var mainPortfolioMenuPic = pSlider.querySelector("#portfolioMainImage");
                    var PortfolioMenuPic1 = pSlider.querySelector(".changePImage1");
                    var PortfolioMenuPic2 = pSlider.querySelector(".changePImage2");
                    var PortfolioMenuPic3 = pSlider.querySelector(".changePImage3");
                    var PortfolioMenuPic4 = pSlider.querySelector(".changePImage4");
                    var OurRole = pSlider.querySelector(".role span");
                    var OurClient = pSlider.querySelector(".client span");



                    //Changing the ELements ||
                    Nametitle.textContent = childValue;
                    paragraphTitle.textContent = paragraphVal;
                    webMenu1.style.background = color1;
                    webMenu2.style.background = color2;
                    webMenu3.style.background = color3;
                    webMenu4.style.background = color4;
                    fontDisplay.innerHTML = fontArray.join('<br>');
                    mainPortfolioMenuPic.src = portfolioMainPic;
                    PortfolioMenuPic1.src = portfolioPic1;
                    PortfolioMenuPic2.src = portfolioPic2;
                    PortfolioMenuPic3.src = portfolioPic3;
                    PortfolioMenuPic4.src = portfolioPic4;
                    OurRole.textContent = role;
                    OurClient.textContent = client;

                    // console.log("writing")

                    //Canvas | Menu | Open and Close
                    if (!isOpen) {
                        pSlider.style.right = '0%';
                        // console.log("doing")
                        canvas.style.opacity = "0.75";
                        canvas.style.zIndex = "100";
                        canvas.classList.add('open');

                    } else {
                        pSlider.style.right = '-100%';
                        canvas.style.opacity = "0";
                        canvas.style.zIndex = "0";
                        canvas.classList.remove('open');
                    }
                })
            })
        });


        //PORTFOLIO SECTION VIDEO CARDS GET ////
        document.addEventListener('DOMContentLoaded', function () {

            const close = document.getElementById("profile-close-btn2")
            const canvas = document.getElementById("canvas")
            const pSlider = document.querySelector("#portf-video-slider")
            let card = document.querySelectorAll(".portfolio-video-card")
            var isOpen = false;
            

            close.addEventListener('click', function () {
                if (isOpen) {
                    pSlider.style.right = '0';
                    canvas.style.opacity = "0.75";
                    canvas.style.zIndex = "100";
                    canvas.classList.remove('open');
                    // canvas.style.display = "flex";
                } else {
                    pSlider.style.right = '-100%';
                    canvas.style.opacity = "0";
                    canvas.style.zIndex = "0";
                    // canvas.style.display = "none";
                }
            });

            canvas.addEventListener('click', function () {

                pSlider.style.right = '-100%';
                canvas.style.opacity = "0";
                canvas.style.zIndex = "0";
                // canvas.style.display = "none";
                isOpen = false;
            });

            card.forEach((card) => {
                card.addEventListener("click", function (event) {
                    
                    //Card Code ||
                    var videoUrl = event.currentTarget.querySelector(".video-link").getAttribute("src");
                    var videotitle = event.currentTarget.querySelector(".title").textContent;
                    var videoDesc = event.currentTarget.querySelector(".desc").textContent;
                    var role = event.currentTarget.querySelector(".role").textContent;
                    var client = event.currentTarget.querySelector(".client").textContent;


                    //Menu Code ||
                    var url = pSlider.querySelector(".videoMenuPlayer");
                    var title = pSlider.querySelector(".video-title");
                    var desc = pSlider.querySelector(".video-desc");
                    var Role = pSlider.querySelector(".role");
                    var clientMenu = pSlider.querySelector(".client");

                    //Changing the ELements ||
                    url.setAttribute("src", videoUrl)
                    title.textContent = videotitle;
                    desc.textContent = videoDesc;
                    Role.textContent = role;
                    clientMenu.textContent = client;

                    //Canvas | Menu | Open and Close
                    if (!isOpen) {
                        pSlider.style.right = '0%';
                        // console.log("doing")
                        canvas.style.opacity = "0.75";
                        canvas.style.zIndex = "100";
                        canvas.classList.add('open');

                    } else {
                        pSlider.style.right = '-100%';
                        canvas.style.opacity = "0";
                        canvas.style.zIndex = "0";
                        canvas.classList.remove('open');
                    }
                })
            })
        });


        //PORTFOLIO SECTION SHORT FORM VIDEO CARDS GET ////
        document.addEventListener('DOMContentLoaded', function () {
        const close = document.getElementById("profile-close-btn3")
        const canvas = document.getElementById("canvas")
        const pSlider = document.querySelector("#portf-short-video-slider")
        let card = document.querySelectorAll(".portfolio-short-video-card")
        var isOpen = false;


        close.addEventListener('click', function () {
            if (isOpen) {
                pSlider.style.right = '0';
                canvas.style.opacity = "0.75";
                canvas.style.zIndex = "100";
                canvas.classList.remove('open');
                // canvas.style.display = "flex";
            } else {
                pSlider.style.right = '-100%';
                canvas.style.opacity = "0";
                canvas.style.zIndex = "0";
                // canvas.style.display = "none";
            }
        });

        canvas.addEventListener('click', function () {

            pSlider.style.right = '-100%';
            canvas.style.opacity = "0";
            canvas.style.zIndex = "0";
            // canvas.style.display = "none";
            isOpen = false;

        });

        card.forEach((card) => {
            card.addEventListener("click", function (event) {

                //Card Code ||
                var videoUrl = event.currentTarget.querySelector(".video-link").getAttribute("src");
                var videotitle = event.currentTarget.querySelector(".title").textContent;
                var videoDesc = event.currentTarget.querySelector(".desc").textContent;
                var role = event.currentTarget.querySelector(".role").textContent;
                var client = event.currentTarget.querySelector(".client").textContent;


                //Menu Code ||
                var url = pSlider.querySelector(".videoMenuPlayer");
                var title = pSlider.querySelector(".video-title");
                var desc = pSlider.querySelector(".video-desc");
                var Role = pSlider.querySelector(".role");
                var clientMenu = pSlider.querySelector(".client");

                //Changing the ELements ||
                url.setAttribute("src", videoUrl)
                title.textContent = videotitle;
                desc.textContent = videoDesc;
                Role.textContent = role;
                clientMenu.textContent = client;
                
                //Card Code ||

                //Canvas | Menu | Open and Close
                if (!isOpen) {
                    pSlider.style.right = '0%';
                    // console.log("doing")
                    canvas.style.opacity = "0.75";
                    canvas.style.zIndex = "100";
                    canvas.classList.add('open');

                } else {
                    pSlider.style.right = '-100%';
                    canvas.style.opacity = "0";
                    canvas.style.zIndex = "0";
                    canvas.classList.remove('open');
                }
            })
        })
        });

        $(document).ready(function () {
            // Get the current URL pathname
            var currentPath = window.location.pathname;

            // Remove trailing slash if present
            currentPath = currentPath.replace(/\/$/, "");

            // Loop through each navigation link
            $(".navbar ul li a").each(function () {
                var link = $(this);
                var linkPath = link.attr("href");

                // Compare the link's path with the current path
                if (linkPath === currentPath) {
                    link.addClass("active");
                    link.closest("li").addClass("active"); // Add "active" class to parent li element
                }
            });
        });

        var timeline = gsap.timeline()
        var tab1 = gsap.timeline()
        var tab2 = gsap.timeline()
        var tab3 = gsap.timeline()
        var tab4 = gsap.timeline()
        tab1.from(".navbar .logo", {
            delay: 1,
            opacity: 0,
        })
        tab2.from(".navbar .contact", {
            delay: 1,
            opacity: 0,
        })
        tab2.from(".left-nav .social-sec", {
            delay: 0.2,
            x: -100,
            stagger: 0.3,
        })
        tab3.from(".left-nav .social-sec .social-icon", {
            delay: 1.7,
            x: -100,
            stagger: -0.2,
        })
        tab4.from(".container .layer h1", {
            delay: 0.7,
            opacity: 0,
        })
        timeline.from(".nav ul li", {
            y: -100,
            delay: 0.2,
            stagger: 0.2,

        })


        document.addEventListener('DOMContentLoaded', function () {

            const rightNavbar = document.querySelector('.right-navbar');
            const listItems = rightNavbar.querySelectorAll('li');
            const herosec = document.querySelectorAll('.parallax-container');
            // GSAP animation for hover on list items


            listItems.forEach((li) => {
                li.addEventListener('mouseenter', () => {
                    gsap.to(li, { scale: 1.2, duration: 0.3 });
                });

                li.addEventListener('mouseleave', () => {
                    gsap.to(li, { scale: 1, duration: 0.3 });
                });
            });

            // Function to check scroll position and toggle navbar visibility
            function toggleHeroSection() {
                herosec.forEach((herosec, index) => {
                    const scrollPosition = window.scrollY;

                    const heroSectionTop = herosec.offsetTop;
                    const heroSectionBottom = heroSectionTop + herosec.clientHeight;

                    if (scrollPosition >= heroSectionTop - window.innerHeight && scrollPosition <= heroSectionBottom) {
                        gsap.to(rightNavbar, { opacity: 0, duration: 0.25 });
                    } else {
                        gsap.to(rightNavbar, { opacity: 1, duration: 0.25 });
                    }
                });
            }

            // Staggered animation for list items on hover
            const listItemsTimeline = gsap.timeline({ paused: true });
            listItemsTimeline.from(listItems, 0.3, { opacity: 0.3, stagger: 0.1, ease: "power2.inOut" }, 0.05);
            listItemsTimeline.reverse(); // Initial state

            // Hover event for .right-navbar
            rightNavbar.addEventListener('mouseenter', () => {
                listItemsTimeline.play();
            });

            rightNavbar.addEventListener('mouseleave', () => {
                listItemsTimeline.reverse();
            });

            // Attach the toggle function to the scroll event
            window.addEventListener('scroll', toggleHeroSection);

        });

        var player = new Vimeo.Player(document.querySelector('.video-sidebar iframe'));

        // Function to pause the video
        function pauseVideo() {
            player.pause();
        }
        var closeButton = document.querySelector('#profile-close-btn2');
        const canvas = document.getElementById("canvas")

        // Close button click event handler
        closeButton.addEventListener('click', function () {
            pauseVideo();
            // Additional code to hide the popup goes here
        });
        canvas.addEventListener('click', function () {
            pauseVideo();
            // Additional code to hide the popup goes here
        });

        const scroll = new LocomotiveScroll({
            el: document.querySelector("body"),
            smooth: true, // Enable smooth scrolling
            // Other options...
        });


        function disableScroll() {
            // Get the current page scroll position
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            // Store the scroll position and prevent scrolling
            window.onscroll = function () {
                window.scrollTo(scrollLeft, scrollTop);
            };

            console.log('Scroll disabled');
            lenis.stop()
        }

    </script>

<?php

get_footer();
?>