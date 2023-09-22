 //init datetime
 $(".today-lb").text(moment().format("ddd"))
 $(".tomorrow-lb").text(moment().add(1, 'days').format("ddd"))
 $("#reminder-today-lb").text(moment().add(2, 'hours').format("ddd, hh:mm A"))
 $("#reminder-tomorrow-lb").text(moment().add(1, 'day').format("ddd, hh:mm A"))
 $("#reminder-nextweek-lb").text(moment().add(1, 'weeks').weekday(1).format("ddd, hh:mm A"))

 let config = {
     enableTime: true,
     dateFormat: "Y-m-d H:i",
 }
 flatpickr(".datepicker", config);
 flatpickr(".datepicker-detail", config);
 //due-date
 $(".due-nav-item").click(function(e) {
     let dueDate = $(this).find('input[name="dueDate"]').val()
     dueDate = formatDueDate(dueDate)
     if (dueDate != ""){
         $("#due-icon").hide()
         $(".dueDate-selected").show()
         let formatDate = moment(dueDate).format('ddd, hh:mm A')
         $("#dueDate-label").text(formatDate)
         $("input[name='dueDate-selected']").val(dueDate)
     }
 })

 $(".dueDate-selected").click(function(e){
     $(".rm-due").show()
 })

 $(".rm-due").click(function(){
     $("#due-icon").show();
     $(".dueDate-selected").hide();
     $("input[name='dueDate-selected']").val("")
     $("#dueDate-picker").val("")
     $(this).hide()
 })

 $(".due-nav-item-detail").click(function(e) {
    let dueDate = $(this).find('input[name="dueDate"]').val()
    dueDate = formatDueDate(dueDate)
    if (dueDate != ""){
        let formatDate = moment(dueDate).format('ddd, hh:mm A')
        $("#dueDate-label-detail").text(formatDate)
        $("input[name='dueDate-selected-detail']").val(dueDate)
    }
})
$(".due-date").click(function(e){
    if ($("input[name='dueDate-selected-detail']").val() != "") {
        $(".rm-due-detail").show()
    }
})

$(".rm-due-detail").click(function(){
    $("#dueDate-label-detail").text("Add due date")
    $("input[name='dueDate-selected-detail']").val("")
    $("#dueDate-picker-detail").val("")
    $(this).hide()
})

function formatDueDate(dueDate) {
    let date = moment()
    
    switch(dueDate) {
        case "today":
            dueDate = date.endOf('day').format("YYYY-MM-DD H:m")
            break;
        case "tomorrow":
            dueDate = date.add(1, 'days').endOf('day').format("YYYY-MM-DD H:m")
            break;
        case "next-week":
            dueDate = date.add(1, 'weeks').weekday(1).endOf('day').format("YYYY-MM-DD H:m")
            break;
        default:
    }
    return dueDate
}
 //reminder
 $(".reminder-nav-item").click(function(e) {
     let reminderDate = $(this).find('input[name="reminderDate"]').val()
     reminderDate = formatRemind(reminderDate)
     if (reminderDate != ""){
         $("#reminder-icon").hide()
         $(".reminder-selected").show()
         let formatDate = moment(reminderDate).format('ddd, hh:mm A')
         $("#reminder-label").text(formatDate)
         $("input[name='reminder-selected']").val(reminderDate)
     }
 })
 $(".reminder-selected").click(function(){
     $(".rm-reminder").show()
 })
 
 $(".rm-reminder").click(function(){
     $("#reminder-icon").show();
     $(".reminder-selected").hide();
     $("input[name='reminder-selected']").val("")
     $("#reminder-picker").val("")
     $(this).hide()
 })

 $(".reminder-nav-item-detail").click(function(e) {
    let reminderDate = $(this).find('input[name="reminderDate"]').val()
    reminderDate = formatRemind(reminderDate)
    if (reminderDate != ""){
        let formatDate = moment(reminderDate).format('ddd, hh:mm A')
        $("#reminder-label-detail").text(formatDate)
        $("input[name='reminder-selected-detail']").val(reminderDate)
    }
})
$(".reminder").click(function(){
    if ($("input[name='reminder-selected-detail']").val() != "") {
        $(".rm-reminder-detail").show()
    }
})

$(".rm-reminder-detail").click(function(){;
    $("#reminder-label-detail").text("Remind me")
    $("input[name='reminder-selected-detail']").val("")
    $("#reminder-picker-detail").val("")
    $(this).hide()
})

