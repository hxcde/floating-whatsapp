<!-- icon -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

<!-- CSS -->
<style>

/*  CSS */
.floating {
 position: fixed;
 width: 60px;
 height: 60px;
 bottom: 20px;
 right: 20px;
 background-color: #25d366;
 color: #fff;
 border-radius: 50px;
 text-align: center;
 font-size: 30px;
 box-shadow: 2px 2px 3px #999;
 z-index: 100;
}

.fab-icon {
 margin-top: 16px;
}

.center {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  height: 100vh;
}

.pulse {
  animation: pulse-animation 2s infinite;
}

@keyframes pulse-animation {
  0% {
    box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.2);
  }
  100% {
    box-shadow: 0 0 0 20px rgba(0, 0, 0, 0);
  }
}

.master{
  color:black;
  float:right;
}

@media (max-width:900px){
  .master{
    display:none
  }
}

/* Ausblenden auf dem Desktop */

.mobileshow{
  display: none;
}

@media (max-width: 601px) {
  .mobileshow {
   display: block;
  }
}

</style>

<!-- Button -->
<a href="https://whatsapp.com" class="zoom-box floating pulse mobileshow" target="_blank">
<i class="fab fa-whatsapp fab-icon"></i>
</a>
