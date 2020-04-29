/* hover state for 3 squares */

/* using document.ready to make sure everything is loaded on the page before running the script*/
$(document).ready(function() {

/* jquery hover fucntion*/
$(".discount-card").hover(discountOver, discountOut);
function discountOver(){
  TweenMax.to(this, 0.5, {backgroundColor:"#8A7C7C", boxShadow:"5px 10px 10px 5px rgba(0, 0, 0, 0.5)"});
  TweenMax.to('.discount-card h3', 0.5, {scale:1.2});
}
function discountOut(){
  TweenMax.to(this, 0.5, {backgroundColor:"#731320", boxShadow:"0px 10px 5px 5px rgba(0, 0, 0, 0)"});
  TweenMax.to('.discount-card h3', 0.5, {color:"white", scale:1});
}


$(".parties").hover(partyOver, partyOut);
function partyOver(){
  TweenMax.to(this, 0.5, {backgroundColor:"#8A7C7C", boxShadow:"0px 10px 5px 0px rgba(0, 0, 0, 0.5)"});
  TweenMax.to('.parties h3', 0.5, {scale:1.2});
}
function partyOut(){
  TweenMax.to(this, 0.5, {backgroundColor:"#731320", boxShadow:"0px 10px 5px 5px rgba(0, 0, 0, 0)"});
  TweenMax.to('.parties h3', 0.5, {color:"white", scale:1})
}


$(".food").hover(foodOver, foodOut);
function foodOver(){
  TweenMax.to(this, 0.5, {backgroundColor:"#8A7C7C", boxShadow:"-5px 10px 5px 0px rgba(0, 0, 0, 0.5)"});
  TweenMax.to('.food h3', 0.5, {scale:1.2});
}
function foodOut(){
  TweenMax.to(this, 0.5, {backgroundColor:"#731320", boxShadow:"0px 10px 5px 5px rgba(0, 0, 0, 0)"});
  TweenMax.to('.food h3', 0.5, {color:"white", scale:1});
}





/* homepage slider */
var homePageSlider = new TimelineMax({repeat:-1, loop:true})
    .to('.home-page-one', 1, {delay:2.5, autoAlpha:0})
    .to('.home-page-two', 1, {delay:2.5, autoAlpha:0})
    .to('.home-page-three', 1, {delay:2.5, autoAlpha:0})
    .to('.home-page-four', 1, {delay:2.5, autoAlpha:0})
    .to('.home-page-one', 1, {autoAlpha:1, delay:-2.5})







/* Button hover states  not using the css :hover due to consistancy of code */

$("button").hover(buttonOver, buttonOut);
function buttonOver(){
 TweenMax.to(this, 0.5, {color:'black', backgroundColor:'lightgrey'})
}
function buttonOut(){
   TweenMax.to(this, 0.5, {color:'white', backgroundColor:'#4A4848'})
}

/*
venuetimeLine : is the function name for timeline
= new : declares new timeline
TimelineMax : declares that it is using the timelinemax plugin from the gsap collection
({paused:true}) : keeps the timeline paused so it doesnt play unless told to
*/
var VenuetimeLine = new TimelineMax({paused:true, reversed: true})

/*.to : declares that this is the next 'keyframe' 
, 0.5, : the time it takes for the keyframe to run
{height:450}) : delacring that you want the height to change to 450*/
  .to('.venue-bar', 0.5, {height:450})

/*delay:-0.5 : the minus delay mean it will execute in the previous keyframe
y:-125 : this moves the text and button up so it stay at the top*/
  .to('.venue-bar h3', 0.5, {delay:-0.5, y:-125})
  .to('.venue-bar button', 0.5, {delay:-0.5, y:-125}) 

$("#venue-button").click(function() { /* jquery click event handler that wrap the gsap */
  VenuetimeLine.reversed() ? VenuetimeLine.play() : VenuetimeLine.reverse();
  SocialtimeLine.pause(0) /* pauses other timeline */
});



var SocialtimeLine = new TimelineMax({paused:true, reversed: true})
  .to('.social-bar', 0.5, {height:450})
  .to('.social-bar h3', 0.5, {delay:-0.5, y:-125})
  .to('.social-bar button', 0.5, {delay:-0.5, y:-125})

$("#social-button").click(function() {
  SocialtimeLine.reversed() ? SocialtimeLine.play() : SocialtimeLine.reverse();
  VenuetimeLine.pause(0);
});
});
/* Live sports API */ 
    $.ajax({
      headers: { 'X-Auth-Token': 'f6dacb4f2b9c4d6eaf82dab338cac133' },
      url: 'https://api.football-data.org/v2/competitions/CL/matches',
      dataType: 'json',
      type: 'GET',
    }).done(function(response) {
      // do something with the response, e.g. isolate the id of a linked resource   
      console.log(response['matches']);

      for (let index = 0; index < 10; index++) {
        document.getElementById("APITable").innerHTML += "<tr><td>" + response['matches'][index]['awayTeam']['name'] + "</td><td>" + response['matches'][index]['homeTeam']['name'] +
        "</td><td>" + response['matches'][index]['score']['fullTime']['awayTeam'] + " - " + response['matches'][index]['score']['fullTime']['homeTeam'] + "</td></tr>";
      }
    });
 