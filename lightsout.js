$(document).ready(()=>{
    $("td").on('click', (event) => {
		let target = $(event.target);
        $(event.currentTarget).toggleClass("lighton");
      // target.addClass("lighton");
      let light1 = target.index();
      let light2 = light1+1; 
     
      if(target.index() != 0){
        console.log(target.index());
      target.parent().find("td").eq(light1+1).toggleClass("lighton");
      target.parent().find("td").eq(light1-1).toggleClass("lighton");
      target.parent().prev().find("td").eq(light1).toggleClass("lighton");
      target.parent().next().find("td").eq(light1).toggleClass("lighton");
      }
      else if(target.index() == 0){
      target.parent().find("td").eq(light1+1).toggleClass("lighton");
      target.parent().prev().find("td").eq(light1).toggleClass("lighton");
      target.parent().next().find("td").eq(light1).toggleClass("lighton");
      }
       
      if($(".lighton")>0){
        $('.win-message').text('Congratulations! You win!');
      }
       else {
        $('.win-message').empty(); 
      }
      
    });
		
});
