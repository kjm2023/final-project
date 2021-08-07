<style type="text/css">

*{
  border: 0;
  padding: 0;
  margin: 0;
}

  header{
    background: black;
    width: 100%;
    padding: 20px;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: -2;
  }

  .secondary {
    background: black;
    width: 100%;
    height: 7%;
    padding: 20px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -2;
  }

  nav{
    width: 90%;
    margin: 0 auto;
  }

  #navlogo{
    width: 20%;
    height: 50px;
    color: white;
    position: relative;
    margin: auto;
    display: inline-block;
    vertical-align: middle;
    padding: 0 3%;
  }

  /* Reference: https://codepen.io/Sh_02/pen/OKRzaO */

  #navlogo:after {
      content: " ";
      position: absolute;
      display: block;
      width: 100%;
      height: 180%;
      top: -20px;
      left: 0;
      z-index: -1;
      border-right: 10px solid white;
      transform-origin: bottom left;
      -ms-transform: skew(-30deg, 0deg);
      -webkit-transform: skew(-30deg, 0deg);
      transform: skew(-30deg, 0deg);
  }

  #navlogo img{
    width: 200px;
    object-position: center center;
    position: relative;
    top: -50%;
  }

  #navitems{
    width: 60%;
    position: relative;
    left: 15%;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
  }

  #navitems ul li{
    display: inline-block;
    margin: 0 60px;
  }

  #navitems ul li a{
    text-decoration: none;
    font-size: 2.5em;
    font-family: 'Bebas Neue', cursive;
  }

  .link1{
    color: #B24F9E;
  }

  .link2{
    color: #319EC8;
  }

  .link3{
    color: #A76E25;
  }

	.container{
    position: relative;
    top: 100px;
  }

</style>

<header class="secondary">
  <nav>
    <!-- The nav includes a portion that includes the logo image.  -->
    <div id="navlogo">
      <img src="../images/professor-kenyada-white.png" alt="Professor Kenyada" />
    </div>
    <!-- The navigation items will appear to the right of the logo/line. -->
    <div id="navitems">
      <ul>
        <li><a href="about.html" class="link1">About</a></li>
        <li><a href="classes.html" class="link2">Classes</a></li>
        <li><a href="experience.html" class="link3">Experience</a></li>
      </ul>
    </div>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
