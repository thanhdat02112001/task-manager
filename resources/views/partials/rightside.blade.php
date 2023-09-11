<div class="rightsight">
 <div class="details">
  <div class="details-body">
    <div class="details-header">
      <div class="mark-done">
        <input type="checkbox" name="mark-done" id="isDone" class="checkbox-round d-none">
        <label for="isDone" title="Mark as done"></label>
      </div>
      <div class="todo-content">
        <span class="todo-title">BAC</span>
      </div>
      <div class="mark-important">
          <input type="checkbox" id="isImportant" />
          <label for="isImportant" title="Mark as important"></label>
      </div>
    </div>
    <div class="steps">
      <div class="mark-done">
        <input type="checkbox" name="mark-done" id="stepDone" class="checkbox-round d-none">
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
      </div>
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
    <div class="details-options mt-4">
      <div class="due-date">
        <button>
          <div class="due-icon">
            <svg class="fluentIcon dateButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 11a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm4-5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h9a2.5 2.5 0 002.5-2.5v-9zM4 7h12v7.5c0 .83-.67 1.5-1.5 1.5h-9A1.5 1.5 0 014 14.5V7zm1.5-3h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4z" fill="currentColor"></path>
            </svg>
          </div>
          <span>Add due date</span>
        </button>
      </div>
      <div class="reminder">
        <button>
          <div class="due-icon">
            <svg class="fluentIcon reminderButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 2a5.92 5.92 0 015.98 5.36l.02.22V11.4l.92 2.22a1 1 0 01.06.17l.01.08.01.13a1 1 0 01-.75.97l-.11.02L16 15h-3.5v.17a2.5 2.5 0 01-5 0V15H4a1 1 0 01-.26-.03l-.13-.04a1 1 0 01-.6-1.05l.02-.13.05-.13L4 11.4V7.57A5.9 5.9 0 0110 2zm1.5 13h-3v.15a1.5 1.5 0 001.36 1.34l.14.01c.78 0 1.42-.6 1.5-1.36V15zM10 3a4.9 4.9 0 00-4.98 4.38L5 7.6V11.5l-.04.2L4 14h12l-.96-2.3-.04-.2V7.61A4.9 4.9 0 0010 3z" fill="currentColor"></path>
            </svg>
          </div>
          <span>Remind me</span>
        </button>
      </div>
      <div class="repeat">
        <button>
          <div class="due-icon">
            <svg class="fluentIcon recurringButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.5 6.67a.5.5 0 01.3.1l.08.07.01.02A5 5 0 0113.22 15L13 15H6.7l1.65 1.65c.18.17.2.44.06.63l-.06.07a.5.5 0 01-.63.06l-.07-.06-2.5-2.5a.5.5 0 01-.06-.63l.06-.07 2.5-2.5a.5.5 0 01.76.63l-.06.07L6.72 14h.14L7 14h6a4 4 0 003.11-6.52.5.5 0 01.39-.81zm-4.85-4.02a.5.5 0 01.63-.06l.07.06 2.5 2.5.06.07a.5.5 0 010 .56l-.06.07-2.5 2.5-.07.06a.5.5 0 01-.56 0l-.07-.06-.06-.07a.5.5 0 010-.56l.06-.07L13.28 6h-.14L13 6H7a4 4 0 00-3.1 6.52c.06.09.1.2.1.31a.5.5 0 01-.9.3A4.99 4.99 0 016.77 5h6.52l-1.65-1.65-.06-.07a.5.5 0 01.06-.63z" fill="currentColor"></path>
            </svg>
          </div>
          <span>Repeat</span>
        </button>
      </div>
    </div>  
  </div>
 </div>
</div>

