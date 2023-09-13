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

 //due-date
 $(".due-nav-item").click(function(e) {
     let dueDate = $(this).find('input[name="dueDate"]').val()
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
     if (dueDate != ""){
         $("#due-icon").hide()
         $(".dueDate-selected").show()
         let formateDate = moment(dueDate).format('ddd, hh:mm A')
         $("#dueDate-label").text(formateDate)
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

 //reminder
 $(".reminder-nav-item").click(function(e) {
     let reminderDate = $(this).find('input[name="reminderDate"]').val()
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

 //repeat
 $(".repeat-nav-item").click(function(e) {
     let repeatType = $(this).find('input[name="repeatType"]').val()
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

 //datepicker
 $(".datepicker").change(function(e) {
     let id =  e.target.id
     let option = id.split('-')
     let formatDate = moment(e.target.value).format('ddd, hh:mm A')
     $(`#${option[0]}-label`).text(formatDate)
     $(`input[name='${option[0]}-selected']`).val(e.target.value)
 })

 // save todo
 function saveTodo()
 {
     let name = $("#todo_name").val()
     let url = $("#formAddTodo").attr('action')
     let dueDate      =  $("input[name='dueDate-selected']").val(),
         reminderTime =  $("input[name='reminder-selected']").val(),
         repeatType   =  $("input[name='repeat-selected']").val()
     if (repeatType == "") repeatType = 0;
     $.ajax({
         type: 'POST',
         url: url,
         data: {
             'name': name,
             'due_date': dueDate,
             'remind': reminderTime,
             'repeat': repeatType
         },
         success: function(response) {
             if (response.code == 201) {
                 $("#todoList").append(`
                     <div class="todoItem">
                         <div class="mark-done">
                             <input type="checkbox" name="mark-done" id="${'isDone'+response.newTodo['id']}" class="checkbox-round d-none" ${response.newTodo['status'] == 1 ? "checked" : ""}>
                             <label for="${'isDone'+response.newTodo['id']}" title="Mark as done"></label>
                         </div>
                         <div class="todo-content">
                             <span class="todo-title">${response.newTodo['name']}</span>
                             <span class="text-secondary tag">Tasks</span>
                         </div>
                         <div class="mark-important">
                             <input type="checkbox" id="${'isImportant'+response.newTodo['id']}" ${response.newTodo['important'] == 1 ? "checked" : ""} />
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
 $(".todoItem").click(function(e) {
     $(".rightColumn").css('display', 'flex')
     let url = $(this).data('url')
     $.ajax({
        method: 'GET',
        url: url,
        success:function(res) {
            let todo = res.todo,
                steps = todo.steps
            $(".todo-title-detail").text(todo.name)
            $("#isDone-detail").prop("checked", todo.status == 1)
            $("#isImportant-detail").prop("checked", todo.important == 1)
            if ( steps.length > 0 ) {
                $(".steps").css('display', 'flex');
                let html = ``
                steps.map((step) => {
                    console.log(step.status)
                    html += `<div class="mark-done">
                            <input type="checkbox" name="mark-done" id="stepDone" class="checkbox-round d-none" ${step.status == 1 ? "checked" : ""}>
                            <label for="stepDone" title="Mark as done"></label>
                        </div>
                        <div class="steps-content">
                            <span class="step-title">Step 1</span>
                        </div>
                        <div class="rm-step">
                            <button>
                            <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                <path d="M2.59 2.72l.06-.07a.5.5 0 01.63-.06l.07.06L8 7.29l4.65-4.64a.5.5 0 01.7.7L8.71 8l4.64 4.65c.18.17.2.44.06.63l-.06.07a.5.5 0 01-.63.06l-.07-.06L8 8.71l-4.65 4.64a.5.5 0 01-.7-.7L7.29 8 2.65 3.35a.5.5 0 01-.06-.63l.06-.07-.06.07z" fill="currentColor"></path>
                            </svg>
                            </button>
                        </div>`
                })
                $(".steps").append(html)
            } else {
                $(".steps").css('display', 'none');
            }
        }
     })
 })
 $(".icon-close").click(function(e) {
     $(".rightColumn").css('display', 'none')
 })