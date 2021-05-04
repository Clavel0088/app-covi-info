
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || $.trim(libelle) === ''  || ($.inArray(libelle,motCleArray)) > -1) {
    return;
    }
    
    motCleArray.push(libelle);
    initMotCleContainer();

}
function deleteInArray(indice)
{
    alert(indice);
   
    motCleArray.splice(indice,1);
    
    initMotCleContainer();
}
function initMotCleContainer()
{

    $('#motCleContainer').html("");
    listMots = "";
    for(i = 0; i < motCleArray.length; i++)
    {
        var tempMot = motCleArray[i];
        $("<p/>", {
            
             name: tempMot,
             id: tempMot,
             html: tempMot,
           click: function(){
              deleteInArray(i);
           }
         }).appendTo("#motCleContainer");
    }
    $('#mot_cle').val("");
}
var motCleArray = new Array();

