const checkbox = document.getElementById("checkbox");

    checkbox.addEventListener('change', ()=>{
            //change the theme of the site
            document.body.classList.toggle('dark');
    });
