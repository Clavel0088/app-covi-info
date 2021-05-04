
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || $.trim(libelle) === ''  || ($.inArray(libelle,motCleArray)) > -1) {
    return;
    }
    
    motCleArray.push(libelle);
    initMotCleContainer();

}
function deleteInArray(toDelete)
{
    //var idx = ($.inArray(toDelete,motCleArray))
    for(i = 0; i < motCleArray.length; i++)
    {
        var tempMot = motCleArray[i];
    }
    alert(toDelete);
    
    //initMotCleContainer();
}
function initMotCleContainer()
{

    $('#motCleContainer').html("");
    listMots = "";
    for(i = 0; i < motCleArray.length; i++)
    {
        var tempMot = "e";
        $("<p/>", {
            
             name: tempMot+i,
             id: tempMot+i,
             html: tempMot+i,
           click: function(i){
               alert(e+i);
              deleteInArray(this.val());
           }
         }).appendTo("#motCleContainer");
    }
    $('#mot_cle').val("");
}
var motCleArray = new Array();

