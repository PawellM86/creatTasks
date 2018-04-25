        //show textarea for tasks
        var btn = document.querySelector('#push');
        btn.addEventListener('click', function() {
          document.querySelector(".create").classList.toggle("show");
        })

        //insert tasks in array and show it
        var tasksArr = [];
        var btn2 = document.querySelector('#send');
        btn2.addEventListener('click', function() {
        event.preventDefault();

        var tasks = document.querySelector('#txtarea').value;

        tasksArr.unshift(tasks);

    for( var i = 0; i < tasksArr.length; i++ );
        var button = document.createElement("button");
        var btntxt = document.createTextNode("EDIT");
        button.appendChild(btntxt);

        var button1 = document.createElement("button");
        var btntxt1 = document.createTextNode("DELETE");
        button1.appendChild(btntxt1);

        var button2 = document.createElement("button");
        var btntxt2 = document.createTextNode("ASCRIBE");
        button1.appendChild(btntxt2);

        var newInput = document.createElement("input");
        var newButton = document.createElement("button");
        var btntxt3 = document.createTextNode("UPDATE");


        var newElement = document.createElement("li");
        var textnode = document.createTextNode("Užduotis nr " + i +": " + tasksArr[0]);
        var ul = document.getElementById("testing");

        ul.appendChild(newElement).appendChild(textnode);
        ul.appendChild(button).appendChild(btntxt);
        ul.appendChild(button1).appendChild(btntxt1);
        ul.appendChild(button2).appendChild(btntxt2);
        ul.appendChild(newInput);
        ul.appendChild(newButton).appendChild(btntxt3);

        //delete button
        button1.addEventListener('click', function() {
          newElement.remove();
          button.remove(ul.appendChild(button).appendChild(btntxt));
          button1.remove(ul.appendChild(button1).appendChild(btntxt1));
          button2.remove(ul.appendChild(button2).appendChild(btntxt2));

        })

        //edit button
        button.addEventListener('click', function() {
          newInput.value = tasksArr[0];

          newButton.addEventListener('click', function(){
          newElement.innerHTML = "Užduotis nr: " + i +" " +newInput.value;
          newButton.remove(ul.appendChild(newButton).appendChild(btntxt3));
          newInput.remove();
          })

        })

})
