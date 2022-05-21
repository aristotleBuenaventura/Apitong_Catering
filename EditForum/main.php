<?php 
	header ('Content-type: text/css; charset:UTF-8')

?>

/*---------------------------------------------------------- HOMEPAGE --------------------------------------------------------*/


body {
  font-family: "Roboto", sans-serif;

  padding: 0;

  margin: 0;

  background: #131416;

}


/*---------------------------------------------------------- navigation bar --------------------------------------------------------*/

 .input-group .btn {

    width: 80px;
	height: 40px;
    text-align: center;
    border: none;
    background: #3270e3;
    outline: none;
    border-radius: 30px;
    font-size: 1rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;

	
}



.input-group .btn:hover {
    transform: translateY(-5px);
    background: #0f56d9;
}




.navbar {

    background: #fff;
}



.logo {

  height: 50px;
  padding-right: 0px;
  padding-left: 60px; 
  margin-left:-70px;
}


.navbar-brand {
    margin-left: 4em;
    font-family: "Oswald", sans-serif;
    letter-spacing: 0.09em;
	margin: 0%;
	padding: 0;
}

.navbar-nav {
    margin-right:0px;

}

.navbar .navbar-nav .nav-link {
    color: black;
    letter-spacing: 0.15em;
    text-transform: uppercase;
}

.navbar-nav span {
    margin-right: 2rem;
    margin-left: 2rem;
}

.custom-toggler.navbar-toggler {
    border-color: transparent;
}
.custom-toggler .navbar-toggler-icon {
    color: black;
}
.nav-item {
    position: relative;
	right:10%;
	margin-left:3rem;
}

.nav-slash {
    display: flex;
    align-items: center;
    font-size: 11px;
}

.nav-item:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    border-bottom: 1px solid black;
    transition: 0.4s;
}

.nav-item:hover:after {
    width: 75%;
}

.nav-item.nav-social-icon:nth-last-child(1):after {
    border-bottom: none !important;
}

.nav-item.nav-social-icon:nth-last-child(2):after {
    border-bottom: none !important;
}

.nav-item.nav-social-icon:nth-last-child(3):after {
    border-bottom: none !important;
}

/*----------------------------------------------Comment---------------------------------------------------*/
.commentbox {
    margin-top: 20px;
    width: 845px;
    padding: 20px;
    margin-left:10px;
    margin-bottom: 4px;
    background-color: #212325;
    border-radius: 4px;
    position: relative;
}

.commentbox p {
    color:#fff;
    font-family: "Verdana", sans-serif;
    font-size: 14px;
    line-height: 16px;

}


textarea {
    
    width: 700px;
    height: 100px;
    background-color: #fff;
    resize: none;
    outline: none;
    margin-left:10px;
}


.editform {
    margin-top: 100px;
    width: 845px;
    padding: 20px;
    margin-left:10px;
    margin-bottom: 4px;
    background-color: #212325;
    border-radius: 4px;
    position: relative;

}

.cmtbtn {
    margin-left:10px;
	width: 100px;
	height: 40px;
    text-align: center;
    border: none;
    background: #3270e3;
    outline: none;
    border-radius: 30px;
    font-size: 1rem;
    color: #FFF;
    cursor: pointer;
    margin-bottom:20px;
}

.cmtbtn:hover {
    background: #0f56d9;
}


.cmtbtn2 {
    position: absolute;
    top: 0px;
    right: 0px;
    width: 70px;
    height: 30px;
    text-align: center;
    border: none;
    background: #3270e3;
    outline: none;
    border-radius: 5px;
    font-size: 1rem;
    color: #FFF;
    cursor: pointer;
}

.cmtbtn2:hover {
    background: #0f56d9;
}

/*----------------------------------------------Footer---------------------------------------------------*/


*{
  margin: 0px;
  padding: 0px;
}

.row{
  margin-left: 0px;
  margin-right: 0px;
}

.global{
  padding: 50px;
  color: #f0f9ff;
  margin-top: 80px;
  bottom: 0;
  background: #000;
  opacity: 1;
  width: 100%;
  height: 45%;
  right: 0%
}

.global h6{
  margin-top: 0;
  margin-bottom: 12px;
  font-weight: 700;
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-left:190px;
}

.global ul{
  list-style-type: none;
  line-height: 30px;
  font-size: 15px;
  margin-bottom: 12px;
  margin-left:190px;
}

.global ul a{
  color: #fff;
  text-decoration: none;
  transition: 0.3s;
}

.global ul a:hover{
  opacity: 0.8;
  color: #eee;
}

.global .social{
  width: 100%;
  margin: 0 auto;
  text-align: center;
  padding: 40px;
  padding-bottom: 0px;
  border-top: 1px solid #eee;
  margin-top: 0px;
}

.global .social a{
  font-size: 22px;
  width: 45px;
  height: 45px;
  line-height: 39px;
  display: inline-block;
  border-radius: 50%;
  border: 2px solid #fff;
  box-shadow: 0px 0px 0px 1px rgba(255, 255, 255, 0.4);
  margin: 10px;
  color: #fff;
  opacity: 0.7;
  transition: 0.3s ease-in-out;
}

.global .social a:hover{
  opacity: 0.9;
  box-shadow: 0px 1px 3px 2px rgba(255, 255, 255, 0.9);
}

.global .copyright{
  text-align: center;
  padding-top: 24px;
  font-weight: 500;
  opacity: 0.8;
  font-size: 16px;
}

@media (max-width: 767px) {

    .global .curve{
      left: 5%;
      height: 70%;
    }

    .global h6{
      margin: 0 auto;
      text-align: center;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .global ul{
      text-align: center;
    }

    .social{
      margin: 0 auto;
    }

}

