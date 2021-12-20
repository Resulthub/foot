<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    </head>
    <body>
        <div class="navigation">
            <ul>
            <li class="list active">
                    <a href="#"> 
                        <span class="icon"><i class="fa fa-home"></i></span> 
                        <span class="text">Home</span> 
                    </a>
                </li>
                <li class="list">
                    <a href="#"> 
                        <span class="icon"><i class="fa fa-address-card"></i></span> 
                        <span class="text">Profile</span> 
                    </a>
                </li>
                <li class="list">
                    <a href="#"> 
                        <span class="icon"><i class="fa fa-comment"></i></span> 
                        <span class="text">Message</span> 
                    </a>
                </li>
                <li class="list">
                    <a href="#"> 
                        <span class="icon"><i class="fa fa-camera"></i></span> 
                        <span class="text">Photos  </span> 
                    </a>
                </li>
                <li class="list">
                    <a href="#"> 
                        <span class="icon"><i class="fa fa-cogs"></i></span> 
                        <span class="text">Setting</span> 
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
        <script>
            const list = document.querySelectorAll('.list');
            function activeLink(){
                list.forEach((item) =>
                item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item)=>
            item.addEventListener('click', activeLink));
        </script>
        <script type="module" src="https://unpkg.com/"></script>
    </body>
</html>