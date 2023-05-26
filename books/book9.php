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
                <h5 class="mb-0">Title: Jesus and Jockeys </h5>
                <h5 class="mb-0">Author: Lynda Williams </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">CW: stillbirth, brief violence

I had to decide what to do with Jesus. Take him home in the backseat of my Versa, or carry him outside and place him beside the triple duty Glad bags at the end of the drive.

I knew I was in trouble when I discovered the drawer with all the Jockey underwear. There must have been at least a dozen unopened packages. Three to a pack. All white and French cut. I could hear her extolling the virtues of cotton from the grave. Say what you will about my mother, she understood the value of fabric that breathes. 

As it turned out, the entire dresser was filled with unopened packages of socks and underwear, with the exception of one small drawer devoted to greeting cards that dated back to the eighties. As someone who does not send greeting cards lest I burden someone I care about with the task of throwing them out, I believe it would be more efficient if we all just agreed to place five dollars in the garbage can and think good thoughts. And then there are people like my mother, who hold on to the gesture by warehousing it in a drawer they never open until it’s time for someone else to swallow it with a trash bag.

Death changes the way you think about stuff. Everything you keep is a decision someone else is going to have to make. All those photographs that never made it into an album, the snapshots of birthdays capturing celebrations composed of cone hats, party streamers, and the Jos Louis with the single candle in the centre my mother called birthday cake. The music albums, records of Roy Orbison and mixed cassette tapes of Charley Pride and Keith Whitley, all rendered obsolete in a world that’s gone digital. All the shit that haunts me more than my memories. 

People shouldn’t be allowed to grow old in the house they grew up in. If we all just kept moving every three to five years, like my sister and I did, no one would get caught in the layers of dead people’s unmade decisions. My father’s coveralls and pearl snap shirts were still hanging in the hall closet, and my grandmother’s embroidery patterns and cigar boxes stuffed with thread were collecting dust on the bookcase. Those stupid hobbies that are meant to keep you young will put grey hairs on someone else’s head. 

I had inherited the job of cleaning out this place in preparation for the sale of the house mostly because I was the sister not on bed rest for the final trimester of her pregnancy. Sherri was going to have her first kid in a couple months, and she was racing to finish the second draft of her latest novel before her due date. She wrote romances, you know, the ones with the red spines and covers featuring the long-haired Zeus-type guy with the unbuttoned shirt, and the oddly hairless chest. Of course, Sherri wasn’t responsible for the ridiculous covers. She just wrote the stories, and she was working furiously to get this one done. I wanted to tell her to rest while she could, but I don’t think she would have listened.

Harlequin romances were one of my mother’s pleasures. The attic was filled with apple crates of them, mostly sourced for fifty cents from garage sales. At that price, I don’t understand why she didn’t just read them and throw them out. I asked Sherri if she wanted me to set them aside for her, but she assured me she’d probably read most of them as a teenager, so all I had to do was dispose of them. It sounds easy, but I had to haul sixteen apple crates down the narrow attic stairs in the sweltering August heat with the sound of dead mouse bones randomly crunching under the cheap foam soles of my flip-flops. By the time I finished, I vowed to buy a Kindle so my daughter would never have to do this for me. I spent the entire first afternoon in the attic, strangled by the smell of mothballs and decomposing rodents. I retreated after using my inhaler for the third time.

My mother died of heart attack, sixty-four years young, and unlike my Grandmother who had spent the final years of her life applying masking tape with our names on it to every object in her house, she didn’t have anything sorted. She was still sorting through the things left behind by my father and their parents. Jesus for instance, stood facing the corner in the spare bedroom with one raised hand missing and exposed wire in its place, giving him a Captain Hook vibe. My father, who did not so much as attend mass at Christmas, insisted it was necessary to keep him; he bent the wire on the missing hand so it would hold his pipe. It was my mother who turned him to face the corner after he passed away.

I had told Sherri from the outset that I could whip the house into shape in a week. She laughed and said, “Bring a shovel.” And there I was, twenty-four hours in and beginning to see her point. I didn’t visit my mother as frequently as she had, twenty minutes on the phone once a week seemed to be the limit of our tolerance for each other, and when I did come around, I rarely went past the kitchen. I couldn’t remember the last time I’d been upstairs, and I was certain I hadn’t been to the attic since I’d played hide-and-seek as a child. A week was a conservative estimate, but it was all the time I had. I needed to be back in the city to pick up Crystal from her Dad’s by six on Sunday night.

