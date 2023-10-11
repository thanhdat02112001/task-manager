$("#searchTask").on('keyup', function(e) {
  $(".search-result").children().remove()
  $(".search-result").show()
  let keyword = e.target.value,
      url = $(this).data('url')
  if (keyword == "")
  {
    $(".search-result").hide()
  }
  $.ajax({
    method: 'POST',
    url: url,
    data: {
      'keyword': keyword
    },
    success:function(response) {
      let results = response.todos;
      let html = '';
      if (results.length > 0) {
        results.map((task) => {
          html += `<div class="todoItem resultSearch" data-url="${'/todo/' + task.id}">
                    <div class="mark-done">
                        <input type="checkbox" name="mark-done" id="${'isDone' + task.id}" class="checkbox-round d-none doneTask" ${task.status == 1 ? "checked" : ""}>
                        <label for="${'isDone' + task.id}" title="Mark as done"></label>
                    </div>
                    <div class="todo-content" >
                        <span class="todo-title">${task.name}</span>
                    </div>
                    <div class="mark-important">
                        <input type="checkbox" id="${'isImportant' + task.id}"  class="markImportant" ${task.important == 1 ? "checked" : ""} />
                        <label for="${'isImportant' + task.id}" title="Mark as important"></label>
                    </div>
                </div> `
        })
      }
      
    $(".search-result").append(html)
    }
  })
})
$(".search-result").on('click', '.resultSearch', function(){
  $(".search-result").hide();
  $(".rightColumn").css('display', 'flex')
    $(".steps").empty();
     let url = $(this).data('url')
     $.ajax({
        method: 'GET',
        url: url,
        success:function(res) {
            let todo = res.todo,
                steps = todo.steps
            $("input[name='todo-id']").val(todo.id)
            $(".todo-title-detail").text(todo.name)
            $("#isDone-detail").prop("checked", todo.status == 1)
            $("#isImportant-detail").prop("checked", todo.important == 1)
            $("#dueDate-label-detail").text(todo.due_date ? todo.due_date : "Add due date")
            $("input[name='dueDate-selected-detail']").val(todo.due_date ? todo.due_date : "")
            $("#reminder-label-detail").text(todo.remind ? todo.remind : "Remind me")
            $("input[name='reminder-selected-detail']").val(todo.remind ? todo.remind : "")
            $("input[name='repeat-selected-detail']").val(todo.repeat)
            $('#task-note').val(todo.note)
            $(".task-created-at").text("Created at " + moment(todo.created_at).format('ll'))
            switch(todo.repeat) {
                case 1:
                    $("#repeat-label-detail").text("Daily")
                    break;
                case 2:
                    $("#repeat-label-detail").text("Weekly")
                    break;
                case 3:
                    $("#repeat-label-detail").text("Monthly")
                    break;
                default:
                    $("#repeat-label-detail").text("Repeat")
                    $("input[name='repeat-selected-detail']").val(0)
                    break;
            }
            if ( steps.length > 0 ) {
                $(".steps").css('display', 'flex');
                let html = ``
                steps.map((step) => {
                    html += `<div class="d-flex w-100 justify-content-around align-items-baseline mt-2"><div class="mark-done">
                            <input type="checkbox" name="mark-done" id="${'stepDone' + step.id}" class="checkbox-round d-none" ${step.status == 1 ? "checked" : ""}>
                            <label for="${'stepDone' + step.id}" title="Mark as done"></label>
                        </div>
                        <div class="steps-content">
                            <span class="step-title">${step.content}</span>
                        </div>
                        <div class="rm-step" data-id="${step.id}">
                            <button>
                            <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                <path d="M2.59 2.72l.06-.07a.5.5 0 01.63-.06l.07.06L8 7.29l4.65-4.64a.5.5 0 01.7.7L8.71 8l4.64 4.65c.18.17.2.44.06.63l-.06.07a.5.5 0 01-.63.06l-.07-.06L8 8.71l-4.65 4.64a.5.5 0 01-.7-.7L7.29 8 2.65 3.35a.5.5 0 01-.06-.63l.06-.07-.06.07z" fill="currentColor"></path>
                            </svg>
                            </button>
                        </div></div>`
                })
                $(".steps").append(html)
            } else {
                $(".steps").css('display', 'none');
            }
        }
    })
})

