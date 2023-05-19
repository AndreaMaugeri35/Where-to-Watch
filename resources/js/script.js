// console.log('ciaone');



document.getElementById("mygif").style.display = "block";
setTimeout(function() {
    document.getElementById("mygif").classList.add("fade-out");
}, 2000);
setTimeout(function() {
    document.getElementById("mygif").style.display = "none";
}, 3000);