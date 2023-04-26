import './bootstrap';

(function(){
    
    let subMenu = document.querySelector("#subMenu");
    let sideleft = document.querySelector('.left-sidebar');
    var menu = document.querySelector('.menu-left');
    let logo = document.querySelector('.logo');

    
    
    logo.addEventListener('click',function(){
        subMenu.classList.toggle('open-menu')
    })


    try {
        menu.addEventListener('click', function(){
            sideleft.classList.toggle('hiden')
        })

        sideleft.addEventListener('click',function(){
            sideleft.classList.remove('hiden')
        })
    
    let ulcomment = document.querySelector('.ul-comment');
    let uljoin = document.querySelector('.ul-join');
    let linkjoin = document.querySelector('.link-join');
    let linkcomment = document.querySelector('.link-comment')

    uljoin.style.display = 'none'

    linkjoin.addEventListener('click', function(){
        ulcomment.style.display = 'none';
        uljoin.style.display = 'block';
    })

    
    linkcomment.addEventListener('click', function(){
        uljoin.style.display = 'none';
        ulcomment.style.display = 'block';
    })

    
    } catch (error) {
        console.log('eroor')
    }    
})()
