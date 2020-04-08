$(".discount-card").hover(over, out);

function over(){
  TweenMax.to(this, 0.5, {backgroundColor:"blue"})
}

function out(){
  TweenMax.to(this, 0.5, {backgroundColor:"red"})
}




$("#social-button").click(function(){
TweenMax.to('.facebook-one', 0.5, {height:450})
});
