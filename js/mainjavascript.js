/**
 * Created by jloin on 1/9/2020.
 */

function activeDive(){
    alert("Clicked!");

}


function changeColor(){
    var color=document.getElementById("textBox").value;
    document.getElementById("div1").style.backgroundColor=color;
}

function changeColorJquery(){
    var colorJquery= $("#textBox").val();
    $("#div1").css("background-color",colorJquery);
    $("#div1").css("color","white");
}

function changeColorFade(){
    $("#div3").fadeOut("slow");
    $("#div3").fadeIn(3000);
}