const inputBox=document.getElementById("inputbox"); 
const listContainer = document.getElementById("List");

function addTask()
{
    if(inputBox.value === '')
    {
        alert("you must write something");
    }
    else{
        let li = document.createElement("li");
        let circleSpan = document.createElement("span");
        circleSpan.classList.add("circle");

        
        li.appendChild(circleSpan);
        
       
        let taskText = document.createTextNode(inputBox.value);
        li.appendChild(taskText);
        
        let cross = document.createElement("span");
        cross.classList.add("cross");
        cross.innerHTML ="\u00d7";
        
        
        

        li.appendChild(cross);
        
        listContainer.appendChild(li);
        
    }
    inputBox.value = "";
    saveData();
}
listContainer.addEventListener('click',function(e)
{
    if(e.target.tagName === "LI" || e.target.classList.contains("CIRCLE"))
    {
        
        
        e.target.querySelector(".circle").classList.toggle("tick");
        e.target.classList.toggle("checked");
        saveData();
    }
    else if(e.target.tagName === "SPAN")
    {
        if(e.target.classList.contains("cross"))
        {
        e.target.parentElement.remove();
        saveData();
        }
    }
}, false);

      

function saveData()
{
    localStorage.setItem("data",listContainer.innerHTML);
}
function showtask()
{
    listContainer.innerHTML = localStorage.getItem("data");
}
showtask();


