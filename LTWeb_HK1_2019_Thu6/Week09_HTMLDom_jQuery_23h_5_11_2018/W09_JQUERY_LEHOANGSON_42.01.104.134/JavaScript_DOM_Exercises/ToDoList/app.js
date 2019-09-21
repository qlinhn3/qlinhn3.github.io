var todos=[];
function onAddClick () {
	var newWork=newToDo.value;
	todos.push(newWork);
	UpdateList();
	document.getElementById('newToDo').value='';

}
function UpdateList(){
	var eleToDo=document.getElementById('toDo-list');
	eleToDo.innerHTML="";
	for (var i = 0; i < todos.length; i++) {
		eleToDo.innerHTML+='<li onclick="onItemClick(' + i + ')">' + todos[i] +'</li>';
	}
}
function onItemClick(index){
	// todos.splice(index,1);
	// UpdateList();
	alert(document.getElementById('toDo-list').childNodes[index].nodeValue);
}