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
                <h5 class="mb-0">Title: Mitzee’s Moment </h5>
                <h5 class="mb-0">Author: Michelle Oliver </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Mitzee was in prison for a crime he did not commit.

Well, OK, he probably had committed it once or twice. Who knew? Who kept count? But he was very sure that he had been incarcerated now because of something he didn’t do. He glared through the prison bars, plotting. He was Houdini, Al Capone, and Einstein rolled into one. There was nothing he couldn’t do… except break out of this prison, apparently.

If looks could kill, there would be no one left alive in this joint. If he could get out, he’d make each and every one of them sorry they were born. So he sat and glared, the unblinking, one eyed glare that unnerved his enemies. No one stayed before his cell for long. They moved on quickly, repulsed by his battered visage and death ray glare from his single working eye.

He looked around at his fellow inmates. Some lay resigned to their fate, their eyes blank with despair, others shivered and cried, wailing at their fate with terror. The two brothers in the cell on the end of the opposite row cried in fear. They were barely legal, mere babes, and he wondered what was their heinous crime? What had they done to be sent here to maximum security? Perhaps they were framed.

Directly across from him was Snow. Butter wouldn’t melt in her mouth, and she reclined like a queen surveying her subjects. She knew how to work the system, all the guards bent to her will, as she slowly batted her lashes in their direction, purring her delight to see them again. She was a master at manipulation, that one. He’d met her more than once or twice on the outside, and they’d even had a thing going for a while. She looked sweet and innocent, but she was tough as nails. They had worked one joint together in the old days. She was sleek and fast, in and out with her purloined goods. He had been the scout that time, surveying the joint, ready to set off the alarm or create a distraction. Snow had shared the loot, she was an alright sort. Just don’t get on her bad side, or she’d cut you without remorse.

A smaller visitor stopped before his cell, eyes wide with an emotion Mitzee could not name. Horror? Fright? Disgust? Pick one. He gave the small visitor his best one eyed glare and accompanied it with a snarling growl. The visitor moved on, just as he liked it. He enjoyed being alone. He really did. Less to worry about, less to factor into a daily plan, and Mitzee had a plan. Bath, eat, glare. It worked for him. There was nothing else to do. He was on the countdown to death-row, and he knew it. Not much point worrying about it, not much point wailing. Bath, eat, glare. Right until the end.

Snow obviously had other plans. She simpered in her cell as the small visitor passed, flirting shamelessly. She was a chameleon, good at becoming what she needed to be to survive. Mitzee was just too old for it, it took too much energy, but good for her. Snow’s antics entranced the small visitor and she wound herself sinuously into convoluted dance steps that were designed to hypnotise and mesmerise the audience. Captive became captor, and soon Snow was free. God, she was good! From her small, transportable travel cell, she crowed triumphantly. Off to minimum security prison for her. Mitzee wondered how long it would be before Snow busted out. He reckoned she’d be back here within a month, but it was unlikely he’d still be here to see her. He sent her his best ‘well f*ck off and to hell with you’ glare. She smiled like a cat who got the cream. Good to know they still understood one another, he thought.

The prison guards came and went, his cell was cleaned on a regular rotation and the litter was removed and replaced. If he didn’t dream of freedom, of following the butcher bird in the early morning dawn and pitting his wits against the noisy little bugger, he’d be happy, or at least content. But freedom was as long gone as his eye. This was it for him, and he knew it.

He watched as each inmate got their reprieve, their chance at freedom that was precariously perched in the hands of unsuspecting visitors, victims if you will. But no one came for Mitzee.

“I’m unlovable,” he thought to himself with a kind of twisted pride. “I have a face that only a mother could love, and I never knew my mother.”

“Mommy, look, this kitty’s only got one eye!”

Mitzee opened said eye and glared at the little visitor. She wore a patch over her half her face, and the eye that was visible stared into his cell with interest. He hissed and glared, showing all his teeth. The little visitor’s mouth opened wide, showing him all her teeth too. Mitzee was impressed. Some teeth were missing. This little visitor was a scrapper. Must have fought many battles to be so scarred and toothless.

“I want this one.”

“Honey, don’t you think you should have a good look around? This one’s quite old, and he looks quite beat up!”

The little visitor turned her head to glare at the older one who spoke. Mitzee was at once amazed and enchanted. The glare was awe-inspiring, and it obviously came naturally to her.

“Well, if you’re sure. How about we ask the staff about him?”

Soon Mitzee found himself in a room he had never been in before, but had seen other inmates enter—the meet and greet room. It was strange to be in such wide open spaces again and he crept slowly, stomach low to the floor, poised and ready to leap out of harm’s way at any given second. The little visitor sat cross-legged in the middle of the floor and beckoned with treats and soft noises. Treats! Mitzee had never seen or smelled treats, and, against his better nature, he was intrigued.

“He likes me.”

“It would seem so,” the prison attendant said in amazement. “I’ve never seen old Mitzee cuddle up to anyone before. He’s usually the spitting, hissing kind of cat. We thought to re-home him as a barn cat. Are you sure you want this one?”

The little visitor looked Mitzee in the eye, single eye to single eye. “He’s just like me. He knows how to feel different from everyone else.”

“If that’s what you want to believe, little visitor, who am I to disagree?” Mitzee thought to himself, but outwardly he purred.

For the first time in his life, Mitzee was bundled into the transportable travel cell. This was his big moment, the one he never thought to have. He was off to minimum security. The little visitor babbled about a new home, a bed, food and toys. It all sounded so good, so warm and loving to Mitzee. He yowled a long, “Goodbye suckers!” to the inmates still incarcerated as he was bundled out through the doors, before being settled into the back seat of a car.

He yawned as he watched the scenery flash past, and already he was planning his big escape. His single eye twinkled with glee.</p>
                    
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
<?php }?> <? } ?>
</body>
</html>