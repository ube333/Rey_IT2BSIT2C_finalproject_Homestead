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
                <h5 class="mb-0">Title: To Plant a Garden. </h5>
                <h5 class="mb-0">Author: SCOTT GEORGE </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0"> Thornton Gombar lifted his gaze to the sky as a hovercraft zoomed over his home. Based on the rosy pink tints that adorned its exterior, Thornton surmised that the vehicle was a pleasure craft, likely filled with a small group of men and women engaging in gross debauchery as the self-driving vehicle propelled itself across the sky. The craft jerked and jolted in an arrhythmic manner as it flew to the heart of Homasoro City, where even more such activities awaited them. 

Thornton shook his head and turned his attention again to the ground. 

Before his home lay a small plot of brownish soil. He had spent the entire day clearing it of the gnarled weeds that had accumulated during decades of neglect. Only one remained. 

Thornton got on his knees and, wrapping his fingers around the base, began to pull. The weed didn't provide much resistance—immediately, a resounding 'snap' echoed through the yard as the stem broke apart. 

Thornton tossed the weed aside and stared forlornly at the spot it once sprouted. The roots were still trapped beneath the ground. If he were to leave it alone, the despicable plant would grow back and likely spread its ilk throughout the now-clean yard. 

Using his fingers and a jagged rock he found nearby, Thornton began to pick at the earth around it to create leverage for what he anticipated would be an excruciating pull. He was about to begin his efforts when he felt a shadow encompass him. 

Floating just inches from Thornton's head was an android whose appearance was akin to that of some deformed spider. Its body was white and spherical, with four sinewy appendages that sprouted from its center. 

A soft, monotonous voice wafted through the machine's speaker. "Hello, Mr. Gombar," it said. "How are you doing this fine morning?"

Thornton suppressed a groan. He hated that the thing already knew his name, but all the androids of Homasoro City, even these simple public maintenance models, were equipped with face-recognition tech. I guess I just have to get used to it, he thought. 

Thornton turned his attention back to the ground. "I'm doing just fine today, uh…" 

His voice trailed. He wanted to address the machine as 'sir' but felt awkward speaking to it as he would a man. 

The android seemed to pick up on his uncertainty. "You may address me as B-7269."

"Thanks. I'm doing just fine today, B-7269." 

Thornton grimaced as he began to pull on the submerged root. 

The android's voice struck Thornton's ears again. "Mr. Gombar—what are you doing?" 

Thornton's voice was strained as he continued to pull. "Pulling a weed."

"Why are you doing that, Mr. Gomber? You seem uncomfortable."

Thornton had to grimace to keep from rolling his eyes. "The damn thing is ugly. It's a stain on my yard. I want to start a garden here. I want to plant roses, lilies, and stuff like that. This weed here will steal their nutrients and water. I need to get rid of it."

The android reached one of its spindly arms downward. "Here. Let me help." 

Thornton waved the machine's arm away. "No need." 

A gust of air blew through clenched teeth as Thornton pulled once more. Finally, the earth broke away, and the tangled bundle of roots was released. 

Thornton sighed in relief. "See. I got it."

"Impressive."

Thornton ignored B-7269's comment and walked back into his home. When he reemerged, he carried a pre-potted rose in his arms. He took it to the front-left corner of his yard, set it beside him, and began digging into the soil with a gardening shovel. 

B-7269 hovered over to him. "Mr. Gombar—if you want a garden, all you have to do is submit a request to the Department of Public Maintenance and Satisfaction. That way, a team of androids like myself can plant the garden for you. In fact, I can file the request on your behalf. It should take two to three days for it to be fulfilled."

Beads of sweat began to drip from Thornton's brow. "That's fine," he said. "I got it."

B-7269 was insistent. "I can detect a rising level of opioid peptides in your neural tissue. Doing the work yourself is obviously causing you some pain. I would advise that you utilize the services provided by the Department of Public Maintenance and Satisfaction."

"I have arthritis. I'm used to it."

