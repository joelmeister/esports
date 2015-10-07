var showPlayersTable = function(){
    var showTable = document.getElementById("playersTableDiv");
    showTable.style.display = "";

    var hideTable = document.getElementById("teamsTableDiv");
    hideTable.style.display="none";

    var showLink = document.getElementById("playersLink");
    showLink.className="selected";

    var hideLink = document.getElementById("teamsLink");
    hideLink.className="";
}

var showTeamsTable = function(){
    var showTable = document.getElementById("teamsTableDiv");
    showTable.style.display = "";

    var hideTable = document.getElementById("playersTableDiv");
    hideTable.style.display="none";

    var showLink = document.getElementById("teamsLink");
    showLink.className="selected";

    var hideLink = document.getElementById("playersLink");
    hideLink.className="";
}