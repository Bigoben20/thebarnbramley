var currentURL = window.location.pathname;
console.log(currentURL.replace("/thebarnbramley",""));

let routes = [
    {name:"Home", path:"index"},
    {name:"About Us", path:"about-us"},
    {name:"Contact Us", path:"contact"}
];

let navbar = $(".navbar-nav");
navbar.html("");
routes.forEach(element => {
    if (element.path == currentURL.replace("/thebarnbramley","")) {
        navbar.append('<li class="nav-item active">\
            <a class="nav-link" href="'+element.path+'">'+element.name+'\
            </a>\
        </li>'); 
    }
    navbar.append('<li class="nav-item">\
            <a class="nav-link" href="'+element.path+'">'+element.name+'\
            </a>\
        </li>'); 
});

navbar.append('<li class="nav-item">\
            <a class="nav-link" href="menu">Menu\
            </a>\
        </li>'); 

navbar.append('<li class="nav-item">\
        <a class="nav-link" href="order-now">Order Now\
        </a>\
    </li>'); 