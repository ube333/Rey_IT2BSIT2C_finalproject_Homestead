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
                <h5 class="mb-0">Title: The Idiom Archipelago </h5>
                <h5 class="mb-0">Author: RJ Holmquist </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Day 1: The Sundering Seas

Welcome to The Pudding, my little ship hung with true blue sails. She is bravely buoyant upon the sundering sea as she bears me questing for proofs among the Isles of Idiom. Aboard there is a crew of only me and my beagle Salty. I steer the ship on the heaving waves and Salty listens to my meanderings, understanding my moods with his plaintive eyes. You are here too, though you understand much less and exist only in the corners of my reveries.

I am charting these waters and the isles they swaddle. I am good with a pen and a compass, and hope to describe for you the contours of shorelines and the shapes of waves that caress them. If I should discover any proofs along the way—buried in the sand or wrecked upon the reefs or marooned in the island villages—I shall attempt to sketch them for you as well, though, as you have so often told me, I am not good with abstracts. Still, I will make the attempt, and perhaps in the effort you and I will come to some kind of agreement. Perhaps we will narrow the rift between us. Perhaps we will find each other again.   

Day 8: Among the Hat Eaters 

The island rises from the sea shaped much like a tall capotain with a flattened top and a reef encircling it like a brim. The Pudding tossed dreadfully as we crossed the reef, Salty was nearly dislodged from the deck, but I held the tiller steady and we landed safely enough on the shore.

We were greeted by a gentleman with an impressive edifice upon his head, a towering cap made of objects I thought would be better kept in a drawer or on a shelf. I saw a coil of rope, a pair of scissors, a bowl filled with buttons and a birdhouse among a dozen other odds and ends all fastened to his hat. His neck bulged stiffly with the necessary muscles to carry such a load. 

“If you make it back across the reef in that little dingy, I’ll eat my hat,” he said as he strode towards us.

“I’ll wait til the tide is high and going out,” I answered with a smile.

He harrumphed and walked away. 

Salty and I shared a look of bemusement.

The island’s town had one outstanding feature—doors and roofs all built extraordinarily tall, as if a race of ten foot giants lived there. The inhabitants, however, were not of unusual height, except for the hats they never removed from their heads. Like the gentleman who greeted us, every man, woman and child wore an ornament of outlandish proportions atop their pate, each decorated with an astonishing variety of objects. Stranger still, these people seemed eager to wager eating it with every utterance they made.

“If you’re not here for resupplying, I’ll eat my hat.”

“If you’re not from Square Island, I’ll eat my hat.”

“If your beagle there ain’t got scurvy, I’ll eat my hat.”

I wonder what you would have thought of these people. I am sorry to say I saw a bit of you among them—always so adamant that their opinion mattered most. On this island, being right was everything, and the size of the hat seemed to indicate the wearer's confidence in his own judgment and his stubbornness against ever admitting he was wrong. Before I left the island, I saw a sight of tremendous sadness. Old and bent, a man was forced to eat his hat. He could not, of course, consume the colossus assembled over a lifetime, but he would not admit he was wrong. So he was sent off the island, alone, in a tiny barque. As he faded into the darkness towards the crashing reef, I thought of the sea between you and I, and the thought made my neck ache with stiffness.

Day 23: Where All Things are Equal

Short Stick island is perfectly divided, everything in equal proportion. When I moored The Pudding at the pier, the dockman asked me to reposition so the distances between either end of the dock and either end of my ship were the same. Ashore, the trees are trimmed to equal height, the yards are fenced in equal plots, the pickets are spaced with perfectly even gaps and the people all are equally discontented. 

Their unhappiness springs from their shared mantra, posted in every public place and over every private door: “Never accept the short end.”

In the marketplace, dickering voices make vigorous testament to the zeal with which the ideal is upheld. At every stall, proprietors and customers argue their side of the bargain is less equal, and at the closing of every deal both sides are displeased.  

The professional district is lined with offices belonging to the likes of “Murphy and Sons,” “Grieves, Rogue and Blackman,” and a multitude of other practitioners of law. The thriving economy of litigiousness promises their clients “the long end,” and, judging by the marble facades and polished gold knockers, the owners of these offices frequently hold that part of the stick themselves. 

As Salty and I took our repast, I saw a small man and a large woman whose condition made me wonder. The innkeeper brought identical portions of stew, set before them in identical bowls. The thin man reached over his spoon and took a scoop from the woman’s dish. 

“Everyone knows we men use up our vittles faster, it’s only fair,” he said, depositing the scoop in his own bowl.

 The woman reached out her spoon and took a double portion back. “I’m twice your size,” she said, “it’s only fair.”

The man reclaimed his scoop and took another from her bowl. “I hauled two cords of firewood this morning. It's only fair.”

The woman’s face grew red. “I’ve done laundry for most of the town today, it’s only fair.” She dumped half his bowl into her own.

 “I thatched the roof just yesterday.”

“I birthed your children.”

“I worked my fingers to the bone.”

The stew flew back and forth across the table, and neither man nor woman ate their fill. Finally, both stomped out to find a lawyer to help them argue their case.

I looked down at Salty, who was licking the last from his bowl. “Here,” I said, “have some of mine.”

The innkeeper then asked me to leave, declaring with disgust that “short enders” weren’t allowed in his establishment. 

As I walked down the docks, I thought of you. Your eyes that flash when you are angry and your tears that you try to hide. I wonder if there is truly such a thing as “fairness.” If there is, I suspect now it isn’t worth at all what I thought it was.

