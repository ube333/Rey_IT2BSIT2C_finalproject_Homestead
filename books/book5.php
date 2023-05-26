<?php
    session_start();
    error_reporting(0);
    $username = '';   //set
    if(isset($_POST['username']))
    {
        $fromuser = $_POST['username'];  
        if($fromuser)
        {
            $_SESSION["access"] = 1;
        }
        else
        {
            echo "Invalid";
        }
    }
    if(isset($_GET['logout']))
    {
        session_destroy();
    }
    $useraccess = $_SESSION["access"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin - Albums</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>



<?php if($useraccess!=1){  ?>
<main class="login-form" style="margin-top: 150px;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Type anything, to confirm you are not a robot</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Read?</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="username" required autofocus>
                                </div>
                            </div>
                            
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a href="../book.php" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<?php } else { ?>
        <style>.profile-head {
    transform: translateY(5rem)
}

body {
    background: #654ea7;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh;
    overflow-x: hidden
}</style>
<body oncontextmenu='return false' class='snippet-body'>
<div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="images/photo-profile1.jpg" alt="..." width="150" class="rounded mb-2 img-thumbnail">
                        <a href="?logout=0" class="btn btn-outline-dark btn-sm btn-block"> Back </a>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">21,150</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>read</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">756,450</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>

            <div class="px-4 py-3">
                <h5 class="mb-0">Title: Lilies </h5>
                <h5 class="mb-0">Author: Pari Ghodsi </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">*Trigger Warning: Pregnancy Loss

“Do they come with a card?” I solemnly asked the florist, a petite, tan woman with thick blonde hair cascading down her back. The kind of hair that has become popular for women half her age to have threaded and sewn onto the base of their skull. Even though we were in West Hollywood, the pulse of trend and glamour, the three untouched horizontal lines etched onto her forehead told me that her hair was hers and that she had only passed by the fancy salons lined up around the corner on Santa Monica Blvd, never to even wonder who was inside. I on the other hand, was a regular at one of those salons.

On the Saturday mornings that I was off, I would enter the beauty haven in my strategically-worn leather boots and ripped denim and discuss the Negative Love Cycle with my stylist, a chicly-thin, equal part stoner and girl’s girl. Last June, I sat under a dryer waiting for my conditioning treatment to set in and tried to eaves drop on Ellen Pompeo, the lead actress on Gray’s Anatomy. She softly spoke to her colorist, a gender-fluid man with highlighted cheekbones, a purposeful five o’clock shadow and two-hundred thousand Instagram followers. He in turn, pursed his glossy, plump lips and nodded in agreement as he transformed her ashy blonde hair into a sun-kissed Balayage masterpiece. That day, I leaned towards the both of them pretending to text, fully focusing all of my thoughts on to my ears, as if that could intensify my hearing. I tried as hard as I could to gather what they were saying while simultaneously questioning why I cared.  Since moving to LA for residency I had seen too many celebrities to count; Dr. Dre in a valet line, Cuba Gooding Jr at a piano bar, and I even shared a cigarette once outside of the W Hotel with Pink, but looking at Meredith Gray was like looking into a carnival fun mirror. Here was a woman who played a physician, where I was a woman who was sitting there having my hair done playing anything but.

There are the physicians that live and breathe medicine. The true scholars. The scientists that wake up on a Sunday morning, configure a beaker and a gram scale to make their pour over, and then sit on their patio at sunrise reading the latest medical research in the Journal of the American Medical Association. But I wasn’t one of those.

In my third year of medical school, the year that I began my clinical rotations, I started a different narrative for myself. I began to pride myself on being more well-rounded than the kids whose identity rested on being a future physician. On occasion, I would slip away to parties filled with graduate business students from the nearby university and not- so- slyly signal that although I was soon to be a physician, I was more than that. I would chat about the latest Desperate Housewives episode, fling my hair like Beyonce while dancing to Crazy In Love, and never mention that I had spent the whole day reading about how the kidney regulates plasma osmolarity. When specifically asked what I did, I didn’t lie like my friend, Molly. I just didn’t volunteer the information. Molly would say that she worked at Express. She said that guys were no longer interested in her when she mentioned that she was in medical school. I found that to be ridiculous. I would never hide who I was for a man. Even now a full decade later, after spending an entire evening talking to a man and failing to mention what I do, it isn’t for him.

“Yes, it says My Deepest Sympathies,” she responded, her weathered hand passing me the four by two-inch paper that accompanied the basket of white flowers. I always found it fascinating that lilies are believed to represent rebirth and purity, yet are often found at funerals. Such opposition within one flower. “Okay, great. Can I also borrow a pen?” I asked. I wasn’t prepared for today in more ways than one.

I remember the day that Rebecca walked into my office for her New OB appointment. The first appointment that a patient has after a pregnancy has been confirmed. Nothing was particularly remarkable about Rebecca or her past medical history. She was a humbly pretty mother of one who had previously delivered via cesarean section for failure to progress. She had an iridescent glow despite wearing little make up. Her natural beauty was enhanced by the first trimester hormones and her cheeks shined as they pressed up under her eyes beaming with excitement. “Hi, I am Rebecca and this is Lincoln,” she announced while motioning to her first born. Rebecca’s humility left a wide-open stage for her son to shine, and that he did. The minute this little boy opened his mouth I was enamored. He spoke with language way beyond his years, stretching multi-syllable words into song with his six year- old bird like voice. He excitedly watched as his mother’s blood was drawn, questioning the phlebotomist about her technique like he was being tested on the material later that afternoon. His wide eyes, round face and inquisitive nature made him seem more like a cartoon of a child than an actual one. The cartoons that look like they are for kids, but are written for adults.

Over the next twenty-six weeks, I would speak more and more with Lincoln during his mother’s visits. He would ask me questions and I would gladly answer. I showed him my stethoscope and let him listen to my heart on the days his mother was getting her ultrasounds and he would giggle with overwhelming joy shouting “I heard it! I heard it!” I loved the days that he came to the office and his mother told me that he loved coming also.

I had always kept a definitive line between my personal and professional life. I had colleagues that would befriend their patients. Nothing inappropriate, but enough closeness that after the delivery they would friend them on Facebook or accept an invite to dinner. Not me. I liked the dichotomy of me. I liked living on the other side of town- not to run into any patients while shopping. I liked having no social media footprint. I liked that none of my patients knew anything about my personal life. “I am only a doctor until five-o-clock,” I would joke to my friends, who were mostly in the entertainment industry. As an OB-GYN I was so often on call that the statement was false, but the sentiment was true. All these years I had successfully kept the different parts of me separate.

Rebecca’s pregnancy and repeat cesarean of her second child was uncomplicated. Her postpartum stay was routine. It wasn’t any different than most of my patient encounters and I would have forgotten it entirely if it hadn’t been accompanied with watching Lincoln bask in the glory of becoming a sibling. Yes, he was wearing the obligatory “I am a Big Brother” T-shirt, but it was the nature in which he inspected his baby sister, Lenny’s toes and then fingers like an explorer discovering life on another planet, that left his mark on me. Three days later as I punched in Rebecca’s discharge order into the hospital computer system, I felt a pang of sadness. Yes, there would be two more office visits. One for an incision check and one at six weeks for a complete postpartum examination, but overall, I would be seeing Lincoln less. So, one year later when I received the invite for Lenny’s first birthday party I chose to do something I hadn’t done before and RSVP’d “yes.”

The day of the party, I parked my car down the street from Rebecca’s house in West LA. It was a three- bedroom, modest looking English country style home that was built in the 1920’s. If it were in Iowa it would have cost roughly three-hundred thousand dollars, but in the middle of Santa Monica it was upwards of three million. I nervously walked up to the door like it was the first day of ninth grade and I had just transferred to a new school. I fiddled with my dress, gripped my gift bag with my right hand and started to knock with my left when Lincoln flung open the door, “Dr. Kloss! Please enter, welcome, come on in, you can leave your purse in the foyer.” I smirked at his seven going on forty-seven style greeting and all of my anxiety dissipated. ‘This is fine,’ I thought to myself. No harm, no foul. Doctors used to do house calls all the time and although this wasn’t a house call, it was a house visit.

During the party, I mainly hung out in the back of the yard, keeping to myself. I was hoping to spend time with Lincoln, but he was busy flapping his arms screaming “Marco!” with his friends in the pool. I gladly ate sugary, grocery-store vanilla cake with hot-pink frosting, was publicly honored by Rebecca and her husband, Tanner, as the doctor that delivered Lenny, and shortly after excused myself to get back to my other life. I was meeting my girlfriends at The Troubadour later that night for the first ever Guns N’ Roses reunion show. As I was back in the foyer picking up my black leather cross-body bag, Rebecca tip-toed behind me and gently tapped me on my shoulder. “Thank you for inviting me Rebecca, I have to go, I have some patient charts to catch-up on.” She warmly hugged me and whispered into my ear, “I am pregnant. See you in a couple of weeks.” I formally hugged her back and smiled with happiness for her, and for myself. 

I stared into the florist’s turquoise eyes as she passed me the pen, now realizing that she was quite beautiful. She didn’t need to iron out her forehead wrinkles with botulinum toxin just because everyone else in town did. “Is that all?” she asked. “Yes, thanks,” I replied. I decided to let the pre-printed front of the card send the message and I awkwardly scribbled “Sincerely, Dr. Kloss” in my hospital handwriting on the inside, put the pen down and headed out the door with my bouquet.

The first few months of Rebecca’s third pregnancy had the nostalgia of a high school reunion. Lincoln was back, but he was a bit older. He was verbose, but the almost two years that had passed since we first met had aged him just enough to remove some of his naïve enthusiasm. His baby sister was also along for these visits and he dutifully spent most of his time playing with her. I still enjoyed the days they visited, but I found my interest turning more towards Rebecca. I was interested in all of my patients; their past surgeries, family medical histories, and journeys to pregnancy, but I became more and more interested in Rebecca as a person. Who was this woman that had raised such an interesting child? Through talking with her, I learned that her and Tanner had met their junior year in college at UCLA. She was originally from Austin, Texas and her un-styled ponytail and minimal make up was not because she was too busy as a mom to fiddle with cosmetics, but because she was a hippie at heart. Like me, she had also spent many years buried in books. She was on her way to complete her PhD in Clinical Psychology when she became pregnant and because Tanner travelled quite often as the VP of Sales for a solar technology company, she decided to put her degree on pause to spend time with Lincoln. Her parents were back in Texas, where her sister also lived, and Tanner’s had passed away many years ago, leaving them the home that I had reluctantly visited. I think Rebecca began to enjoy her visits as much as I did because she started scheduling her appointments at 4:15 pm, my last appointment time of the day. She would stay in my office after her appointment ended asking a few pregnancy related questions, although we were both aware that she knew the answers, being that it was her third time around. Quickly our conversation flowed from pregnancy pains into our favorite recipe for nut-free pesto (we were both allergic), our favorite bingeable tv shows; mine was Younger and hers was The Crown, and the best spots for authentic wet burritos on the westside. One late afternoon, before she left the office out the back door that stayed unlocked after hours, I gave her my personal cell phone number and I saved hers in my phone. I told myself that I just wanted to make sure that I didn’t miss the delivery. When I saw her number light up across my phone screen just two weeks later when she was twenty-two weeks and two days pregnant, I smiled to myself, assuming she had come up with another reason to chat.

“Dr. Kloss?”

“Yes, Rebecca, What’s going on?”

“I think I broke my water.”

My heart dropped into my stomach. “Go to the hospital. I will meet you there and we will check you out and see what is going on.” I casually instructed her, covering my fear with programmed dialogue. 

I had entered the automatic doors that read “Labor and Delivery/Sala de Partos” more times than I had entered the front door of anywhere that I have lived, but when I passed through them to meet Rebecca on the other side I was hit with a mix of sorrow and angst that I had not felt before. What I had feared, was happening. Rebecca had broken her water. She had also started feeling contractions on her drive into the hospital. On her arrival, the nurse placed two external monitors around her abdomen, one for the baby’s heartbeat and one, a tocometer, to measure contractions. She was now contracting every five minutes and was moaning in anguish with every peak visualized on the screen. The baby’s heartbeat was elevated. I examined her and found her to be three centimeters dilated. She had a fever of 101.2 degrees Fahrenheit. There was no way to stop the labor and I had to not only explain to Rebecca that she had an infection and needed to be treated with antibiotics in order for the infection not to spread to her entire body and put her at risk of ending up very sick and in the ICU, or worse, but that the baby was going to be born and he was too early to survive or to try and save.  

She was still processing what I had told her when her baby was born.

His thinly-skinned, almost translucent body rested against my left forearm as I used my right hand to clamp and cut his umbilical cord. I everted my eyes from his chest refusing to see the signs of life that were present. Using physical pain as a diversion from the emotional pain that was increasing in pressure behind my eyes, I bit down on my tongue. I carefully wrapped her baby in a blue hospital towel and lifted him up to her. Tanner leaned over Rebecca holding her as she held their son and the both of them wept looking onto his fused eyelids that were too immature to look back. “I am so sorry.” I whispered, bowing my head. As I exited the room, I looked back at three of them to honor the moment as they embraced their baby and he left this world.   

My clammy hands gripped the flower basket as it stamped indentions into my palms. I should have written more on the card. “Who just signs their name?” I asked myself. “Should I have even come?” I questioned, but how could I say ‘yes’ to a birthday and ‘no’ to a funeral? Suddenly sorrow burst through my eyes knocking down a well-built wall. As I crept towards the funeral home doors, I began to weep, not just for Rebecca, but for all of the mothers that I had seen lose a baby. For all of the mothers that had a baby in the NICU. For all of the mothers that had bled too much or had experienced an unexpected C-section. The mothers with postpartum depression. The mothers without family support. The mothers that have endured abuse during pregnancy. The mothers without homes to take their babies to. I wasn’t different than other doctors. I wasn’t more fun. I wasn’t two different people. I had simply been compartmentalizing my grief away. I had been shutting it off, but today I couldn’t manage to find the power button.

A woman in a black pant suit and side-swept bun stood at the funeral home door. She had a classically pointed nose and the corners of her mouth turned up the same as Rebecca’s. Their likeness revealed that this was her sister. Sniffling quickly to try and stop the dripping from my nose, I unsteadily approached her. My hands shaking, I pushed the basket of flowers towards hers. She grasped the bouquet and our wet eyes met. My voice arose from my gut, climbed through my chest and out of my already open mouth,

 “Hello, I am Lily. I’m a friend of Rebecca’s.”  

</p>
                    
                </div>
            </div>
            <div class="px-4 py-3">
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">All Rights Reserved. Copyright 2023</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
<?php } ?> <? }?>
</body>
</html>