
function ajoutMotCle()
{
        
    libelle = $("#mot_cle").val();
    if(libelle === null || $.trim(libelle) === ''  || ($.inArray(libelle,motCleArray)) > -1) {
    return;
    }
    
    motCleArray.push(libelle);
    initMotcleInput();
    initMotCleContainer();
    $("#mot_cle").html("");
}
function initMotcleInput(){
    var liste = "";
    for(j = 0; j < motCleArray.length; j++)
    {
         liste=liste+motCleArray[j];
         if(j!=motCleArray.length-1) liste+=",";
    }
    $('#inputMotCle').val(liste);
}
function deleteInArray(toDelete)
{
    var proced = confirm("Voulez vous supprimer ce mot ?");
    if(proced)
    {
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
    else
    {

    }

    
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

 function deleteActu(idActu){
      res = confirm("Voulez-vous vraiment supprimer ?");
        if(res){
           url =  "delete?id="+idActu;
          document.location.href = url;
        return true;
       }
       else{
           return false;
        }
      }