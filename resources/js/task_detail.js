//add step
$("#formAddStep").submit(function(e) {
  e.preventDefault();
  let step = $("#todo_step").val(),
  url = $(this).attr('action'),
  todo_id = $("input[name='todo-id']").val()
  $.ajax({
    method: 'POST',
    url: url, 
    data: {
      'id': todo_id,
      'content': step
    },
    success:function(response) {
      if (response.code == "201") {
        let newStep = response.newStep,
        html = `<div class="d-flex w-100 justify-content-around align-items-baseline mt-2">
        <div class="mark-done">
            <input type="checkbox" name="mark-done" id="${'stepDone' + newStep.id}" class="checkbox-round d-none" ${newStep.status == 1 ? "checked" : ""}>
            <label for="${'stepDone' + newStep.id}" title="Mark as done"></label>
        </div>
        <div class="steps-content">
            <span class="step-title">${newStep.content}</span>
        </div>
        <div class="rm-step" data-id="${newStep.id}">
            <button>
            <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" focusable="false">
                <path d="M2.59 2.72l.06-.07a.5.5 0 01.63-.06l.07.06L8 7.29l4.65-4.64a.5.5 0 01.7.7L8.71 8l4.64 4.65c.18.17.2.44.06.63l-.06.07a.5.5 0 01-.63.06l-.07-.06L8 8.71l-4.65 4.64a.5.5 0 01-.7-.7L7.29 8 2.65 3.35a.5.5 0 01-.06-.63l.06-.07-.06.07z" fill="currentColor"></path>
            </svg>
            </button>
        </div></div>`
        $(".steps").css('display', 'flex');
        $(".steps").append(html)
        $("#todo_step").val("")
      } else {
        alert(response.message)
      }

    }
  })
})

//rm step
$(".steps").on('click','.rm-step', function(){
  let step_id = $(this).data('id'),
      parent = $(this).parent()
  $.ajax({
    method:'DELETE',
    url: "http://localhost/step/delete/" + step_id,
    success:function(response) {
      if (response.code == "201") {
        parent.remove()
      } else {
        alert(response.message)
      }
    }
  })
})

//update task
$(".update-task").click(function(e) {
  let isDone      = $("#isDone-detail").prop('checked') ? 1 : 0,
      isImportant = $("#isImportant-detail").prop('checked') ? 1: 0,
      dueDate     = $("input[name='dueDate-selected-detail']").val(),
      remindDate  = $('input[name="reminder-selected-detail"]').val(),
      repeat      = $('input[name="repeat-selected-detail"]').val(),
      note        = $('#task-note').val(),
      id          = $("input[name='todo-id']").val()
  $.ajax({
    method: 'PUT',
    url: 'http://localhost/todo/update/' + id,
    data: {
      'status': isDone,
      'important': isImportant,
      'due_date': dueDate,
      'remind': remindDate,
      'repeat': repeat,
      'note': note
    },
    success:function() {
      location.reload();
    }
  })

})

//rm task
$(".icon-rm-task").click(function(){
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      let id = $("input[name='todo-id']").val()
      $.ajax({
        method: "DELETE",
        url: 'http://localhost/todo/delete/' + id,
        success:function() {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          ).then(() => {
            location.reload();
          })
        }
      })
    }
  })
})
