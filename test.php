 <ul class="topnav" id ="myTopnav">
            <li><a href="http://www.twitter.com" target="_blank" id="socialGap" title='Twitter'><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="http://www.facebook.com" target="_blank" id="socialGap" title='Facebook'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="http://www.instagram.com" id="socialGap" title='Instagram'><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a>|</a></li>
     
            <li >
             <?php if(isset($_SESSION['user_name'])): ?>
                    <a href="logout.php" id="colorChange">logout</a>
             <?php else: ?>
                    <a href="login.php" id="colorChange">login</a>
             <?php endif; ?>
            
             </li>
            <li ><a href="about.html" id="colorChange">About Us</a></li>  
        </ul>
    </header>
