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
                <h5 class="mb-0">Title: Decomposition Sits with You </h5>
                <h5 class="mb-0">Author: Fabi M </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Hugo told me once that fall was his favorite time of the year. Told me to hold leaves as delicate as you would a pretty girl’s hand. His teeth would then spread wide across his face. Pallid and flaked with brown. Rows of sweet tooth that hadn’t been cleared of duff. 

On his days off we’d go hunting for mushrooms in the forest behind our house. “It’s hard to tell which mushrooms are edible,” Hugo would say. Always said, giddy over the possibility of the inedible as he led me through the forest. My studies turned to what you can eat. It didn't matter if it were safe or not.

That day, Hugo pulled me along— his meaty fingers pressed white hot divots into my skin. I followed as quickly as I could, but Hugo was excited, alcohol and smoke wafting off him in ribbons. My shoes filled with filth. 

Mycology was his most recent hobby. An acquisition from an old friend he said.

Hugo's hobbies often skipped from one gruesome hobby to another. From taxidermy to collecting dead things in jars; these activities though innocuous in some hands, turned sinister in his. A field mouse captured in our backyard was less a friend and more an exercise in how long he could extend its suffering, how well he could preserve those little moments of despair, driving a needle in, then capturing the moment in frame by frame photographs. To pinpoint the exact moment, the most miniscule of details. Measured them in the span of flesh stretched to its limit, twisted in abject horror. It was a different kind of science. One that I likened to a kind of dark magic; powerful and detrimental to its user and the people around him. Wrapped up like something beautiful and awful, sequined and glittering, but dripping in oil slick, rainbow sheets of sludge.

Hugo yanked me forward, grip turning tighter. I tripped and he laughed, still dragging me along over root and rock until we hit a clearing with one solitary tree sitting in its center. Its trunk was devoid of a small swath of bark, smooth even at a distance. 

As we got closer, I saw a ring of mushrooms at its base that traveled up its trunk in a spiral pattern. Up and up it disappeared into its canopy. 

“Oyster mushrooms,” he said, releasing my hand to pluck one from the bark. He left marks. My reddened wrist contrasted against the pale white of freshly pulled bark. It reminded me of his angry red gums gnashing at me, smiles and frowns. Hugo was smiling at me then, pulling swiftly and roughly, tearing off just as much bark as he was mushrooms, raining clumps of brown to join the clutter of the forest floor.

Bark and mush fell haphazard atop a corpse—a fox—carpeted in what looked like to be more mushrooms. They bisected its torso. The mound of mushrooms, which looked like nothing I'd ever seen in Hugo's many, many books, stemmed like a dress from its waist, draping the rest of its body in its fungal carpet. Only its feet were left uncovered. But they were not bare, frost had started its seasonal creep, transforming the Foxes’ paws into glass slippers. Winter’s supine approach had begun, starting with her. I hadn’t realized it when we first arrived. This was a birthplace; a death, anchoring itself to the forest. 

I continued to stare at the fox, searching. Her light-less eyes glittered at me in the dying light. Resurrected under my attention; life found unraveled, unspun at my feet, thread loose and fibers imbued with story. I imagined that she smiled a smile at me full of sharp, friendly teeth. For the briefest of moments I felt the whisper of her touch—her paw caressing my cheek, and telling me how this fate had befell her. A story not too dissimilar from mine. I had to protect her.

I knew what Hugo would do to her if he found her. Exactly the way he’d extricate her and preserve her, perpetually dead in his basement with a sprinkling of mushrooms and fall leaves for company. The other dead animals didn’t count. They had no more half lives; no in-between. That was my domain. With liminal fingers half crusted with frost, straining from the breakdown of cartilage, that life would wrap around the soft bend of my joints, her joints. She’d sit taut and stiff, halfway between specimen and taxidermy, a product of clumsy hands and even clumsier mouths, cruelly propped up against the door to let the draft in. We weren’t meant to be gutted and set for display.

Hugo’s delighted face was sharp; shadows fell across him like they belonged there, deepening the crags and dips of his smile.

The fox’s unseeing eyes still bore into mine, and as Hugo stepped back from his rough foraging to look at me, I blocked the fox from view with my body, leaning languid against the tree.

His eyes raked over me, hungry open maws of sight. He made to move toward me, his basket overflowing with an abundance of mushrooms dangling from his elbow. I did not flinch. I had been chewed up and spat out before. But a single oyster tumbled out of the basket, falling at his feet. His eyes darted down. Curses tumbled from his lips just as the mushroom just had. He crouched and picked up the singular mushroom, angrily brushing the excess dirt off it. He looked so vulnerable there, on his knees, cooing over the fallen thing as though he hadn’t just violently torn it from its home moments before.

A rock sat right by the foxes' head, large enough to serve as its stony pillow, jagged enough that it could promise a painful and messy death. Her dead eyes smiled at me; her form less vulpine and more human the longer I stared at that rock and breathed life into her story. If the fox had hands and strength enough to lift it, would it have lived? Would her paws not be dipped in ice? Would she be here now, acting as my hands? My hands had already found their way to the rock, having leaned down as I had pondered those questions. I inched closer to Hugo, staring at the top of his head. I examined his receding hairline and the numerous nascent liver spots and silver hairs—it looked like pencil lines interrupted by a filthy and worn down eraser.

His eyes met mine then. I don’t know how he didn’t notice until I was already towering over him, rock gripped in both my hands, raised over my head. His eyes bore into me. Terribly blue eyes as death clung to me, whispering to me, “I’d never get them out of my hair—the leaves—the mushrooms—not until…. “

She sat at my shoulder, right there inside the memory of our house sitting quietly without him. A vision tailor made for me. Her tails unfurled; her teeth sharpened. Her gown of mushrooms was apparent and as white as the snow, taking on the quality of shaggy fur. Delicate like the tendrils of a medusa, she was a woman sitting on our porch. She was a fox sitting on my porch, her ears tipped with frost and twitching as leaves fell from our maple tree, never falling outside of the careful circle that we laid out for him. 

What would I do without him? she asked. 

Maybe spend that fall studying the weight of the leaves and measure them in the fade of green to withered brown. Gather them in piles, feel how they’d crumble to pieces in my hand—the crunch of their skeletons, soft and grainy in their collapse. 

Decomposition will sit with you. Set in the circumstance of life. Circles of death and rot. The house will sit empty, but they will sit quietly. No hands to interrupt.

My hands shook imagining the collapse; she shook, shedding the gown of mushrooms, taking on the look of death in its entirety and encouraging me to lift.

And so I did. As I raised the stone higher, I watched his eyes drown with a surety. A certainty. Realization. Recognition. She comes for us all at some point; clever little foxes that don’t stay dead. But for now she wasn’t here for me.  All she did was help guide my hand. 

The oyster mushroom he had cleaned of dirt sat snug in his hand. I could see it waiting; the knowing of what was to come and the knowing that it would not change anything for it and its brethren. But Hugo and his eyes, those terribly blue eyes did not care. He smashed it in his fist, letting its flesh ooze out between his fingers. And for the second time that day he showed me that sweet tooth smile, wide and menacing. 

I swung down.</p>
                    
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