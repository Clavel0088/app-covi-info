
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || $.trim(libelle) === ''  || ($.inArray(libelle,motCleArray)) > -1) {
    return;
    }
    
    motCleArray.push(libelle);
    var liste = "";
    for(j = 0; j < motCleArray.length; j++)
    {
         liste=liste+motCleArray[j];
         if(j!=motCleArray.length-1) liste+=",";
    }
    $('#inputMotCle').val(liste);
   // initMotCleContainer();
    initMotCleContainer();
}
function deleteInArray(toDelete)
{
    alert(toDelete);
    var tempArray = new Array();
    
    for(j = 0; j < motCleArray.length; j++)
    {
        if(j != toDelete)
        {
            tempArray.push(motCleArray[j]);
        }

    }
    motCleArray = new Array();
    motCleArray = tempArray.slice();
    var liste = "";
    for(j = 0; j < motCleArray.length; j++)
    {
         liste=liste+motCleArray[j];
         if(j!=motCleArray.length-1) liste+=",";
    }
    $('#inputMotCle').val(liste);
    initMotCleContainer();

    
}
function initMotCleContainer()
{

    $('#motCleContainer').html("");
    for(i = 0; i < motCleArray.length; i++)
    {
        $('#motCleContainer').html($('#motCleContainer').html()+"<p onclick='deleteInArray("+i+")'>"+motCleArray[i]+"</p>");
    }
}
var motCleArray = new Array();

