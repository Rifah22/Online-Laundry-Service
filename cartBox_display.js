  
    var exitbtn = document.getElementById('exit-button');
    var addbtn = document.getElementById('addbtn');
    exitbtn.addEventListener('click', function() {
        document.getElementById('cartboxparent').style.display = 'none';
    });

    addbtn.addEventListener('click', function() {
        document.getElementById('cartboxparent').style.display = 'block';
    });
     
