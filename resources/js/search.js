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
      console.log(results.length)
      if (results.length > 0) {
        results.map((task) => {
          html += `<div class="todoItem">
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