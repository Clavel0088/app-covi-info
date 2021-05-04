
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

    $('#motCleContainer').val("");
    for(i = 0; i < motCleArray.length; i++)
    {
        //listMots = listMots+motCleArray[i]+"  ";
        var tempMot = motCleArray[i];
        //listMots = listMots+"<p onclick="alert('"sdfsdf"');"'>"+tempMot+"</p>";

        $("<p/>", {
            
             name: 'link_html_edit',
             id: 'link_html_edit',
             html: tempMot,
           click: function(){
              deleteInArray(tempMot);
           }
         }).appendTo("#motCleContainer");
        //txtSelect = txtSelect+"<option value=\""+listprice[i]+"\" selected=\"true\">"+listprice[i]+"</option>";
    }
   // $('#motCleContainer').html(listMots);
    $('#mot_cle').val("");
}
var motCleArray = new Array();

