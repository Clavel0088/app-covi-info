
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || $.trim(libelle) === '' || if($.inArray(libelle))) {
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
var motCleArray = new Array();

