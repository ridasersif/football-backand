
document.getElementById('PositionRemplacant').style.display='block'
document.getElementById("statistiqueGarde").style.display="none" 
let selectPosition=document.getElementById("position")
selectPosition.addEventListener('change',function(){
    if(selectPosition.value=='GK'){
        document.getElementById("statistiqueJoueur").style.display="none"
        document.getElementById("statistiqueGarde").style.display="block"       
    }else{
        document.getElementById("statistiqueJoueur").style.display="block"
        document.getElementById("statistiqueGarde").style.display="none"
         
    }
})


function resetForm() {
document.getElementById("playerForm").reset(); 
}
