function message(){
    var name;
    window.alert("Good Afternoon!");
    window.prompt("Tell me what is your name?");
    alert("Your name is " + name);
    confirm("Are you sure you want to Close this?");
    document.fgColor='green';
    document.bgColor='yellow';
}
function enLarge(){
    document.getElementById('image1').width=900;
    document.getElementById('image1').height=700;
    document.getElementById('image1').border=3;
}
function resSize(){
    document.getElementById('image1').width=500;
    document.getElementById('image1').height=400;
    document.getElementById('image1').border=0;
}
function changeText(){
    document.getElementById('google').innerHTML='Microsoft';
    
}
function changeLink(){
    document.getElementById('google').href='http://www.nsbm.ac.lk';
}