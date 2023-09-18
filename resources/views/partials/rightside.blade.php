<div class="rightside">
 <div class="details">
  <div class="details-body">
    <div class="details-header">
      <div class="mark-done">
        <input type="checkbox" name="mark-done" id="isDone-detail" class="checkbox-round d-none">
        <label for="isDone-detail" title="Mark as done"></label>
      </div>
      <div class="todo-content">
        <span class="todo-title-detail"></span>
      </div>
      <div class="mark-important">
          <input type="checkbox" id="isImportant-detail" />
          <label for="isImportant-detail" title="Mark as important"></label>
      </div>
    </div>
    <div class="steps">
    </div>
    <div class="add-step">
      <form action="" class="w-100" id="formAddStep">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text custom-input">
                <svg width="20" height="20" fill="none" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11.75 3a.75.75 0 0 1 .743.648l.007.102.001 7.25h7.253a.75.75 0 0 1 .102 1.493l-.102.007h-7.253l.002 7.25a.75.75 0 0 1-1.493.101l-.007-.102-.002-7.249H3.752a.75.75 0 0 1-.102-1.493L3.752 11h7.25L11 3.75a.75.75 0 0 1 .75-.75Z" fill="#2564cf"/></svg>
            </div>
            </div>
            <input type="text" class="custom-input mt-2 addStep" id="todo_step" placeholder="Next Step">
        </div>
      </form>
    </div>
    <div class="details-options mt-2">
      <div class="due-date py-2">
        <button class="dropdown-toogle" aria-haspopup="true" type="button" id="dropdownDueDate" data-bs-toggle="dropdown">
          <div class="due-icon">
            <svg class="fluentIcon dateButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 11a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm4-5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h9a2.5 2.5 0 002.5-2.5v-9zM4 7h12v7.5c0 .83-.67 1.5-1.5 1.5h-9A1.5 1.5 0 014 14.5V7zm1.5-3h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4z" fill="currentColor"></path>
            </svg>
          </div>
          <span id="dueDate-label-detail"></span>
          <input type="hidden" name="dueDate-selected-detail" class="taskCreation-value" value="">
        </button>
        <ul class="dropdown-menu custom-dropdown" aria-labelledby="dropdownDueDate">
          <li><span class="dropdown-item text-center mt-1"><strong>Due</strong></span></li>
          <li><hr class="dropdown-divider"></li>
          <div class="dropdown-choose">
              <table class="table table-borderless mb-0 bg-white">
                  <tr class="cus-nav-item due-nav-item-detail">
                      <input type="hidden" value="today" name="dueDate">
                      <td>
                          <div class="due-icon">
                              <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M14.5 3A2.5 2.5 0 0117 5.5v9a2.5 2.5 0 01-2.5 2.5h-3v-1h3c.83 0 1.5-.67 1.5-1.5V7H4v7.5c0 .83.67 1.5 1.5 1.5h3v1h-3A2.5 2.5 0 013 14.5v-9A2.5 2.5 0 015.5 3h9zm0 1h-9C4.67 4 4 4.67 4 5.5V6h12v-.5c0-.83-.67-1.5-1.5-1.5zM11 9a1 1 0 11-2 0 1 1 0 012 0zm.88 5.07a.5.5 0 01-.7.06l-.68-.56v3.93a.5.5 0 11-1 0v-3.93l-.68.56a.5.5 0 01-.64-.76l1.5-1.25a.5.5 0 01.64 0l1.5 1.25c.21.17.24.49.06.7z" fill="currentColor"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Today</span>
                      </td>
                      <td class="text-end text-secondary">
                          <span class="today-lb"></span>
                      </td>
                  </tr>
                  <tr class="cus-nav-item due-nav-item-detail">
                      <input type="hidden" value="tomorrow" name="dueDate">
                      <td>
                          <div class="due-icon">
                              <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M17 5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h4.1c-.16-.32-.3-.65-.4-1H5.5A1.5 1.5 0 014 14.5V7h12v2.2c.35.1.68.24 1 .4V5.5zM5.5 4h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4zM19 14.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm-2.15.35a.5.5 0 00.15-.35.5.5 0 00-.15-.35l-2-2a.5.5 0 00-.7.7L15.29 14H12.5a.5.5 0 000 1h2.8l-1.15 1.15a.5.5 0 00.7.7l2-2z" fill="currentColor"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Tomorrow</span>
                      </td>
                      <td class="text-end text-secondary">
                          <span class="tomorrow-lb"></span>
                      </td>
                  </tr>
                  <tr class="cus-nav-item due-nav-item-detail">
                      <input type="hidden" value="next-week" name="dueDate">
                      <td>
                          <div class="due-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 3C15.8807 3 17 4.11929 17 5.5V9.59971C16.6832 9.43777 16.3486 9.30564 16 9.20703V7H4V14.5C4 15.3284 4.67157 16 5.5 16H9.20703C9.30564 16.3486 9.43777 16.6832 9.59971 17H5.5C4.11929 17 3 15.8807 3 14.5V5.5C3 4.11929 4.11929 3 5.5 3H14.5ZM14.5 4H5.5C4.67157 4 4 4.67157 4 5.5V6H16V5.5C16 4.67157 15.3284 4 14.5 4Z" fill="#212121"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M19 14.5C19 16.9853 16.9853 19 14.5 19C12.0147 19 10 16.9853 10 14.5C10 12.0147 12.0147 10 14.5 10C16.9853 10 19 12.0147 19 14.5ZM17.4497 14.8713L15.682 16.6391C15.4867 16.8343 15.1701 16.8343 14.9749 16.6391C14.7796 16.4438 14.7796 16.1272 14.9749 15.932L16.3891 14.5178L14.9749 13.1036C14.7796 12.9083 14.7796 12.5917 14.9749 12.3964C15.1701 12.2012 15.4867 12.2012 15.682 12.3964L17.4497 14.1642C17.645 14.3595 17.645 14.6761 17.4497 14.8713ZM12.1464 12.3964C11.9512 12.5917 11.9512 12.9083 12.1464 13.1036L13.5607 14.5178L12.1464 15.932C11.9512 16.1272 11.9512 16.4438 12.1464 16.6391C12.3417 16.8343 12.6583 16.8343 12.8536 16.6391L14.6213 14.8713C14.8166 14.6761 14.8166 14.3595 14.6213 14.1642L12.8536 12.3964C12.6583 12.2012 12.3417 12.2012 12.1464 12.3964Z" fill="#212121"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Next week</span>
                      </td>
                      <td class="text-end text-secondary">
                          <span>Mon</span>
                      </td>
                  </tr>
                  <tr class="border-top cus-nav-item due-nav-item-detail">
                      <td>
                          <div class="due-icon">
                              <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M17 5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h4.1c-.16-.32-.3-.65-.4-1H5.5A1.5 1.5 0 014 14.5V7h12v2.2c.35.1.68.24 1 .4V5.5zM5.5 4h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4zm9 15a4.5 4.5 0 100-9 4.5 4.5 0 000 9zm-.5-6.5a.5.5 0 011 0V14h1a.5.5 0 010 1h-1.5a.5.5 0 01-.5-.5v-2z" fill="currentColor"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>
                              <input type="datetime" value="" class="datepicker-detail" id="dueDate-picker" placeholder="Pick a date">
                          </span>
                      </td>
                      <td></td>
                  </tr>
                  <tr class="border-top cus-nav-item rm-due-detail" style="display: none">
                      <td>
                          <div class="due-icon">
                              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M21.5 6a1 1 0 0 1-.883.993L20.5 7h-.845l-1.231 12.52A2.75 2.75 0 0 1 15.687 22H8.313a2.75 2.75 0 0 1-2.737-2.48L4.345 7H3.5a1 1 0 0 1 0-2h5a3.5 3.5 0 1 1 7 0h5a1 1 0 0 1 1 1Zm-7.25 3.25a.75.75 0 0 0-.743.648L13.5 10v7l.007.102a.75.75 0 0 0 1.486 0L15 17v-7l-.007-.102a.75.75 0 0 0-.743-.648Zm-4.5 0a.75.75 0 0 0-.743.648L9 10v7l.007.102a.75.75 0 0 0 1.486 0L10.5 17v-7l-.007-.102a.75.75 0 0 0-.743-.648ZM12 3.5A1.5 1.5 0 0 0 10.5 5h3A1.5 1.5 0 0 0 12 3.5Z" fill="#E84B3C"/>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span class="text-danger">Remove due date</span>
                      </td>
                      <td></td>
                  </tr>
              </table>

          </div>    
        </ul>
      </div>
      <div class="reminder py-2">
        <button class="dropdown-toogle" aria-haspopup="true" aria-haspopup="true" type="button" id="dropdownReminder" data-bs-toggle="dropdown">
          <div class="due-icon">
            <svg class="fluentIcon reminderButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 2a5.92 5.92 0 015.98 5.36l.02.22V11.4l.92 2.22a1 1 0 01.06.17l.01.08.01.13a1 1 0 01-.75.97l-.11.02L16 15h-3.5v.17a2.5 2.5 0 01-5 0V15H4a1 1 0 01-.26-.03l-.13-.04a1 1 0 01-.6-1.05l.02-.13.05-.13L4 11.4V7.57A5.9 5.9 0 0110 2zm1.5 13h-3v.15a1.5 1.5 0 001.36 1.34l.14.01c.78 0 1.42-.6 1.5-1.36V15zM10 3a4.9 4.9 0 00-4.98 4.38L5 7.6V11.5l-.04.2L4 14h12l-.96-2.3-.04-.2V7.61A4.9 4.9 0 0010 3z" fill="currentColor"></path>
            </svg>
          </div>
          <span id="reminder-label-detail"></span>
          <input type="hidden" name="reminder-selected-detail" class="taskCreation-value" value="">
        </button>
        <ul class="dropdown-menu custom-dropdown" aria-labelledby="dropdownReminder">
          <li><span class="dropdown-item text-center mt-1"><strong>Reminder</strong></span></li>
          <li><hr class="dropdown-divider"></li>
          <div class="dropdown-choose">
              <table class="table table-borderless mb-0 bg-white">
                  <tr class="cus-nav-item reminder-nav-item">
                      <input type="hidden" name="reminderDate" value="today">
                      <td>
                          <div class="due-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M17 10C17 13.7296 14.0832 16.778 10.4062 16.9884C10.2229 17.349 10.0011 17.6867 9.7461 17.996C9.83041 17.9987 9.91505 18 10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 10.0849 2.00132 10.1696 2.00395 10.2539C2.3133 9.99891 2.65099 9.77706 3.01159 9.5938C3.22197 5.91685 6.27035 3 10 3C13.866 3 17 6.13401 17 10Z" fill="black"></path><path d="M9.5 5C9.22386 5 9 5.22386 9 5.5V10.5C9 10.7761 9.22386 11 9.5 11H12.5C12.7761 11 13 10.7761 13 10.5C13 10.2239 12.7761 10 12.5 10H10V5.5C10 5.22386 9.77614 5 9.5 5Z" fill="black"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 19C7.98528 19 10 16.9853 10 14.5C10 12.0147 7.98528 10 5.5 10C3.01472 10 1 12.0147 1 14.5C1 16.9853 3.01472 19 5.5 19ZM3.14645 14.8536L5.14605 16.8532L5.14857 16.8557C5.19602 16.9026 5.25051 16.938 5.30861 16.9621C5.36669 16.9861 5.4303 16.9996 5.497 17L5.5 17L5.503 17C5.5697 16.9996 5.63331 16.9861 5.69139 16.9621C5.75036 16.9377 5.80561 16.9015 5.85355 16.8536L7.85355 14.8536C8.04882 14.6583 8.04882 14.3417 7.85355 14.1464C7.65829 13.9512 7.34171 13.9512 7.14645 14.1464L6 15.2929V12.5C6 12.2239 5.77614 12 5.5 12C5.22386 12 5 12.2239 5 12.5V15.2929L3.85355 14.1464C3.65829 13.9512 3.34171 13.9512 3.14645 14.1464C2.95118 14.3417 2.95118 14.6583 3.14645 14.8536Z" fill="black"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Later today</span>
                      </td>
                      <td class="text-end text-secondary">
                          <span id="reminder-today-lb"></span>
                      </td>
                  </tr>
                  <tr class="cus-nav-item reminder-nav-item">
                      <input type="hidden" name="reminderDate" value="tomorrow">
                      <td>
                          <div class="due-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M17 10C17 13.7296 14.0832 16.778 10.4062 16.9884C10.2229 17.349 10.0011 17.6867 9.7461 17.996C9.83041 17.9987 9.91505 18 10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 10.0849 2.00132 10.1696 2.00395 10.2539C2.3133 9.99891 2.65099 9.77706 3.01159 9.5938C3.22197 5.91685 6.27035 3 10 3C13.866 3 17 6.13401 17 10Z" fill="black"></path><path d="M9.5 5C9.22386 5 9 5.22386 9 5.5V10.5C9 10.7761 9.22386 11 9.5 11H12.5C12.7761 11 13 10.7761 13 10.5C13 10.2239 12.7761 10 12.5 10H10V5.5C10 5.22386 9.77614 5 9.5 5Z" fill="black"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10 14.5C10 12.0147 7.98528 10 5.5 10C3.01472 10 1 12.0147 1 14.5C1 16.9853 3.01472 19 5.5 19C7.98528 19 10 16.9853 10 14.5ZM5.85355 16.8536L7.85316 14.854L7.85567 14.8514C7.90256 14.804 7.93802 14.7495 7.96206 14.6914C7.98615 14.6333 7.9996 14.5697 7.99999 14.503L8 14.5L7.99999 14.497C7.9996 14.4303 7.98615 14.3667 7.96206 14.3086C7.93766 14.2496 7.90149 14.1944 7.85355 14.1464L5.85355 12.1464C5.65829 11.9512 5.34171 11.9512 5.14645 12.1464C4.95118 12.3417 4.95118 12.6583 5.14645 12.8536L6.29289 14H3.5C3.22386 14 3 14.2239 3 14.5C3 14.7761 3.22386 15 3.5 15H6.29289L5.14645 16.1464C4.95118 16.3417 4.95118 16.6583 5.14645 16.8536C5.34171 17.0488 5.65829 17.0488 5.85355 16.8536Z" fill="black"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Tomorrow</span>
                      </td>
                      <td class="text-end text-secondary">
                          <span id="reminder-tomorrow-lb"></span>
                      </td>
                  </tr>
                  <tr class="cus-nav-item reminder-nav-item">
                      <input type="hidden" name="reminderDate" value="next-week">
                      <td>
                          <div class="due-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M17 10C17 13.7296 14.0832 16.778 10.4062 16.9884C10.2229 17.349 10.0011 17.6867 9.7461 17.996C9.83041 17.9987 9.91505 18 10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 10.0849 2.00132 10.1696 2.00395 10.2539C2.3133 9.99891 2.65099 9.77706 3.01159 9.5938C3.22197 5.91685 6.27035 3 10 3C13.866 3 17 6.13401 17 10Z" fill="black"></path><path d="M9.5 5C9.22386 5 9 5.22386 9 5.5V10.5C9 10.7761 9.22386 11 9.5 11H12.5C12.7761 11 13 10.7761 13 10.5C13 10.2239 12.7761 10 12.5 10H10V5.5C10 5.22386 9.77614 5 9.5 5Z" fill="black"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 19C7.98528 19 10 16.9853 10 14.5C10 12.0147 7.98528 10 5.5 10C3.01472 10 1 12.0147 1 14.5C1 16.9853 3.01472 19 5.5 19ZM6.68198 16.6391L8.44975 14.8713C8.64501 14.6761 8.64501 14.3595 8.44975 14.1642L6.68198 12.3964C6.48672 12.2012 6.17014 12.2012 5.97487 12.3964C5.77961 12.5917 5.77961 12.9083 5.97487 13.1036L7.38909 14.5178L5.97487 15.932C5.77961 16.1272 5.77961 16.4438 5.97487 16.6391C6.17014 16.8343 6.48672 16.8343 6.68198 16.6391ZM4.56066 14.5178L3.14645 13.1036C2.95118 12.9083 2.95118 12.5917 3.14645 12.3964C3.34171 12.2012 3.65829 12.2012 3.85355 12.3964L5.62132 14.1642C5.81658 14.3595 5.81658 14.6761 5.62132 14.8713L3.85355 16.6391C3.65829 16.8343 3.34171 16.8343 3.14645 16.6391C2.95118 16.4438 2.95118 16.1272 3.14645 15.932L4.56066 14.5178Z" fill="black"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Next week</span>
                      </td>
                      <td class="text-end text-secondary">
                          <span id="reminder-nextweek-lb"></span>
                      </td>
                  </tr>
                  <tr class="border-top cus-nav-item reminder-nav-item">
                      <td>
                          <div class="due-icon">
                              <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M17 5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h4.1c-.16-.32-.3-.65-.4-1H5.5A1.5 1.5 0 014 14.5V7h12v2.2c.35.1.68.24 1 .4V5.5zM5.5 4h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4zm9 15a4.5 4.5 0 100-9 4.5 4.5 0 000 9zm-.5-6.5a.5.5 0 011 0V14h1a.5.5 0 010 1h-1.5a.5.5 0 01-.5-.5v-2z" fill="currentColor"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span><input type="datetime" value="" class="datepicker-detail" id="reminder-picker" placeholder="Pick a date & time"></span>
                      </td>
                      <td></td>
                  </tr>
                  <tr class="border-top cus-nav-item rm-reminder" style="display: none">
                      <td>
                          <div class="due-icon">
                              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M21.5 6a1 1 0 0 1-.883.993L20.5 7h-.845l-1.231 12.52A2.75 2.75 0 0 1 15.687 22H8.313a2.75 2.75 0 0 1-2.737-2.48L4.345 7H3.5a1 1 0 0 1 0-2h5a3.5 3.5 0 1 1 7 0h5a1 1 0 0 1 1 1Zm-7.25 3.25a.75.75 0 0 0-.743.648L13.5 10v7l.007.102a.75.75 0 0 0 1.486 0L15 17v-7l-.007-.102a.75.75 0 0 0-.743-.648Zm-4.5 0a.75.75 0 0 0-.743.648L9 10v7l.007.102a.75.75 0 0 0 1.486 0L10.5 17v-7l-.007-.102a.75.75 0 0 0-.743-.648ZM12 3.5A1.5 1.5 0 0 0 10.5 5h3A1.5 1.5 0 0 0 12 3.5Z" fill="#E84B3C"/>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span class="text-danger">Remove reminder</span>
                      </td>
                      <td></td>
                  </tr>
              </table>
          </div>    
        </ul>
      </div>
      <div class="repeat py-2">
        <button aria-haspopup="true" aria-haspopup="true" aria-haspopup="true" type="button" id="dropdownRepeat" data-bs-toggle="dropdown">
          <div class="due-icon">
            <svg class="fluentIcon recurringButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.5 6.67a.5.5 0 01.3.1l.08.07.01.02A5 5 0 0113.22 15L13 15H6.7l1.65 1.65c.18.17.2.44.06.63l-.06.07a.5.5 0 01-.63.06l-.07-.06-2.5-2.5a.5.5 0 01-.06-.63l.06-.07 2.5-2.5a.5.5 0 01.76.63l-.06.07L6.72 14h.14L7 14h6a4 4 0 003.11-6.52.5.5 0 01.39-.81zm-4.85-4.02a.5.5 0 01.63-.06l.07.06 2.5 2.5.06.07a.5.5 0 010 .56l-.06.07-2.5 2.5-.07.06a.5.5 0 01-.56 0l-.07-.06-.06-.07a.5.5 0 010-.56l.06-.07L13.28 6h-.14L13 6H7a4 4 0 00-3.1 6.52c.06.09.1.2.1.31a.5.5 0 01-.9.3A4.99 4.99 0 016.77 5h6.52l-1.65-1.65-.06-.07a.5.5 0 01.06-.63z" fill="currentColor"></path>
            </svg>
          </div>
          <span id="repeat-label-detail"></span>
          <input type="hidden" name="repeat-selected-detail" class="taskCreation-value" value="0">
        </button>
        <ul class="dropdown-menu custom-dropdown" aria-labelledby="dropdownRepeat">
          <li><span class="dropdown-item text-center mt-1"><strong>Repeat</strong></span></li>
          <li><hr class="dropdown-divider"></li>
          <div class="dropdown-choose">
              <table class="table table-borderless mb-0 bg-white">
                  <tr class="cus-nav-item repeat-nav-item">
                      <input type="hidden" name="repeatType" value="1">
                      <td>
                          <div class="due-icon">
                              <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M14.5 3A2.5 2.5 0 0117 5.5v9a2.5 2.5 0 01-2.5 2.5h-9A2.5 2.5 0 013 14.5v-9A2.5 2.5 0 015.5 3h9zm0 1h-9C4.67 4 4 4.67 4 5.5v9c0 .83.67 1.5 1.5 1.5h9c.83 0 1.5-.67 1.5-1.5v-9c0-.83-.67-1.5-1.5-1.5zm-1.78 5c.44 0 .6.05.77.13.16.1.29.22.38.38.08.16.13.33.13.77v2.44c0 .44-.05.6-.13.77a.9.9 0 01-.38.38c-.16.08-.33.13-.77.13H7.28c-.44 0-.6-.05-.77-.13a.9.9 0 01-.38-.38c-.08-.16-.13-.33-.13-.77v-2.44c0-.44.05-.6.13-.77a.9.9 0 01.38-.38c.16-.08.33-.13.77-.13h5.44zm.2 1H7V13h5.98v-2.98h-.08zm.58-4a.5.5 0 01.09 1H6.5a.5.5 0 01-.09-1h7.09z" fill="currentColor"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Daily</span>
                      </td>
                      <td></td>
                  </tr>
                  <tr class="cus-nav-item repeat-nav-item">
                      <input type="hidden" name="repeatType" value="2">
                      <td>
                          <div class="due-icon">
                              <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M14.5 3A2.5 2.5 0 0117 5.5v9a2.5 2.5 0 01-2.5 2.5h-9A2.5 2.5 0 013 14.5v-9A2.5 2.5 0 015.5 3h9zm0 1h-9C4.67 4 4 4.67 4 5.5v9c0 .83.67 1.5 1.5 1.5h9c.83 0 1.5-.67 1.5-1.5v-9c0-.83-.67-1.5-1.5-1.5zm-8 2a.5.5 0 01.5.41v7.09a.5.5 0 01-1 .09V6.5c0-.28.22-.5.5-.5zM10 6a.5.5 0 01.5.41v7.09a.5.5 0 01-1 .09V6.5c0-.28.22-.5.5-.5zm3.5 0a.5.5 0 01.5.41v7.09a.5.5 0 01-1 .09V6.5c0-.28.22-.5.5-.5z" fill="currentColor"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Weekly</span>
                      </td>
                      <td></td>
                  </tr>
                  <tr class="cus-nav-item repeat-nav-item">
                      <input type="hidden" name="repeatType" value="3">
                      <td>
                          <div class="due-icon">
                              <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                  <path d="M7 11a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm4-5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h9a2.5 2.5 0 002.5-2.5v-9zM4 7h12v7.5c0 .83-.67 1.5-1.5 1.5h-9A1.5 1.5 0 014 14.5V7zm1.5-3h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4z" fill="currentColor"></path>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span>Monthly</span>
                      </td>
                      <td></td>
                  </tr>
                  <tr class="border-top cus-nav-item rm-repeat" style="display: none">
                      <td>
                          <div class="due-icon">
                              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M21.5 6a1 1 0 0 1-.883.993L20.5 7h-.845l-1.231 12.52A2.75 2.75 0 0 1 15.687 22H8.313a2.75 2.75 0 0 1-2.737-2.48L4.345 7H3.5a1 1 0 0 1 0-2h5a3.5 3.5 0 1 1 7 0h5a1 1 0 0 1 1 1Zm-7.25 3.25a.75.75 0 0 0-.743.648L13.5 10v7l.007.102a.75.75 0 0 0 1.486 0L15 17v-7l-.007-.102a.75.75 0 0 0-.743-.648Zm-4.5 0a.75.75 0 0 0-.743.648L9 10v7l.007.102a.75.75 0 0 0 1.486 0L10.5 17v-7l-.007-.102a.75.75 0 0 0-.743-.648ZM12 3.5A1.5 1.5 0 0 0 10.5 5h3A1.5 1.5 0 0 0 12 3.5Z" fill="#E84B3C"/>
                              </svg>
                          </div>
                      </td>
                      <td>
                          <span class="text-danger">Remove repeat</span>
                      </td>
                      <td></td>
                  </tr>
              </table>

          </div>    
        </ul>
      </div>
    </div>
    <div class="add-category mt-2">
      <button>
        <div class="due-icon">
          <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 7a1 1 0 100-2 1 1 0 000 2zm-2.87-5a2 2 0 00-1.43.58L3.02 9.25a2 2 0 000 2.83l4.95 4.95a2 2 0 002.83 0l6.63-6.63A2 2 0 0018 8.98V4.03a2 2 0 00-1.99-2L11.12 2zm-.72 1.3a1 1 0 01.71-.3l4.9.03a1 1 0 01.99 1v4.95a1 1 0 01-.29.7l-6.63 6.64a1 1 0 01-1.41 0l-4.95-4.95a1 1 0 010-1.41l6.68-6.67z" fill="currentColor"></path>
          </svg>
        </div>
        <span>Pick a category</span>
      </button>
    </div>
    <div class="add-description mt-2 px-4 pt-4">
        <textarea name="" id="" rows="5" placeholder="Add note"></textarea>  
    </div>  
  </div>
  <div class="detail-footer">
    <div class="icon-close">
      <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.18 10.5l-1 .87a.5.5 0 10.66.76l2-1.75a.5.5 0 000-.76l-2-1.75a.5.5 0 10-.66.76l1 .87H5.5a.5.5 0 000 1h3.68zM16 16a2 2 0 002-2V6a2 2 0 00-2-2H4a2 2 0 00-2 2v8c0 1.1.9 2 2 2h12zm1-2a1 1 0 01-1 1h-3V5h3a1 1 0 011 1v8zm-5-9v10H4a1 1 0 01-1-1V6a1 1 0 011-1h8z" fill="currentColor"></path>
      </svg>
    </div>
    <span>Create on Thu, September 7</span>
    <div class="icon-rm-task">
      <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.5 4h3a1.5 1.5 0 00-3 0zm-1 0a2.5 2.5 0 015 0h5a.5.5 0 010 1h-1.05l-1.2 10.34A3 3 0 0112.27 18H7.73a3 3 0 01-2.98-2.66L3.55 5H2.5a.5.5 0 010-1h5zM5.74 15.23A2 2 0 007.73 17h4.54a2 2 0 001.99-1.77L15.44 5H4.56l1.18 10.23zM8.5 7.5c.28 0 .5.22.5.5v6a.5.5 0 01-1 0V8c0-.28.22-.5.5-.5zM12 8a.5.5 0 00-1 0v6a.5.5 0 001 0V8z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
 </div>
</div>

