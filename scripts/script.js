

function view(){
    document.getElementById("view").style.visibility = "visible";
    document.getElementById("add").style.visibility = "hidden";
    document.getElementById("edit").style.visibility = "hidden";
    document.getElementById("delete").style.visibility = "hidden";
    document.getElementById("search").style.visibility = "hidden";
}

function add(){
    document.getElementById("view").style.visibility = "hidden";
    document.getElementById("add").style.visibility = "visible";
    document.getElementById("edit").style.visibility = "hidden";
    document.getElementById("delete").style.visibility = "hidden";
    document.getElementById("search").style.visibility = "hidden";
}

function edit(){
    document.getElementById("view").style.visibility = "hidden";
    document.getElementById("add").style.visibility = "hidden";
    document.getElementById("edit").style.visibility = "visible";
    document.getElementById("delete").style.visibility = "hidden";
    document.getElementById("search").style.visibility = "hidden";
}

function del(){
    document.getElementById("view").style.visibility = "hidden";
    document.getElementById("add").style.visibility = "hidden";
    document.getElementById("edit").style.visibility = "hidden";
    document.getElementById("delete").style.visibility = "visible";
    document.getElementById("search").style.visibility = "hidden";
}

function search(){
    document.getElementById("view").style.visibility = "hidden";
    document.getElementById("add").style.visibility = "hidden";
    document.getElementById("edit").style.visibility = "hidden";
    document.getElementById("delete").style.visibility = "hidden";
    document.getElementById("search").style.visibility = "visible";
}