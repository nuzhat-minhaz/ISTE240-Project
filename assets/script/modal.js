            // NUMBER ONE
            function imgOnClick(){
                document.getElementById("myModal").style.display = "block";
                document.getElementById("img01").src = myImg1.src ;
            }
            function spanOnClick() { 
                document.getElementById("myModal").style.display = "none";
            }
                 
            // NUMBER TWO
            function imgOnClick2(){
                document.getElementById("myModal2").style.display = "block";
                document.getElementById("img02").src = myImg2.src ;
            }
            function spanOnClick2() { 
                document.getElementById("myModal2").style.display = "none";
            }

            // NUMBER THREE
            function imgOnClick3(){
                document.getElementById("myModal3").style.display = "block";
                document.getElementById("img03").src = myImg3.src ;
            }
            function spanOnClick3() { 
                document.getElementById("myModal3").style.display = "none";
            }
                 
            // NUMBER FOUR
            function imgOnClick4(){
                document.getElementById("myModal4").style.display = "block";
                document.getElementById("img04").src = myImg4.src ;
            }
            function spanOnClick4() { 
                document.getElementById("myModal4").style.display = "none";
            }


            // NUMBER FIVE
            function imgOnClick5(){
                document.getElementById("myModal5").style.display = "block";
                document.getElementById("img05").src = myImg5.src ;
            }

            function spanOnClick5() { 
                document.getElementById("myModal5").style.display = "none";
            }

            // NUMBER SIX
            function imgOnClick6(){
                document.getElementById("myModal6").style.display = "block";
                document.getElementById("img06").src = myImg6.src ;
            }

            function spanOnClick6() { 
                document.getElementById("myModal6").style.display = "none";
            }
            
            /*
            var myVar;

            function myFunction() {
            myVar = setTimeout(showPage, 300);
            }

            function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
            }
*/
            /* AUDIO BUTTON HOMEPAGE + ANIMATION */
              
            
            function playAudio() {
                    var audio = document.getElementById("audio");
                    audio.play();
                  
            }
            function pauseAudio() {
                var audio = document.getElementById("audio");
                audio.pause();
              
        }

        var i = 0;
        var i2 = 0;
        var txt = "Playing 'Tomar Jonno' by Arnob...";
        var txt2= "Playing 'Aguner Gola' by Momtaz...";
        var speed = 70;
        var speed2 = 70;

        function typeWriter() {
            
        if (i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
            
        }

        }

        function typeWriter2() {
            
            if (i2 < txt2.length) {
                document.getElementById("demo2").innerHTML += txt2.charAt(i2);
                i2++;
                setTimeout(typeWriter2, speed2);
                
            }
    
            }

        /** JS FOR VALIDATION */

        function validateForm() {
            var name1 = document.forms["ask-form"]["name1"].value;
            var country1 = document.forms["ask-form"]["country1"].value;
            var comment1 = document.forms["ask-form"]["comment1"].value;
            var views1 = document.forms["ask-form"]["views1"].value;
            var eager1 = document.forms["ask-form"]["eager1"].value;

            if (name1 == null || name1 == "") {
        
                alert("Name must be filled out");
              
                return false;
            }
            if(country1 == null || country1 == ""){
                alert("Country must be filled out");
              
                return false;
            }
            if(comment1 == null || comment1 == ""){
                alert("Comment must be filled out");
              
                return false;
            }
            if(views1 == null || views1 == ""){
                alert("'thoughts on Bangladesh culture' must be filled out");
              
                return false;
            }
            if(eager1 == null || eager1 == ""){
                alert("'what you're eager to know more about' must be filled out");
              
                return false;
            }
        }

        function validateForm2() {
            var name2 = document.forms["foodform"]["name2"].value;
            var country1 = document.forms["foodform"]["email2"].value;
            var comment1 = document.forms["food-form"]["recipe2"].value;
            
            if (name2 == null || name2 == "") {
        
                alert("Name must be filled out");
              
                return false;
            }
            if(email2 == null || email2 == ""){
                alert("Email must be filled out");
              
                return false;
            }
            if(recipe2 == null || recipe2 == ""){
                alert("Recipe must be filled out");
              
                return false;
            }
        }



            
