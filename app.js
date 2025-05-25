let opener = document.querySelector('.open-sidebar')
let sidebar = document.querySelector('.sidebar')
let sidebar_menu = document.querySelector('.sidebar-menu')
let slider = document.getElementById('slider');

let hero_para = document.querySelector('.hero-para')
let hero_heading = document.querySelector('.hero-heading')
let hero_content = document.querySelectorAll('.hero-content')
let hero_image = document.querySelectorAll('.hero-image')
let next = document.querySelector('.forward')
let prev = document.querySelector('.backward')



opener.addEventListener('click', () => {
    sidebar_menu.style.transform = 'translateX(0)'
    sidebar.style.visibility = 'visible'
})

sidebar.addEventListener('click', (e) => {
    sidebar.style.visibility = 'hidden'
    sidebar_menu.style.transform = 'translateX(-100%)'
})

sidebar_menu.addEventListener('click', (e) => {
    e.stopPropagation()
})


// const data = [
//     {
//         heading: 'For Everything and Everyone',
//         para: 'Even if your less into design and more into content strategy you may find some redeeming value with, wait for it, dummy copy.',
//         image: './assets/slider-images/1.jpg'
//     },
//     {
//         heading: 'Featured Accessories',
//         para: 'A client that’s unhappy for a reason is a problem, a client that’s unhappy though required he or her can’t quite put a finger.',
//         image: './assets/slider-images/2.jpg'
//     },
//     {
//         heading: 'Charge Your Phone Safely!',
//         para: 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.',
//         image: './assets/slider-images/3.jpg'
//     },
// ]
// let count = 0
// next.addEventListener('click', () => {
//     count++
//     if (count > 2) {
//         count = 0
//     }
//     hero_image.style.backgroundImage = `url(${data[count].image})`
//     hero_heading.innerHTML = data[count].heading
//     hero_para.innerHTML = data[count].para
// })


// prev.addEventListener('click', () => {
//     count--
//     if (count < 0) {
//         count = 2
//     }
//     hero_image.style.backgroundImage = `url(${data[count].image})`
//     hero_heading.innerHTML = data[count].heading
//     hero_para.innerHTML = data[count].para
// })



window.addEventListener('load', () => {
    hero_content[0].classList.add('move-content')
})



let count = 0;

next.addEventListener('click', () => {
    count++;
    if (count > 2) {
        count = 0;
    }

    hero_image.forEach((item) => {
        item.style.transform = `translateX(${count * -100}%)`;
    });

    hero_content.forEach((content) => {
        content.classList.remove('move-content');
    });

    hero_content[count].classList.add('move-content');
});

prev.addEventListener('click', () => {
    count--;
    if (count < 0) {
        count = 2;
    }

    hero_image.forEach((item) => {
        item.style.transform = `translateX(${count * -100}%)`;
    });

    hero_content.forEach((content) => {
        content.classList.remove('move-content');
    });

    hero_content[count].classList.add('move-content');
});