I started the new day with the spare bedroom because it would be easy—a couple chests with empty drawers and a few good dresses in the closet. Instead I faced an obscene quantity of Jockey underwear. I took a closer look at one of the packages. The price tag was from Zellers. As I stood there judging my mother, I realized that I was wearing a bra I bought before I got married eight years ago. The elastic was shot, the straps kept slipping down, and the exposed underwire poked into my chest. It wasn’t that I didn’t have enough money to afford a new bra, it was just that I knew I’d need that money for something more important. I had a kid. So birthdays and Christmas and shit. Was this how my mother spent her pension? Did she walk into the store one day and decide to fill her shopping cart, or did she just pick up a pair every time she went in for a bag of Whiskas? 

I had a system: garbage, donate, keep. Can you donate under things? Who goes into the Sally Ann hoping to find a polka dot thong? How can you throw away so much perfectly good cotton?

I made another category called Ask Sherri.

I moved to the bathroom, opening the medicine cabinet to find a single pair of nail clippers and multiple jars of Pond’s cold cream. I screwed the cap off each one because I recalled my mother hid cash in these when we were growing up. Sure enough, I was rewarded with three wadded up twenties. Most of the jars were just washed out empties, with the exception of one that actually contained product. Washed out empties was a theme I would encounter again in the kitchen. Yogurt containers, pasta jars, hell, there were even baby food jars she used to sort her sewing notions. It all went out to the rented dumpster, and I began to worry there wouldn’t be enough room for the important stuff, like the three-legged chesterfield and the random sheets of plywood propped up against the wall in the hallway. 

By two pm I was ravenous, and I scoured the kitchen cupboards for something to eat. I settled for saltines and peanut butter, washed down with a cup of tea. Tetley tea and No Name peanut butter. That was the difference between my mother and me. Nothing but Kraft for my toast (it’s not peanut butter without bears on the jar) and only the cheapest, largest bulk carton available for my orange pekoe, and of course, I used every bag twice.

I stayed to work in the kitchen after I ate because I knew what to expect. An obscene collection of margarine containers she called Tupperware and a “never-let-you-down” drawer filled with plastic cutlery, twist ties, and random bits of string. I found aspirin in three different cupboards and one drawer was devoted entirely to bread bags. I made short work of her excess, pulling out the drawers and dumping them into the trash. I was on a roll until I came to the china cabinet.

We ate our hot dogs and our bologna and our tuna casserole off Corelle, like every other working-class family from my generation, but my mother also had twelve place settings of Royal Albert American Beauty that she had received as a wedding gift from her grandparents. It was reserved for Christmas and Thanksgiving. Over the years she expanded her collection to include other patterns that she scavenged from yard sales. Lavender Rose was her favorite.

At that point I’d been listening to Conway Twitty spin on the Victrola for hours, and I caved and phoned Sherri just to hear a different voice.

“Do you want the dishes?”

“The Corelle?” She asked as if I’d offered her a dead skunk I found on the road.

“No, the fancy ones.”

“In the hutch?”

“In it. On it. Around it.”

“Just the ones you don’t want.”

“So all of it?”

“Isn’t there a pattern you like?”

I would have liked to hear the sound of all that bone china hitting the bottom of the dumpster. “Nope.”

“You do know it’s worth money?”

So was my time. “I don’t care if it’s worth five hundred a setting. I’ve got nowhere to put it and no interest in selling it.”

“Just wrap it all up and think on it. I’ll take whatever you don’t want.”

“One more thing. Do you want your old report cards?”

“No, why? Are you keeping yours?”

“She didn’t save mine.”

“You just haven’t found them yet.”

And that was Sherri for you, believing in my mother as much as Mom believed in her.

I spent the next few hours wrapping dishes in newspapers from the stacks that could be found in every room in the house. I waited until a quarter past eight to bust into the dusty, half-empty bottle of Gibson’s Finest. It was the best surprise so far, but curious. My mother didn’t drink whiskey, and my father was all about the Canadian Club and Beefeater gin. I had done two shots before a thought occurred to me about who the Gibson’s was really for.

I’d grown up in the long shadow of my mother’s short-lived affairs. I couldn’t say how many she’d had over the years, and I’m not sure exactly when I clued in, but I knew the pattern. She’d fight with my father, storm out the house, and be gone for days at a time. It started when I was so young it didn’t even occur to me to wonder where she was going. By the time I’d reached sixth grade, my classmates were calling Mr. Gauthier, our French teacher, my step-daddy or worse, Papa Gauthier. Mercifully, the school year out lasted their relations. 

