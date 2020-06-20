let sidebarOpen = true;
function toggleSidebar(){
  console.log(sidebarOpen);
  if(sidebarOpen){
    document.getElementById("sidebar").style.width = "250px";
    document.getElementById("sidebar-menu-btn").innerHTML = '<i class="fas fa-times"></i>';
    document.getElementById("content").style.marginLeft = "250px";
  }else{
    document.getElementById("sidebar").style.width = "0px";
    document.getElementById("sidebar-menu-btn").innerHTML = '<i class="fas fa-bars"></i>';
    document.getElementById("content").style.marginLeft = "0px";
  }
  sidebarOpen = !sidebarOpen;
}
