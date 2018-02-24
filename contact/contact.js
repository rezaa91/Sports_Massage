window.addEventListener('load', function(){
    
    var link_1, link_2, link_3;
    
    link_1 = document.getElementById('link_1');
    link_2 = document.getElementById('link_2');
    link_3 = document.getElementById('link_3');
    
    if(link_2.classList.contains('active')){
        link_2.classList.remove('active');
    }
    
    if(link_1.classList.contains('active')){
        link_1.classList.remove('active');
    }
    
    link_3.className = 'active';
    
    
})