My father’s health was in rapid decline—he died of lung cancer after a lifetime of working in an asbestos mine—which made him exponentially more miserable and increasingly cruel with his words. My mother was far from a slave to his needs, and Sherri was still too young to understand what was happening. I was his nurse that year, and I missed so much school that there was question of me repeating the seventh grade. Ultimately, math was the only subject I had to re-take, but my resentment took on unwieldy proportions, and until her death, I didn’t miss a single opportunity to remind her. It was around the time your father died. I wouldn’t know. I was busy repeating math that year. Oh, I’m supposed to add up these numbers? I don’t think I learned that. I must have been absent when they taught us. You need the percentage? Ask Mom. I traded my pencils for a mucous cup, remember? 

And then my father died and my mother reformed. She didn’t re-marry. She didn’t have boyfriends. She didn’t go out. I found her sudden good behavior tremendously annoying. Our house shrank with her in it, and I moved in with my first boyfriend when I was sixteen. He was twenty-four. Three months later I had my first abortion. I wasn’t ready to ruin someone else’s life. Yet. My mother never forgave me for bolting and setting a bad example for Sherri, but Sherri always did her own thing anyway, and she said herself the house was a happier place without the two of us arguing.

I took the stairs to her room two at a time. I’d been avoiding it up to then, but suddenly I was interested in finding evidence. What tokens from lovers past had she kept? A letter, a bracelet, a half-used bottle of cologne. Maybe she had a separate cigar box devoted to each one. Inventory collected from each notch on the bed post. There had to be stuff.

It turned out, her room was a museum. There was an entire wall of cardboard boxes labelled Dad. Her sewing machine was buried under a pile of fabric (all floral and mostly cotton), and there was a tower of quilts as high as the mirror on her dresser. It was better that way. I didn’t need to see my own reflection. 

I opened the first drawer. It was filled with income tax returns from the nineties. The next one was a mix of argyle dress socks and sheer pantyhose. The third and fourth were shrines dedicated to my sister, bursting with mediocre artwork and well-written poems and stories. One random finger-painting with my name on it festered at the back, jammed behind Sherri’s spiral bound notebooks.

It was a disappointment to find so much stuff with so little meaning. I turned to the boxes that said Dad. I took one off the top and pulled back the flap. Inside, I discovered a collection of 45s: David Allan Coe, George Jones, Hank Snow. I picked up an album, drew the record from its sleeve and snapped it in two. I paused, half expecting to hear my father’s roar. I tossed the pieces of broken record on the bed and directed my attention to the album cover. I had just committed a sin against the late, great George Jones. Yes indeed, he stopped loving her today. Finally. It was hard to believe my father had the capacity to appreciate such music. 

My phone vibrated. Why was Sherri calling so late? Had she finally come to her senses about the dishes? Would I get to break them, too?

My brother-in-law Nate’s voice cracked. “I’m with Sherri at the hospital.”

“God, is she alright?”

“She’s going to be.”

“And the baby?”

“She had it.” It did not bode well. People talked about newborns in terms of boys and girls, pounds and ounces. He whispered the next part just loud enough for me to hear. My niece, he told me, was stillborn.

I asked him to give Sherri a hug from me and to let her know I would come as soon as she was up for it.

I sat at the end of the bed and snapped my record halves in half again and again until I couldn’t make them any smaller. I thought about how this baby already had a room filled with stuff in anticipation of its arrival. I thought about my sister coming home to the taunt of that nursery with all its receiving blankets and plush zoo animals that were meant to belong to to a new little person, and how I would have to tell Crystal she wouldn’t have a cousin.

Wandering back to the spare room, I longed to go back to the time when disposing of a chest full of new underwear was my biggest problem. I drove my foot into the backside of Jesus, expecting him to break apart like a hollow chocolate Easter bunny. He did not. I supposed I wasn’t the first person to underestimate him. His face pierced a hole in the plaster behind the white and yellow daisy wallpaper and a crack ran down his blue and white robes. I recalled my father throwing me against that same wall while my mother was out doing God knows what, or whom. Did Jesus remember that after he forgave them?

My phone vibrated again. Sherri was asking for me. Would I come?

I imagined that the house was on fire and I had to decide what to save.

I left without locking the door and threw Jesus in the back seat of the car with my purse. I hopped into the driver’s seat and took one final look in the rearview mirror. It was dark, so there wasn’t much to look at, which seemed fitting. I started to turn the key, but I stopped before the engine could turn over. I got out and went around back to the passenger’s side to fasten the Savior’s seatbelt. I didn’t want there to be any confusion about who was saving whom.</p>
                    
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