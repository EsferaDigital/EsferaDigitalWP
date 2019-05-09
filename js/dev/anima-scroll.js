const animaHeader = () => {
  let lastScrollTop = 0;
  // const windowTop = window.pageYOffset - ((window.innerHeight * 3) / 4);
  const header = document.getElementById('Header');

  window.addEventListener('scroll', function(){
    let st = window.pageYOffset || document.documentElement.scrollTop;
    if(st > lastScrollTop){
      header.classList.remove('slidedown')
      header.classList.add('slideup')
    }else if(st < lastScrollTop && st > 200){
      header.style.background = "linear-gradient(to right, #00c8ff, #0073ff)";
      header.classList.replace('slideup', 'slidedown')
    }else if(st < lastScrollTop && st < 200){
      header.style.background = "";
      header.classList.replace('slideup', 'slidedown')
    }else if(st < lastScrollTop){
      header.classList.replace('slideup', 'slidedown')
    }
    lastScrollTop = st
  });
}

export {animaHeader}
