//initialize throttlePause variable outside throttle function
let throttleBlockPressPause;
 
const BlockPressthrottle = (callback, time) => {
  //don't run the function if throttleBlockPressPause is true
  if (throttleBlockPressPause) return;
 
  //set throttleBlockPressPause to true after the if condition. This allows the function to be run once
  throttleBlockPressPause = true;
   
  //setTimeout runs the callback within the specified time
  setTimeout(() => {
    callback();
     
    //throttleBlockPressPause is set to false once the function has been called, allowing the throttle function to loop
    throttleBlockPressPause = false;
  }, time);
};

let totop = document.getElementById('blockpresstop');
let blockpresstotop = document.createElement('div');
blockpresstotop.id = "blockpresstotop";
blockpresstotop.insertAdjacentHTML('beforeend', '<svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 377 512.23"><path d="M372.87 156.95a12.038 12.038 0 0 1 1.06 17.1c-4.47 5-12.2 5.47-17.26 1.04L200.78 38.97v461.11c0 6.71-5.5 12.15-12.28 12.15-6.78 0-12.28-5.44-12.28-12.15V38.97L20.33 175.09c-5.06 4.43-12.79 3.96-17.26-1.04-4.47-5.01-4-12.67 1.06-17.1L180.2 3.21c4.55-4.17 11.65-4.33 16.4-.17l176.27 153.91z"/></svg>');
blockpresstotop.setAttribute("style", "width:40px;height:40px;line-height:40px;display:flex;justify-content:center;align-items:center;background:black; fill:white; transition: transform 0.5s ease, opacity 0.5s ease, visibility 0.5s ease; position:fixed; bottom:50px; right:20px; border-radius:100px; opacity:0; transform: translateY(50px);cursor:pointer; z-index:99999");
document.body.appendChild(blockpresstotop);

blockpresstotop.addEventListener("click", () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
});

window.addEventListener("scroll", () => { 
    BlockPressthrottle(() => {
        if(window.scrollY > 300){
            if(!blockpresstotop.classList.contains('active')){
                blockpresstotop.classList.add('active');
                blockpresstotop.style.opacity = 1;
                blockpresstotop.style.transform = "translateY(0)";
                blockpresstotop.style.visibility = 'visible';
            }
        }else{
            if(blockpresstotop.classList.contains('active')){
                blockpresstotop.classList.remove('active');
                blockpresstotop.style.opacity = 0;
                blockpresstotop.style.transform = "translateY(50px)";
                blockpresstotop.style.visibility = 'hidden';
            }            
        }
    }, 250);
});