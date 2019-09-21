var todos=[];
function onAddClick() {
	var newToDo=document.getElementById('newToDo').value;
	todos.push(newToDo);
	UpdateList();
	document.getElementById('newToDo').value="";
}
function UpdateList() {
	var eleToDoList=document.getElementById('toDo-list');
	eleToDoList.innerHTML="";
	for(var i=0;i<todos.length;i++){
		eleToDoList.innerHTML+='<li onclick="onItemClick(' + ')")>'+ todos[i]+'</li>';
	}
}
function onItemClick(index) {
	todos.splice(index,1);
	UpdateList();
}