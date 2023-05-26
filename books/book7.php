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
                <h5 class="mb-0">Title: The First Idol </h5>
                <h5 class="mb-0">Author: Tom Bombadil </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">“Stop daydreaming Mr. Delano.”

In a moment, Mrs. Frampton, subjecting the tender wallflower of my affection to the grotesque spotlight of her own indifference, made cease the contemplation of my life’s own end, the one theme of my existence: Andrea Taylor.

It’s the Spring of 2005; I am a 7th grader at Fort Sumter Middle School, home of the Trojans. Andrea sits enthroned one row ahead, three columns to my right. I have mixed feelings about this, for while it affords me an almost uninterrupted view of her during second and fifth period, it also places her immediately adjacent to Kyle Schwimmer: another seventh grader, possessed of summit-less bicep peaks, which forces me to a fixed conclusion that he’s been injecting steroids intravenously since infancy, and whose hair, defying no less than two laws of thermodynamics, I am sure, manages to appear wet and shiny hours after we all have a just expectation that it should be dry. I despise Kyle Schwimmer.

Andrea herself, ah! Andrea, crowned with brown tresses, and bangs; layered alternately and Kevlar-like in Abercrombie and Hollister tank tops; floating on a cloud of all-white Etnies; and tastefully adorned in torn and acid-washed denim: if Helen, Esther, Cleopatra, Meghan Fox herself stood before me, they could, collectively, aspire to light but a Yankee-candle of affection before the blast furnace that is my love for Andrea Taylor.

She dignifies all she touches. Braces, hitherto unthinkable, become the obvious conclusion of several months’ jagged back-and-forth between myself and my mother: she, keenly impressed by the delayed gratification of orthodontics; I, unwilling to suffer an infinite two years of public degradation before my muse. That is, until Andrea arrives one Monday morning, her teeth elegantly arrayed in alternating pink and key-lime green squares – her two favorite colors, and now mine. At best, she freely elected the ornamentation and the entire school, nay the entire world, must soon follow suit. At worst, she was compelled by her parents, and to join her was now a question of solemn solidarity.

“I said stop daydreaming Mr. Delano! You’re not even on the right page! You had better snap out of it before this evening. And to think, you before the entire school!”

As the sole member of my 7th grade class to make the Principal’s List for four quarters consecutively, I was nominated by the Student council, that reverend body, to deliver the customary student-speech at the Spring awards banquet. My entire family would be present, as would a large portion of the student body, their own families included. My speech was already prepared some week in advance, but the grandeur of the event – the achievement of garishly mismatched ties and dress shirts of which adolescent boys seem uniquely capable; the attendance of one’s forebears; the event’s occurring at night! – all of this called for something more than a bare statement of the facts, a weak-kneed acknowledgement of one’s faculty and peers; it demanded romance. 

Everything had prepared me for this moment: by which I mean chiefly Disney channel movies, but it feels like everything. I must take the occasion to declare my intentions, my love for Andrea. I set to work. 

Let it not be supposed that the account I now relate is unrealistic, for I am convinced that if the same series of events does not unfold hourly at middle schools across the country, it is to be attributed less to any want of imagination or romantic inclination on the part of adolescent boys, and more to their own diffidence in making such feelings known. My case may be singular in that I did declare my love, but then, mine was no common love. 

The night arrives. I scramble numbly from the third row of my mother’s van just in time to witness Kyle Schwimmer emerging from the passenger seat of his older brother’s Mazda Miata, a convertible. A pox on all his house! I’m wearing a light-blue button-down, hastily-ironed khakis, and, in defiance of all my mother’s objections, a striped tie: green and pink. Kyle is in all black. I think this is ridiculous. I take a second look. It doesn’t seem quite so ridiculous. I wonder why I did not wear all black. I hate Kyle Schwimmer.