function formatRemind(reminderDate) {
    let date = moment()
    
    switch(reminderDate) {
        case "today":
            reminderDate = date.add(2, 'hours').format("YYYY-MM-DD H:m")
            break;
        case "tomorrow":
            reminderDate = date.add(1, 'days').format("YYYY-MM-DD H:m")
            break;
        case "next-week":
            reminderDate = date.add(1, 'weeks').weekday(1).format("YYYY-MM-DD H:m")
            break;
        default:
    }
    return reminderDate;
}

 //repeat
 $(".repeat-nav-item").click(function(e) {
     let repeatType = $(this).find('input[name="repeatType"]').val()
     let repeatTypeFormat = formatRepeat(repeatType)
     if (repeatType != ""){
         $("#repeat-icon").hide()
         $(".repeat-selected").show()
         $("#repeat-label").text(repeatTypeFormat)
         $("input[name='repeat-selected']").val(repeatType)
     }
 })
 $(".repeat-selected").click(function(){
     $(".rm-repeat").show()
 })
 
 $(".rm-repeat").click(function(){
     $("#repeat-icon").show();
     $(".repeat-selected").hide();
     $("input[name='repeat-selected']").val("0")
     $(this).hide()
 })

 $(".repeat-nav-item-detail").click(function(e) {
    let repeatType = $(this).find('input[name="repeatType"]').val()
    let repeatTypeFormat = formatRepeat(repeatType)
    if (repeatType != ""){
        $("#repeat-label-detail").text(repeatTypeFormat)
        $("input[name='repeat-selected-detail']").val(repeatType)
    }
})
function formatRepeat(repeatType) {
    let repeatTypeFormat = ''
    switch(repeatType) {
        case "1":
            repeatTypeFormat = "Daily"
            break;
        case "2":
            repeatTypeFormat = "Weekly"
            break;
        case "3":
            repeatTypeFormat = "Monthly"
            break;
        default:
    }
    return repeatTypeFormat
}
$(".repeat").click(function(){
    if ($("input[name='repeat-selected-detail']").val() != "0") {
        $(".rm-repeat-detail").show()
    }
})

$(".rm-repeat-detail").click(function(){
    $("input[name='repeat-selected-detail']").val("0")
    $("#repeat-label-detail").text("Repeat")
    $(this).hide()
})

 //datepicker
 $(".datepicker").change(function(e) {
     let id =  e.target.id
     let option = id.split('-')
     let formatDate = moment(e.target.value).format('ddd, hh:mm A')
     $(`#${option[0]}-label`).text(formatDate)
     $(`input[name='${option[0]}-selected']`).val(e.target.value)
 })
 $(".datepicker-detail").change(function(e) {
    let id =  e.target.id
    let option = id.split('-')
    let formatDate = moment(e.target.value).format('ddd, hh:mm A')
    $(`#${option[0]}-label-detail`).text(formatDate)
    $(`input[name='${option[0]}-selected-detail']`).val(e.target.value)
})

 // save todo
 function saveTodo()
 {
     let name = $("#todo_name").val()
     let url = $("#formAddTodo").attr('action')
     let dueDate      =  $("input[name='dueDate-selected']").val(),
         reminderTime =  $("input[name='reminder-selected']").val(),
         repeatType   =  $("input[name='repeat-selected']").val(),
         important    = $("input[name='newTask-important']").val()
     if (repeatType == "") repeatType = 0;
     $.ajax({
         type: 'POST',
         url: url,
         data: {
             'name': name,
             'due_date': dueDate,
             'remind': reminderTime,
             'repeat': repeatType,
             'important': important
         },
         success: function(response) {
             if (response.code == 201) {
                 $("#todoList").append(`
                     <div class="todoItem">
                         <div class="mark-done">
                             <input type="checkbox" name="mark-done" id="${'isDone'+response.newTodo['id']}" class="checkbox-round d-none doneTask" ${response.newTodo['status'] == 1 ? "checked" : ""}>
                             <label for="${'isDone'+response.newTodo['id']}" title="Mark as done"></label>
                         </div>
                         <div class="todo-content" data-url="http://localhost/todo/${response.newTodo['id']}">
                             <span class="todo-title">${response.newTodo['name']}</span>
                             <span class="text-secondary tag">Tasks</span>
                         </div>
                         <div class="mark-important">
                             <input type="checkbox" id="${'isImportant'+response.newTodo['id']}" ${response.newTodo['important'] == 1 ? "checked" : ""} class="markImportant"/>
                             <label for="${'isImportant'+response.newTodo['id']}" title="Mark as important"></label>
                         </div>
                     </div>
                 `)

                 //reset input
                 $("#todo_name").val("")
                 $(".taskCreation-value").val("")
                 $(".datepicker").val("")
                 $(".taskCreation-icon").show()
                 $(".taskCreation-selected").hide()
             } else {
                 alert(response.message)
             }
         }
     })
 }
 $(".baseAdd-button").click(function(e){
     e.preventDefault()
     saveTodo()
 })
 $("#formAddTodo").on('submit', function(e){
     e.preventDefault()
     saveTodo()
 })
 $(".todoList, .completeList").on('click', '.todo-content', function() {
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
 $(".todoList, .completeList").on('change', '.doneTask', function(e) {
    let status = $(this).prop('checked') ? 1 : 0,
        id     = e.target.id
    $.ajax({
        method: 'PUT',
        url: 'http://localhost/todo/update/' + id.replace('isDone', ''),
        data: {
          'status': status,
        },
        success:function() {
            $('#' + id).closest('.todoItem').fadeOut(300, () => {
                location.reload()
            })
        }
      })
 })
 $(".todoList, .completeList").on('change', '.markImportant', function(e) {
    let important = $(this).prop('checked') ? 1 : 0,
        id     = e.target.id.replace('isImportant', '')
    $.ajax({
        method: 'PUT',
        url: 'http://localhost/todo/update/' + id,
        data: {
          'important': important,
        },
        success:function() {
        //   location.reload();
        }
      })
 })
 $("#dropdownCompleted").click(function(e) {
    $("#completedList").toggle()
    $(".completeList").toggleClass('border-none')
    $(".btn-icon").toggleClass('btn-icon-down')
 })
 $(".icon-close").click(function(e) {
     $(".rightColumn").css('display', 'none')
 })