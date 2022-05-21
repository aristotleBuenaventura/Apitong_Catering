.navbar-brand {
    margin-left: 4em;
    font-family: "Oswald", sans-serif;
    letter-spacing: 0.09em;
}

.navbar-nav {
    margin-right: 4em;
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
    left:10%;
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
    width: 100%;
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
$(document).ready(function(){

  $('.header').height($(window).height());

})