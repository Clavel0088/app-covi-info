
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || $.trim(libelle) === ''  || ($.inArray(libelle,motCleArray)) > -1) {
    return;
    }
    
    motCleArray.push(libelle);
   // initMotCleContainer();
   $('#motCleContainer').html($('#motCleContainer').html()+"<p onclick='deleteInArray("+motCleArray.length+")'>"+libelle+"</p>");

}
function deleteInArray(toDelete)
{
    motCleArray.splice(toDelete-1, 1);
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
            alert();
              deleteInArray(this.val());
           }
         }).appendTo("#motCleContainer");
    }
    $('#mot_cle').val("");
}
var motCleArray = new Array();

