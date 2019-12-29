function newTask() {
  document.getElementById ("list").addEventListener("task", newTask);
    var task = document.getElementById("task").value; //Add task
    var ul = document.getElementById("list"); //Create list
    var li = document.createElement("li"); //Add tasks to the list
  // document.getElementById("list").style.textDecoration="line-through";
    li.appendChild(document.createTextNode("-" + task)); //Show the task with a "-"
    ul.appendChild(li);
    document.getElementById("task").value = "";
    li.onclick = dltTask;
  }

  function dltTask(e) {
    e.target.parentElement.removeChild(e.target);
  }