Day 67: Twisters and Turners

Though Plotter’s Island is quite small, it has two villages, one on either side—an easy walk’s distance. The residents of each intermingle everyday as they go about their business and I have never seen such friendly greetings and doffing of hats and “pleased to see yous” among any bunch of neighbors. At evening time however, they separate. Twisters brood together in little cliques in one town, Turners seat themselves pensively at tables in the other.

Salty and I sought company among the Twisters. We found them most accommodating during the day, offering help to strangers and exclaiming how fortunate they were to have visitors to their humble land. After sunset, the mood turned different. I tried to join a group of conversationalists, but my presence dampened the dialogue and I saw sidelong looks that made me feel I wasn’t welcome. So I sat with Salty some way off and listened to snatches on the wind. Nowhere have I ever heard such unabashed gossip. 

“The stranger, what have you heard about him?”

“He’s running from the law. Killed a man on Square Island.”

I looked aghast at Salty and rose to my feet to correct this falsehood. Salty cocked his head and whined that I should wait.

“Oh posh, don’t be so gruesome. He’s only a politician. Scandal, corruption and all of that but he never killed a soul.”

“That’s much worse in my opinion. A good wholesome murder in fit of passion is better than scumbag tax embezzling.”

“I heard he’s done both.”

I couldn’t help but snort at such outrageous accusations. The huddled group of Twisters glanced furtively in my direction and shuffled away with lowered voices. 

Salty and I walked briskly to the Turners’ side. 

I took an open seat at a table where half a dozen others furrowed their brows and stroked their chins. The table was shaped exactly like the island, and wooden carved figurines stood across its surface. 

 “What’s the game?” I asked.

“Game?” grunted the mustache next to me, “this is no game here my man. This is ‘just deserts.’”

He lifted a push stick and used it to shuffle a group of figurines across the board.

“Are those Twisters?” I wondered, looking at the pieces.

“Aye, they are. They’re the ones that told that tale about me and Mrs. Brinkman’s cabbage patch. I don’t even like cabbages. But I'm plotting something real good here.” He scratched his chin, then pushed another piece across the board and chuckled darkly, “they’ll never see this coming.”

“They fabricated the most horrible things about me, those Twisters did.” I said.

“That’s what they do,” a gray haired lady across the table muttered, “always suspicious, imagining the worst. But we got them beat here. We turn it all right back on them.”

“Well, I can see how that would be quite satisfying.” I chirped, “I’d like to repay them for their unkind thoughts myself. Have you got an extra push stick around?”

Salty whined from down between my feet. His sad brown eyes reminded me of you, and suddenly this game felt too familiar. 

I scuffed the sand as I walked back to my ship. Twist and turns, thickening plots. I have trouble now remembering where it even started between us and how it ever got this far. I hope you think of me, wherever you are, however far across the sea. I am thinking of you and I promise all my plans are different now.

Day 108: The Simple Things

I could see the tall spires of Hardly Island long before I reached its shores. It’s a marvel of spiraling towers and crystal palaces soaring in the sky and sparkling in the sun. The docks are of a floating metal that lifts and falls with the tide and everywhere I look there is another invention, a wonder of ingenuity crafted with exquisite skill I cannot comprehend. I would’ve asked how they were made, but I could not find a single moving creature. The streets were dark, cobwebs filled the unlit lamps atop their posts and silence alone enjoyed the many miracles.

At the edge of town on a humble porch that did not match the surrounding grandeur I met the only living soul upon the island. He was old and frail and his chin drooped against his chest as he rocked gently in his chair.

“Your town here is magnificent,” I called loudly so he would hear.

“Eh? You like it? Gabby and I, we built it ourselves you know.” He rested a hand on the empty rocker next to him.

“Just two of you?”

“Eh? Well yes, just two of us. We’re geniuses you know. She’s a surgeon and a scientist with a mind for detail that never met a problem it couldn’t solve. Me, I’m an engineer, best there ever was. Together, we did all of this ourselves.” He patted the arm of the empty rocker.

“You must be proud.”

“I suppose,” his jowls wobbled as his aged head tremored. “But you know, we spent our lives mapping out synapses and sending ships out into space. Wasn’t till the end we figured out it isn't brain surgery or rocket science that makes you happy, it's the simple things.” He looked over at the empty chair and gave a roguish wink.

“The simple things?” I asked, not daring even a glance at the vacant chair.

“That’s right. Like hand holding and telling someone she’s pretty,” he winked again, “and stealing kisses and being glad you got each other no matter what. That’s better even than driving a horseless carriage through the sands of mars. I’d know.”

“Is Gabby here? I’d like to meet such a fine lady.” I asked, foreboding in my heart.

“Why she’s right—” The old man started, staring at the empty rocker. He licked his lips. “Well, she must have stepped inside. She’ll be right out presently I’m sure, it’s not too late yet.”

Day 109: Course For Square Island

Salty knows we’re heading back. He rests his paws upon the bow and seems to taste the air of home ahead of him, his tongue lolling, his ears perked. I hope I’ll find you there. Perhaps you’re waiting on the bluff, your golden hair dancing on the wind, your empty arms yearning for me like I am yearning for you. I am not coming back the same. The Pudding’s holds are full of proofs. You’ll see them, if you let me show you. The wind is in our favor, the true blue sails are filled and Square Island has always promised new beginnings.</p>
                    
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
<?php }?> <?}?>
</body>
</html>