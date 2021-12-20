<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="icon" href="assets/images/favicon/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="assets/images/favicon/favicon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" id="color">
        <link rel="stylesheet" type="text/css" href="assets/css/tour.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="assets/js/ckeditor/skins/moono-lisa/editor.css?t=HBDD">
        <link rel="stylesheet" type="text/css" href="assets/js/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css">
        <link rel="stylesheet" type="text/css" href="assets/js/ckeditor/plugins/scayt/dialogs/dialog.css">
        <link rel="stylesheet" type="text/css" href="assets/js/ckeditor/plugins/tableselection/styles/tableselection.css">
        <link rel="stylesheet" type="text/css" href="assets/js/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css">
        <link rel="stylesheet" type="text/css" href="assets/js/ckeditor/plugins/copyformatting/styles/copyformatting.css">
    </head>
    <body>
        <div class="navigation" >
            <ul>
            <li class="list active">
                    <a href="#"> 
                        <span class="icon"><i class="fa fa-home"></i></span> 
                        <span class="text">Home</span> 
                    </a>
                </li>
                <li class="list">
                    <a href="#"> 
                        <span class="icon"><i class="fa fa-users"></i></span> 
                        <span class="text">Friends</span> 
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
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/tippy-bundle.iife.min.js"></script>
        <script src="assets/js/switchery.js"></script>
        <script src="assets/js/easytimer.min.js"></script>
        <script src="assets/js/index.js"></script>
        <script src="assets/js/feather-icon/feather.min.js"></script>
        <script src="assets/js/feather-icon/feather-icon.js"></script>
        <script src="assets/js/ckeditor/ckeditor.js"></script>
        <script src="assets/js/ckeditor/styles.js"></script>
        <script src="assets/js/ckeditor/adapters/jquery.js"></script>
        <script src="assets/js/ckeditor/ckeditor.custom.js"></script>
        <script src="assets/js/date-picker/datepicker.js"></script>
        <script src="assets/js/date-picker/datepicker.en.js"></script>
        <script src="assets/js/date-picker/datepicker.custom.js"></script>
        <script src="assets/js/tour/intro.js"></script>
        <script src="assets/js/tour/intro-init.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/zoom-gallery.js"></script>
        <!-- <script src="assets/js/script.js"></script> -->
    </body>
</html>