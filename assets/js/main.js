var currentURL = window.location.pathname.replace("/thebarnbramley/","");
console.log(currentURL);

let routes = [
    {name:"Home", path:"index"},
    {name:"About Us", path:"about-us"},
    {name:"Contact Us", path:"contact"}
];

let navbar = $(".navbar-nav");
navbar.html("");
for (let index = 0; index < routes.length; index++) {
    const element = routes[index];
    
    if (element.path == currentURL) {
        navbar.append('<li class="nav-item active">\
            <a class="nav-link" href="'+element.path+'">'+element.name+'\
            </a>\
        </li>'); 
        continue;
    }
    navbar.append('<li class="nav-item">\
            <a class="nav-link" href="'+element.path+'">'+element.name+'\
            </a>\
        </li>'); 
};

navbar.append('<li class="nav-item">\
            <a class="nav-link" href="menu">Menu\
            </a>\
        </li>'); 

navbar.append('<li class="d-flex justify-content-center align-items-start pt-1">\
        <a class="primary-button" href="order-now">Order Now\
        </a>\
    </li>'); 