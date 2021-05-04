
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || libelle.trim() === '') {
    //alert('Veuillez entrer ');
    return;
    }
    motCleArray.push(libelle);
    

    listMots = "";
    for(i = 0; i < motCleArray.length; i++)
    {
        listMots = listMots+motCleArray[i]" ";
         
    }
    $('#motCleContainer').html(listCat);
    

}
var motCleArray = new Array();


listCat = listCat+"<option value='"+value.idCategory+"'>"+value.name+"</option>";