$(".toolbar-action.sort").click(function()
{
    let url = $(this).data('url')
    $(this).toggleClass('active-toolbar')
    $.ajax({
        method: 'GET',
        url: url,
        success:function(response) {
            let tasks =  Object.values(response.tasks),
                tasksDone =  Object.values(response.tasksDone),
                html = ''
            console.log(moment())
            if (tasks.length > 0) {
                $("#todoList").children().remove()
                tasks.map((task) => {
                    html += `<div class="todoItem">
                    <div class="mark-done">
                        <input type="checkbox" name="mark-done" id="${'isDone'+task['id']}" class="checkbox-round d-none doneTask" ${task['status'] == 1 ? "checked" : ""}>
                        <label for="${'isDone'+task['id']}" title="Mark as done"></label>
                    </div>
                    <div class="todo-content" data-url="http://localhost/todo/${task['id']}">
                        <span class="todo-title">${task['name']}</span>
                        <div class="d-flex">
                            <span class="${task['due_date'] ? "" :"d-none"} ${moment() > moment(task['due_date']) ? "text-danger" : "text-secondary" } tag me-2">
                                <svg class="fluentIcon dateButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 11a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm4-5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h9a2.5 2.5 0 002.5-2.5v-9zM4 7h12v7.5c0 .83-.67 1.5-1.5 1.5h-9A1.5 1.5 0 014 14.5V7zm1.5-3h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4z" fill="currentColor"></path>
                                </svg>
                                <span class="ms-1">${moment(task['due_date']).format('ddd, MMM Do')}</span>
                            </span>
                        
                            <span class="${task['remind'] ? "" : "d-none"} text-secondary tag me-2">
                                <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                    <path d="M17 5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h4.1c-.16-.32-.3-.65-.4-1H5.5A1.5 1.5 0 014 14.5V7h12v2.2c.35.1.68.24 1 .4V5.5zM5.5 4h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4zm9 15a4.5 4.5 0 100-9 4.5 4.5 0 000 9zm-.5-6.5a.5.5 0 011 0V14h1a.5.5 0 010 1h-1.5a.5.5 0 01-.5-.5v-2z" fill="currentColor"></path>
                                </svg>
                                <span class="ms-1">${moment(task['remind']).format('ddd, MMM Do')}</span>
                            </span> 
                       
                            <span class="text-secondary tag me-2 ${task['repeat'] != 0 ? "" : "d-none"}">
                                <svg class="fluentIcon recurringButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 6.67a.5.5 0 01.3.1l.08.07.01.02A5 5 0 0113.22 15L13 15H6.7l1.65 1.65c.18.17.2.44.06.63l-.06.07a.5.5 0 01-.63.06l-.07-.06-2.5-2.5a.5.5 0 01-.06-.63l.06-.07 2.5-2.5a.5.5 0 01.76.63l-.06.07L6.72 14h.14L7 14h6a4 4 0 003.11-6.52.5.5 0 01.39-.81zm-4.85-4.02a.5.5 0 01.63-.06l.07.06 2.5 2.5.06.07a.5.5 0 010 .56l-.06.07-2.5 2.5-.07.06a.5.5 0 01-.56 0l-.07-.06-.06-.07a.5.5 0 010-.56l.06-.07L13.28 6h-.14L13 6H7a4 4 0 00-3.1 6.52c.06.09.1.2.1.31a.5.5 0 01-.9.3A4.99 4.99 0 016.77 5h6.52l-1.65-1.65-.06-.07a.5.5 0 01.06-.63z" fill="currentColor"></path>
                                </svg>
                                <span class="ms-1">${task['repeat'] == 1 ? "Daily" : (task['repeat'] == 2 ? "Weekly" : "Monthly")}</span>
                            </span> 
                        </div>
                    </div>
                    <div class="mark-important">
                        <input type="checkbox" id="${'isImportant'+task['id']}" ${task['important'] == 1 ? "checked" : ""} class="markImportant"/>
                        <label for="${'isImportant'+task['id']}" title="Mark as important"></label>
                    </div>
                </div>`
                })
                $("#todoList").append(html)
                html = ``;
            }
            if (tasksDone.length > 0) {
                $("#completedList").children().remove()
                tasksDone.map((task) => {
                    html += `<div class="todoItem">
                    <div class="mark-done">
                        <input type="checkbox" name="mark-done" id="${'isDone'+task['id']}" class="checkbox-round d-none doneTask" ${task['status'] == 1 ? "checked" : ""}>
                        <label for="${'isDone'+task['id']}" title="Mark as done"></label>
                    </div>
                    <div class="todo-content" data-url="http://localhost/todo/${task['id']}">
                        <span class="todo-title">${task['name']}</span>
                    </div>
                    <div class="mark-important">
                        <input type="checkbox" id="${'isImportant'+task['id']}" ${task['important'] == 1 ? "checked" : ""} class="markImportant"/>
                        <label for="${'isImportant'+task['id']}" title="Mark as important"></label>
                    </div>
                </div>`
                })
                $("#completedList").append(html)
                html = ``;
            }
        }
    })
})