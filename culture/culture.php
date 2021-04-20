<?php
	
$title="Nuzhat's Project | Culture";
$page="culture";
$path='../';

include($path.'assets/inc/header.php');
include($path.'assets/inc/nav.php');

?>   


<div class="culture-container">
    <div class="culturetop1">
        <h1> Bangladesh is a land of festivals.  </h1>
        <h2>There is a popular saying in Bangla 'Baro Mashe Tero Paban' which means that we have over 13 festivals within the 12 months of the year.
            I've attempted to bring my cultural festivities along with me to RIT, and here's our performance at the Webb Auditorium 
             to a song that celebrates the first day of Spring:
        </h2>
        <video width="500px" height="auto" style="margin-left: 100px;" controls>
        <source src="../assets/audio/bcs_dance.mp4" type="video/mp4">
        
        </video>
    </div>
    <div class="cultureleftheader">
        
<h1> My Culture is a Celebration of Colors</h1>

<h2> While you read about my culture, you can play this song in the background by a singer who became famous by making ssongs 
    with funny storylines that actually address deeper societal issues in the villages of Bangladesh. 
    This one is about typical marriages in our culture and the family pressure involved in it, but of course, with hilarious lyrics and background music.</h2>

    <input type="button" value="Play" onclick="playAudio(), typeWriter2()" id="playbtn">
    <input type="button" value="Pause" onclick="pauseAudio()" id="pausebtn">
    <audio id="audio" src="../assets/audio/nantu_ghotok.mp3"></audio>
            <p id="demo2"></p>
            <br>
            <br>
<img src="../assets/images/cul.png">

    </div>
    <div class="culturerightheader">
        <img src="../assets/images/cul2.png">
        <h2> From the bright tropical fruits to the paintings on the back of Rickshaws, Bangladesh will always welcome you with all the shades of warmth.
                Underdevelopd infrastructure may be your first complaint upon arrival, but I promise you that the street vendors will light up your
                view of unbearable traffic. 

                <br><br>Monsoon season will bring the red yellow green umbrellas 
                of pedestrians, and your gloomy skies will be coloured in the joy of children dancing in the rain. 
                As the monsoon season continues into a mildly cold winter, the wedding season begins: when it's finally not too warm to dance and sing,
                and to greet thousands of people who share the happiness of newly weds.


</h2>
    </div>
    <div class="cultureleftbody">
        <h1>The Winter Weddings!</h1>
        <h2>You'll come across several buildings lit up top to bottom, window to window, in strings of fairy lights,
            and you'll know there's a wedding going on in the area. You'll hear loud music from their celebrations almost every other night
            during this wedding season, and it'll make you feel a little jealous that you weren't invited. 
        </h2>
        <h1>Bengali New Year</h1>
        <h2>April brings the scorching heat and golden sun, and that's when Bengalis celebrate their new year. Everybody dresses in 
            the brightest colors, particularly white and red, and girls wear flowers in their hair. At midnight, students of 
            the Charukola Institute of Art paint the roads in designs called alpona. We've even broken a record once, for the longest street art in the world.

            <br><br>Parents dress their children in colorful clothes as they send them off to school, and every educational institution in the country has celebrations
            and performances for the occasion. 
            <br> <br>
            Happiness and joy hangs in the warm air of the first day of summer, and you'll see roadside lemonade stands ready to quench your thirst in the unbearable heat.
            Ice cream stands, face paint artists, and various other vendors add to the enjoyment.
            <br><br>
            
        </h2>
        <h1>My Childhood...</h1>
        <h2>Every year on April 14th (Bengali New Year), my father would take us out to the local fairs. There would be a large crowd around the stage
            where singers would perform 'Esho Hey Boishakh', a song that would replay throughout the day, literally everywhere you go, for 24 hours. You'd think we got tired,
            but it only came around once a year, and I thoroughly enjoyed singing along to it every time.
<br><br>
            My mother would cook us all the special food items of the day using ingredients that are unique to the season such as ripe mangoes, and fish would be a staple
            on this day. Even the kids who dislike fish would enjoy having it on this day.
<br><br>
            My family would get together for lunch after coming back from the fairs in the morning, and it would be an incomparable day of enjoyment and fun.
        </h2>

    </div>
    <div class="culturerightbody">
        <img src="../assets/images/new.png">
    

    </div>
</div>

<?php
    include($path.'assets/inc/footer.php');
?>