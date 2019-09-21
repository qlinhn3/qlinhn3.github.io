var todos = [];
function onAddClick(){
var newToDo= document.getElementById('newToDo').value;
todos.push(newToDo);
Updatelist();
document.getElementById('newToDo').value="";
}

function Updatelist(){
	var eleToDoList= document.getElementById('toDo-list');
	eleToDoList.innerHTML="";
	for(var i=0; i < todos.length;i++){
		eleToDoList.innerHTML+='<li onclick="onItemClick('+i+')">'+todos[i]+'</li>';		
	}
}

function onItemClick(i){
	todos.splice(i,1);
	Updatelist();
}