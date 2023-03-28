const currentDate = document.querySelector(".current-date");
daysTag = document.querySelector(".days"); 
selectDate = document.querySelector(".selectDate");
// Place = document.querySelector(".horaire");
prevNextIcon = document.querySelectorAll(".icons span");
// nextDate = document.querySelectorAll(" .nextdate");
let dateshow = new Date();
let cal = document.getElementById("cal");
let tdate= new Date();
let date = new Date(),
currDay = date.getDay(),
currDate = date.getDate(),
currYear = date.getFullYear(),
currMonth =date.getMonth(),
dbDate="";
if (dateshow.getMonth()<10) {
    let a = dateshow.getMonth()+1;
    dbDate = currYear+'-0'+a;
}else{
    dbDate = currYear+'-'+dateshow.getMonth();
}
if (dateshow.getDate()<10) {
    dbDate +='-0'+dateshow.getDate();
}else{
    dbDate +='-'+dateshow.getDate();
}
let Np=0;
nPanier = document.querySelector(".npanier");
nPanier.innerHTML= Np;

let d = new Date(),
m=d.getMonth(),
y=d.getFullYear(),
da=d.getDate();





const months = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre", "Octobre","Novembre","Decembre"];
const days =["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getUTCDay(),
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
    let liTag="";

    for (let i = firstDayofMonth; i > 0; i--) {
        liTag +=`<li class="inactive">${lastDateofLastMonth - i + 1}</li>` 
    }
    
    for (let i= 1; i <= lastDateofMonth; i++) {
        if (i<da && m===currMonth){
            liTag +=`<li class="inactive"><a>${i}</a></li>`  
        }else{

        // let isToday = i === date.getDate() && currMonth === new Date().getMonth()
        //                 && currYear === new Date().getFullYear() ? "active" : "";
        liTag +=`<li><a id = "${i}" onclick = "chooseDate(this.id)">${i}</a></li>` 
        }
    }
    currentDate.innerText= `${months[currMonth]} ${currYear}`
    daysTag.innerHTML = liTag;
}
function chooseDate(i){
    dateshow.setDate(i);
    dateshow.setMonth(currMonth);
    dateshow.setFullYear(currYear);
    showDate();
    dbDate="";
    if (dateshow.getMonth()<10) {
        let a = dateshow.getMonth()+1;
        dbDate = currYear+'-0'+a;
    }else{
        dbDate = currYear+'-'+dateshow.getMonth();
    }
    if (dateshow.getDate()<10) {
        dbDate +='-0'+dateshow.getDate();
    }else{
        dbDate +='-'+dateshow.getDate();
    }
}
function showDate(){
    let Day = dateshow.getDay(),
    Date = dateshow.getDate(),
    Year = dateshow.getFullYear(),
    Month = dateshow.getMonth();
    cal.style.display = "none"
    selectDate.innerHTML = `${days[Day]} ${Date} ${months[Month]} ${Year}`
}

renderCalendar();
showDate();


function nextDate(){
    dateshow.setDate(dateshow.getDate() + 1);
    showDate();
    dbDate="";
    if (dateshow.getMonth()<10) {
        let a = dateshow.getMonth()+1;
        dbDate = currYear+'-0'+a;
    }else{
        dbDate = currYear+'-'+dateshow.getMonth();
    }
    if (dateshow.getDate()<10) {
        dbDate +='-0'+dateshow.getDate();
    }else{
        dbDate +='-'+dateshow.getDate();
    }
}

function prevDate(){
    if (date<dateshow) {
        dateshow.setDate(dateshow.getDate() - 1);
        showDate(); 
        dbDate="";
    if (dateshow.getMonth()<10) {
        let a = dateshow.getMonth()+1;
        dbDate = currYear+'-0'+a;
    }else{
        dbDate = currYear+'-'+dateshow.getMonth();
    }
    if (dateshow.getDate()<10) {
        dbDate +='-0'+dateshow.getDate();
    }else{
        dbDate +='-'+dateshow.getDate();
    }
    }
    
}
prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () =>{
        if(icon.id === "prev"){
            if(currMonth>m && currYear>=y){
                currMonth = currMonth -1;
            }
             
        }else{
            currMonth=currMonth + 1;
        }
        if (currMonth <0 || currMonth >11) {
            date = new Date(currYear, currMonth);
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        }else{
            date= new Date();
        }
  
        renderCalendar();
        
    })
})

function showCalendar(){
    if(getComputedStyle(cal).display != "none"){
      cal.style.display = "none";
      cal.style.width = "450px";
    } else {
      cal.style.display = "block";
    }
  };
//   function unshowCalendar(){
//     if(getComputedStyle(cal).display != "block"){
//       cal.style.display = "block";
//     } else {
//       cal.style.display = "none";
//     }
//   };
//   function showCalendarbody(){
//     if(getComputedStyle(cal).display != "none"){
//       cal.style.display = "none";
//       cal.style.width = "450px";
//     } else {
//       cal.style.display = "block";
//     }
//   };
//   function unshowCalendarbody(){
//     if(getComputedStyle(cal).display != "block"){
//       cal.style.display = "block";
//     } else {
//       cal.style.display = "none";
//     }
//   };
//   function showPlaces(){
    
//   }



