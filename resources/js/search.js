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