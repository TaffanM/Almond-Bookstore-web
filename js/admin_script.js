let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .account-box');
let closeUpdate = document.getElementById('close-update');
var pageHeader = document.getElementById('header'),
    headerTime = document.getElementById('time'),
    headerDate = document.getElementById('date'),
    greetings = document.getElementById('greetings');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   accountBox.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{
   accountBox.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   accountBox.classList.remove('active');
}

//closeUpdate.onclick = () => {
  // document.querySelector('.edit-product-form').style.display = 'none';
   //window.location.href = 'admin_products.php';
//}

function clock() {
    var time = new Date(),
        hours = time.getHours(),
        minutes = String(time.getMinutes()).padStart(2, "0"),
        day = time.getDay(),
        month = time.getMonth(),
        date = time.getDate(),
        hours12Format = [12, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        dayArray = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        monthArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    if (localStorage.getItem("24hour") == 1) {
        headerTime.innerHTML = hours + ":" + minutes;
    } else {
        headerTime.innerHTML = hours12Format[hours] + ":" + minutes;
    }
    headerDate.innerHTML = dayArray[day] + ", " + monthArray[month] + " " + date;
}

clock();
setInterval(clock, 1000);