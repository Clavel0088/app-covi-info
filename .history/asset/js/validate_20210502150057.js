
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || $.trim(libelle) === ''  || ($.inArray(libelle,motCleArray)) > -1) {
    //alert('Veuillez entrer ');
    return;
    }
    
    motCleArray.push(libelle);
    initMotCleContainer();

}
function deleteInArray(toDelete)
{
    alert(toDelete);
    var idx = ($.inArray(toDelete,motCleArray))
    alert(idx);
    if(idx != -1)
    {
        motCleArray.splice(idx,1);
    }
    
    initMotCleContainer();
}
function initMotCleContainer()
{

    alert('length--'+motCleArray.length);
    $('#motCleContainer').html("");
    listMots = "";
    for(i = 0; i < motCleArray.length; i++)
    {
        //listMots = listMots+motCleArray[i]+"  ";
        var tempMot = motCleArray[i];
        //listMots = listMots+"<p onclick="alert('"sdfsdf"');"'>"+tempMot+"</p>";

        $("<p/>", {
            
             name: tempMot,
             id: tempMot,
             html: tempMot,
           click: function(){
              deleteInArray(tempMot);
           }
         }).appendTo("#motCleContainer");
    }
    $('#mot_cle').val("");
}
var motCleArray = new Array();