We begin to walk past what should be familiar sights, but in the dark, and on a night of such moment, I recognize nothing. That is… until I hear her voice. Andrea and her parents are following just feet behind us. My younger brother trips over a step. I despise him with my entire soul. She doesn’t seem to notice, or to impute his failings to me despite our near relation. I hold the door open. My mother thanks me with a half-tone of surprise which, I trust, instantly exposes my sham gallantry for what it is. I cannot escape the suspicion that in the short time it took us to move from the van into the school, I have fallen, like one of Milton’s angels, to the furthest recesses of the pit in Andrea’s esteem. She smiles as she enters through the door – I am confident that no door has ever been restrained by such a superfluity of force – and is heard to say, “Hi John!” I ascend all at once from Inferno to Purgatorio to Paradiso. I respond in monosyllables - though, apparently, to some effect, as she graces me with a smile and proceeds accompanied to the cafeteria-made-banquet-hall.

She wears a strapless white dress with black polka dots - I wish she wouldn’t bare her shoulders, what if Kyle Schwimmer sees? - black flats, a red handbag, and a puzzling mix of blush and eye-shadow, the effect of which might have proven comical to an elder member of her own sex, but which appeared to me the very incarnation of beauty.

A half hour passes during which I’m ushered to a seat onstage by Mrs. Frampton, the cafeteria grows steadily more full, and my bowels become a butterfly house. Finally, it is my turn to speak. I address my peers, their parents, our faculty and administration, make some general remarks about the progress of the year. In short, I read the entirety of my two-minute speech which had passed successively beneath the careful scrutiny first of my father, then of Mrs. Frampton, then of the assistant principal. But I am not done. Unfolding from my shirt pocket another sheet of college-ruled paper, scrutinized by none but myself, I begin. 

…

I am catatonic. The few claps which do follow serve only to foreground the vacuum I’ve made of this middle school cafeteria. I’m shushed down the steps by Mrs. Frampton to the empty seat between my father and younger brother. The assistant principal clears his throat and continues as though I’d never said a word. I don’t dare meet my mother’s eyes. Shuffling ensues as the guests are released to the buffet table. My parents think it best that we excuse ourselves. The sole glimpse I catch of Andrea is of her staring directly down, neither white nor red, but somehow both, entirely, simultaneously – with a parent’s hand on each of her shoulders.

We drive home in silence – at least as far as dialogue goes: the radio insists on playing, and I wonder why every single song seems a mockery of the events of the last hour. 

It would be true to say that I spend the evening in agony. It would be equally true to say that I was very nearly buoyant. It was like one of my track meets: an agonizing affair so long as it continued, and even immediately after the race was run, but it just felt so good to have it over with.

I spend time in front of a book, though not quite reading; in front of my television, though not quite watching; and finally, I turn to the family computer. Dare I? She wouldn’t…? I log in to AOL Instant Messenger and there, carved in black pixels is AndreaaaT93. Petrified, mortified, ossified: like some antediluvian fish buried beneath the waves of judgment and become stone, I undergo internal decomposition in a moment. I move to log off when a window appears:

AndreaaaT93: I love you too. :)  

She moved to Colorado that summer; her father received orders to a new base. 

…

It’s the Spring of 2023. I’ve not seen her since. I’ve loved others, or at least said I did. Still I can’t help but wonder how much happier the world might be if we all married the first girl we fell in love with. Has my love ever since been so disinterested? I used to wish that a bear would burst into the halls of our school, so that I’d have something to behead, something to lay at her feet. I wanted to become a soldier, just so I could perish carrying a small portrait of her in my breast pocket. I plundered songs and movie scenes for lines to express, if only to myself, what I could not but feel. It was idolatrous, but, perhaps, not without meaning. Why was I so soon enthralled? Why, in 7th grade, looking for a dragon to slay, a princess to save? 

It will be observed that the contents of my panegyric have been excised from the narrative. The reader may rest assured that Andrea was wooed with all the accumulated prowess an eleven year old may be justly expected to muster. I invoked Shakespeare, Noah Webster; several verses of Stevie Nicks’ “Landslide” and more than one Coldplay song were flagrantly plagiarized; in short: I declared my love to her in no uncertain terms. Kyle Schwimmer teased me ferociously until the end of the year. But then, Kyle Schwimmer was never, if only for a brief moment, loved by Andrea Taylor.</p>
                    
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
<?php }?> <? }?>
</body>
</html>