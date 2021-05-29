// barre de navigation changement de couleur***page accueil***
const navigation = document.querySelector('#navBg');

window.addEventListener('scroll', () => {
    // scroll Y 30 : si on a scrollé de 30 px depuis le haut
    if (window.scrollY > 30 && window.scrollY < 800) {
        navigation.classList.add("anim-navBg");
        navigation.classList.remove("anim-navBgYellow");
        navigation.classList.remove("anim-navBgPink");

        console.log('ok');
    } else if (window.scrollY > 800 && window.scrollY < 1600) {
        //si on a pas scroller jusque 800px
        navigation.classList.remove("anim-navBg");
        navigation.classList.remove("anim-navBgPink");

        navigation.classList.add("anim-navBgYellow");

    } else if (window.scrollY > 1600) {
        //si on a pas scroller jusque 1600px
        navigation.classList.add("anim-navBgPink");
        navigation.classList.remove("anim-navBgYellow");
        navigation.classList.remove("anim-navBg");


    } else {
        navigation.classList.remove("anim-navBgPink");
        navigation.classList.remove("anim-navBgYellow");
        navigation.classList.remove("anim-navBg");
    }
})

// barre de navigation changement de couleur***page accueil***
const flecheMillieu = document.querySelector('.middle_arrow');

window.addEventListener('scroll', () => {
    // scroll Y 200 : si on a scrollé de 200 px depuis le haut
    if (window.scrollY > 50) {
        flecheMillieu.classList.add("fleche_inactive");
        console.log('hello');
    } else {
        //si on a pas scroller jusque 50px
        flecheMillieu.classList.remove("fleche_inactive");


    }
})
const flecheVersBas = document.querySelector('.bottom_arrow');

window.addEventListener('scroll', () => {
    // scroll Y 150 : si on a scrollé de 150 px depuis le haut
    if (window.scrollY > 1150) {
        flecheVersBas.classList.add("fleche_inactive");
        console.log('coucou');
    } else {
        //si on a pas scroller jusque150px
        flecheVersBas.classList.remove("fleche_inactive");


    }
})

const proximite = document.querySelector('.proximite');

const accompagnons = document.getElementById('content-2');
const exigence = document.getElementById('content-4');
const creativite = document.getElementById('content-5');
const souplesse = document.getElementById('content-6');

const proxiTitre = document.querySelector('.proxi');

proxiTitre.addEventListener('click', () => {
    proximite.classList.add('.opacity-1');



})


//accueil ligne 1
// const titre = document.getElementById("titre");

// window.addEventListener('click', () => {
//     titre.classList.toggle('codons');
// })

// lien navigation écouteur d'évènements*** page accueil***



// // deploiement bouton lire la suite ***page blog***
// function deploie(divObj) {
//     if (divObj.style.display == "inline")
//         divObj.style.display = "none";
//     else if (divObj.style.display == "none")
//         divObj.style.display = "inline";
// }