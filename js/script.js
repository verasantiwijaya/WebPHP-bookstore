let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}

$(document).ready(function() {
   $('#searchForm').submit(function(e) {
     e.preventDefault(); // Menghentikan form dari pengiriman default
     var searchTerm = $('#searchInput').val(); // Mengambil nilai dari input pencarian
     if (searchTerm) {
       window.location.href = 'search_page?search=' + encodeURIComponent(searchTerm); // Navigasi ke halaman pencarian dengan query string
     }
   });
 });
 