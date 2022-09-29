// let el = document.querySelector('#toto');
// el.style.color = "red";

var slideL= {
    distance: '150%',
    origin: 'left', //arrive par la left
    opacity: null,
    // duration: 2000, //prend 2s pour se faire
    // delay: 1000   //se declanche apres 1s
};
var slideR = {
    distance: '150%',
    origin: 'right',
    opacity: null
};
// var slideB = {
//     distance: '150%',
//     origin: 'bottom',
//     opacity: null,
//     scale: 0.7,  //effet d'agrandissement
//     duration: 800,
//     delay: 200,
//     // rotate: {  //effet de rotation
//     //     x: 50,
//     //     z: 100
//     // }
// };

ScrollReveal().reveal('#logo', slideL);
// ScrollReveal().reveal('#container_card', slideB);
ScrollReveal().reveal('#navitem', slideR);