"It is my duty to ensure all citizens of Homasoro City are content and happy. My programming tells me that pain is the antithesis of happiness. If you want a garden planted on your property, we can ensure that it is done without any suffering on your part."

Thornton shook his head. "It's not a problem. I used to work in construction. Before everything became automated, I was constantly working with my hands. This is second nature to me. I actually kind of like it. It's better than being on that damned VR headset all day." 

B-7269 began to betray a hint of concern. "Are you not satisfied with the available programming? Perhaps you just haven't found anything applicable to your tastes. There are so many channels in the VR cloud that finding something specific for you can be difficult. However, if you have a few minutes to complete a short questionnaire, I can help you find something you will have a high likelihood of enjoying."

Thornton put aside his shovel and dug his fingers into the soil of the potted rose beside him. When he felt the wispy tendrils of the plant's roots brush against his skin, Thornton, his movements slow and gentle, began to pull it away from its clay barricade. 

"That's fine," he said. "I don't think I could stomach any more VR programming, to be honest. That shit depresses me like no other."

"Depression is caused by low serotonin levels," B-7269 explained. "If you ever experience the symptoms of depression again, you may request an immediate injection of synthesized serotonin as treatment. The effect on your mood would occur instantly. Ninety-eight percent of users report satisfaction with this service." 

The rose, with its accompanying mound of soil and roots, was now free of the pot in which it was previously housed. Slowly, he lowered it into the hole he had made. Then, when it settled, he shoveled the soil back into any remaining open spaces. 

"I don't think I'll need that," he finally said. 

His following words were bereft of any sincerity. "Thanks, though."

When he was done, Thornton threw the shovel down and stood up to admire his work. The pedals of the rose shone like rubies as they glistened in the white sunlight of Homasoro City. 

This is just the beginning, Thornton thought triumphantly. 

"Your serotonin levels have risen substantially," said B-7269. "During the entirety of our conversation, your levels have remained steady at fifty-two nanograms per milliliter. While within normal limits, this is still unusually low. However, they have suddenly jumped to one-hundred-and-fifty-three nanograms per milliliter."

Thornton let out a dismissive chuckle. "That's what typically happens when a man sees something beautiful."

*     *     *

When Thornton Gombar opened the front door to his home, he stumbled backward in surprise. His previously barren yard was now ornamented with a gaudy display of stone, grass, and flowers. From his front door to the street lay a stone path formed from swirly-patterned river rock that, due to the irregular pattern in which it was laid, appeared as flowing water. On either side, the ground was adorned with a sheet of grass that sparkled like an emerald. The yard's border was lined with a diverse array of flowers, including roses, lilies, and a set of marigolds that Thornton, based on their muted tint, could tell were genetically modified to bloom year-round. 

Thornton quickly glanced at the front-left corner of the newly-minted garden. A great abundance of crimson roses sprouted from the ground there. Thornton's heart sank—the flower he planted just yesterday was unrecognizable amidst the throng. 

Floating above the whole display was the familiar figure of B-7269. It floated excitedly toward Thornton once his eyes made contact with its spider-like exterior. "Hello, Mr. Gombar," it said. "The sudden increase in your serotonin levels yesterday was so remarkable that I decided to put in a fast-track request for your garden. I, along with a few other androids under my command, came and planted it overnight. Now you can avoid the pain and labor of creating a garden while still experiencing the joy its beauty brings. What do you think?"

Thornton nodded absently. "It's great…" he said hesitantly. "Thanks…" 

"Strange," said B-7269. "Your serotonin levels are resting at fifty-seven nanograms per milliliter. This is a normal level, but I'm surprised they aren't rising after seeing your new garden. Is there anything wrong, Mr. Gombar? Did I plant the wrong flowers? Just say the word, and I can get this corrected straightaway."

Thornton sighed. The garden B-7269 had made was gorgeous. It was probably the most beautiful thing that currently graced the gray, muggy streets of Homasoro City. Thornton just wished that it could've been constructed by his own hands.</p>
                    
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
<?php } ?> <? } ?>
</body>
</html>