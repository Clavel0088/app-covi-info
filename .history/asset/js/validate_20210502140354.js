
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || $.trim(libelle) === ''  || ($.inArray(libelle,motCleArray)) > -1) {
    //alert('Veuillez entrer ');
    return;
    }
    
    motCleArray.push(libelle);
    
    listMots = "";
    for(i = 0; i < motCleArray.length; i++)
    {
        listMots = listMots+motCleArray[i]+"  ";
         
    }
    $('#motCleContainer').html(listMots);
    $('#mot_cle').val("");
    

}
deleteInArray(toDelete)
{
    var idx = ($.inArray(toDelete,motCleArray))
    alert(idx);
    if(idx != -1)
    {
        motCleArray.splice(idx,1);
    }
}
var motCleArray = new Array();

