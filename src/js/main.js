
window.tags = {

    "coffee": {
        "text": "Be right back! Caffeine replenishment in progress.",
        "img": "img/cupanimation.gif",
        "bg":"#2DA4A8",
        "textcolor": "#FFB85A"
    },

    "lunch": {
        "text": "Be right back! Grabbing a bite to eat.",
        "img": "img/final.gif",
        "bg":"#007976",
        "textcolor": "#E9B754"
    },

    "sleep": {
        "text": "I'M GOING TO SLEEP NOW",
        "img": "img/pillow.gif",
        "bg":"#7A3751",
        "textcolor": "#F8E1C3"
    },

    "bathroom": {
        "text": "Be right back! Nature calls.",
        "img": "img/bathroom.gif",
        "bg":"#FFFFFF",
        "textcolor": "#A5A5A5"
    },

    "meeting": {
        "text": "Be right back! Promoting synergy.",
        "img": "img/meeting.gif",
        "bg":"#FFFFFF",
        "textcolor": "#ACCFDF"
    },

    "brb": {
        "text": "Be right back!",
        "img": "img/brb.gif",
        "bg":"#FFFFFF",
        "textcolor": "#36A6C3"
    }

};





function tagMake(tagname) {


    //Create Elements
    var tag = document.createElement('div');
    tag.id = "tagScreen";

    var time = document.createElement('h3');
    time.id = "time";

    var tagImg = document.createElement('img');
    tagImg.className = "tagImg";

    var tagText = document.createElement('h2');
    tagText.className = "tagText";

    //Append child elements
    tag.appendChild(tagImg);
    tag.appendChild(tagText);
    tag.appendChild(time);

    //updateClock();



    //Create unique tag vars
    var text = window.tags[tagname].text;
    var img = window.tags[tagname].img;
    var bg = window.tags[tagname].bg;
    var textcolor = window.tags[tagname].textcolor;

    //Make tagText Editable
    tagText.contentEditable = true;

    //Style tag div
    tag.style.background = bg;
    tag.style.height = "30em";
    tag.style.width = "30em";
    tag.style.transition ="all 2s ease-in;";
    tag.style.display = "flex";
    tag.style.flexDirection = "column";
    tag.style.alignItems = "center";
    tag.style.justifyContent ="center";


    //Style Page elements
    document.body.style.background = bg;
    document.getElementById("logo").style.color = textcolor;
    document.getElementById("back").setAttributeNS(null,"fill",textcolor);
    //STYLE SVG COLOR



    //Style tag img
    tagImg.style.maxHeight = "20em";
    tagImg.style.width = "auto";
    tagImg.setAttribute("src",img);

    tagText.innerHTML = text;
    tagText.style.color = textcolor;
    tagText.style.fontSize = "2.5em";
    tagText.style.textAlign = "center";


    document.getElementById('wrapper').appendChild(tag);
    updateClock();
    document.getElementById("time").style.color = textcolor;
    t = setInterval(updateClock,1000);

}

function transitionGrid(tagname){

    var back = document.getElementById("back");
    var grid  = document.getElementById("grid");
    var time  = document.getElementById("time");
    var footer  = document.getElementById("footer");

    $(footer).fadeOut();
    $(back).fadeIn();
    //SVG styling
    back.style.display ="";
    $(grid).fadeOut(function(){tagMake(tagname)});
    console.log("transitionGrid");

}

function transitionTag(){

    var back = document.getElementById("back");
    var grid  = document.getElementById("grid");
    var footer  = document.getElementById("footer");


    //Style Page elements
    document.body.style.background = "white";
    time.style.color = "black";
    document.getElementById("logo").style.color = "black";

    console.log("next fade");

    $(footer).fadeIn();
    $(back).fadeOut();
    $(grid).fadeIn();
}

function killTag(){

    console.log("kill");
    clearInterval(t);
    $("#tagScreen").fadeOut(1000,function(){transitionTag();$("#tagScreen").remove();$("#time").fadeOut();})

}

function updateClock() {
    var currentTime = new Date ( );

    var currentHours = currentTime.getHours ( );
    var currentMinutes = currentTime.getMinutes ( );

    // Pad the minutes and seconds with leading zeros, if required
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;

    // Choose either "AM" or "PM" as appropriate
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

    // Convert the hours component to 12-hour format if needed
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

    // Convert an hours component of "0" to "12"
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;

    // Compose the string for display
    var currentTimeString = currentHours + ":" + currentMinutes + " " + timeOfDay;

    // Update the time display
    document.getElementById("time").innerHTML = currentTimeString;
}
