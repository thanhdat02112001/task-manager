@extends('layouts.master')
@section('content')
<div class="myday-wrapper">
    <div class="task-top">
        <div class="headline">
            <div class="head-title">
                <div aria-hidden="true" class="me-2">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.996 19.01a.75.75 0 0 1 .743.649l.007.102v1.5a.75.75 0 0 1-1.493.101l-.007-.101v-1.5a.75.75 0 0 1 .75-.75Zm6.022-2.072 1.06 1.06a.75.75 0 1 1-1.06 1.061l-1.06-1.06a.75.75 0 0 1 1.06-1.061Zm-10.983 0a.75.75 0 0 1 0 1.06L5.974 19.06a.75.75 0 0 1-1.06-1.06l1.06-1.061a.75.75 0 0 1 1.06 0ZM12 6.475a5.525 5.525 0 1 1 0 11.05 5.525 5.525 0 0 1 0-11.05Zm0 1.5a4.025 4.025 0 1 0 0 8.05 4.025 4.025 0 0 0 0-8.05Zm9.25 3.293a.75.75 0 0 1 .102 1.493l-.102.007h-1.5a.75.75 0 0 1-.102-1.493l.102-.007h1.5Zm-17-.029a.75.75 0 0 1 .102 1.494l-.102.006h-1.5a.75.75 0 0 1-.102-1.493l.102-.007h1.5Zm1.64-6.37.084.072 1.06 1.06a.75.75 0 0 1-.976 1.134l-.084-.073-1.06-1.06a.75.75 0 0 1 .976-1.134Zm13.188.072a.75.75 0 0 1 .073.977l-.073.084-1.06 1.06a.75.75 0 0 1-1.133-.976l.072-.084 1.06-1.061a.75.75 0 0 1 1.061 0ZM12 1.99a.75.75 0 0 1 .743.648l.007.102v1.5a.75.75 0 0 1-1.493.101l-.007-.102v-1.5a.75.75 0 0 1 .75-.75Z" fill="#222F3D"/></svg>
                </div>
                <div class="todayToolbar-title mt-1 me-2">
                    <span>My Day</span>
                </div>
                <div class="print" aria-hidden="true">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.752 3a2.25 2.25 0 0 1 2.25 2.25v.753h.75a3.254 3.254 0 0 1 3.252 3.25l.003 5.997a2.249 2.249 0 0 1-2.248 2.25H18v1.25A2.25 2.25 0 0 1 15.75 21h-7.5A2.25 2.25 0 0 1 6 18.75V17.5H4.25A2.25 2.25 0 0 1 2 15.25V9.254a3.25 3.25 0 0 1 3.25-3.25l.749-.001L6 5.25A2.25 2.25 0 0 1 8.25 3h7.502Zm-.002 10.5h-7.5a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h7.5a.75.75 0 0 0 .75-.75v-4.5a.75.75 0 0 0-.75-.75Zm3.002-5.996H5.25a1.75 1.75 0 0 0-1.75 1.75v5.996c0 .414.336.75.75.75H6v-1.75A2.25 2.25 0 0 1 8.25 12h7.5A2.25 2.25 0 0 1 18 14.25V16h1.783a.749.749 0 0 0 .724-.749l-.003-5.997a1.754 1.754 0 0 0-1.752-1.75Zm-3-3.004H8.25a.75.75 0 0 0-.75.75l-.001.753h9.003V5.25a.75.75 0 0 0-.75-.75Z" fill="#222F3D"/></svg>
                </div>
            </div>
            <div class="head-action">
                <button class="toolbar-action">
                    <div class="button-icon">
                        <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.35 7.35L5 4.71V16.5a.5.5 0 001 0V4.7l2.65 2.65a.5.5 0 00.7-.7l-3.49-3.5A.5.5 0 005.5 3a.5.5 0 00-.39.18L1.65 6.65a.5.5 0 10.7.7zm15.3 5.3L15 15.29V3.5a.5.5 0 00-1 0v11.8l-2.65-2.65a.5.5 0 00-.7.7l3.49 3.5a.5.5 0 00.36.15.5.5 0 00.39-.18l3.46-3.47a.5.5 0 10-.7-.7z" fill="currentColor"></path></svg>
                    </div>
                    <span>Sort</span>
                </button>
                <button class="toolbar-action">
                    <div class="button-icon">
                        <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M14.5 3A2.5 2.5 0 0117 5.5v9a2.5 2.5 0 01-2.5 2.5h-9A2.5 2.5 0 013 14.5v-9A2.5 2.5 0 015.5 3h9zm0 1h-9C4.67 4 4 4.67 4 5.5v9c0 .83.67 1.5 1.5 1.5h9c.83 0 1.5-.67 1.5-1.5v-9c0-.83-.67-1.5-1.5-1.5zm-8 2a.5.5 0 01.5.41v7.09a.5.5 0 01-1 .09V6.5c0-.28.22-.5.5-.5z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <span>Group</span>
                </button>
            </div>
        </div>
        <div class="subline">
            <span>Saturday, September 2</span>
        </div>
    </div>
    <div class="main">
        <div class="addTask">
            <form action="{{route('todo.save')}}" class="w-100" id="formAddTodo">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text custom-input">
                        <svg width="20" height="20" fill="none" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11.75 3a.75.75 0 0 1 .743.648l.007.102.001 7.25h7.253a.75.75 0 0 1 .102 1.493l-.102.007h-7.253l.002 7.25a.75.75 0 0 1-1.493.101l-.007-.102-.002-7.249H3.752a.75.75 0 0 1-.102-1.493L3.752 11h7.25L11 3.75a.75.75 0 0 1 .75-.75Z" fill="#2564cf"/></svg>
                    </div>
                    </div>
                    <input type="text" class="custom-input mt-2 addInput" id="todo_name" placeholder="Add a task" aria-label="Input group example">
                </div>
            </form>
        </div>
        <div class="taskDetail rich-entry baseAdd addTask">
            <div class="taskCreation-entrybar">
                <div class="dateButton-container">
                    <button class="dateButton dropdown-toogle" aria-haspopup="true" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                        <div class="ms-TooltipHost root-42">
                            <div class="taskCreation-labelcontainer">
                                <div class="taskCreation-icon">
                                    <svg class="fluentIcon dateButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 11a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm1 2a1 1 0 11-2 0 1 1 0 012 0zm2-2a1 1 0 100-2 1 1 0 000 2zm4-5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h9a2.5 2.5 0 002.5-2.5v-9zM4 7h12v7.5c0 .83-.67 1.5-1.5 1.5h-9A1.5 1.5 0 014 14.5V7zm1.5-3h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </button>
                    <ul class="dropdown-menu custom-dropdown" aria-labelledby="dropdownMenuButton1">
                        <li><span class="dropdown-item text-center"><strong>Due</strong></span></li>
                        <li><hr class="dropdown-divider"></li>
                        <div class="dropdown-choose">
                            <li>
                                <div class="d-flex justify-content-between">
                                    <div class="due-icon">
                                        <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                            <path d="M14.5 3A2.5 2.5 0 0117 5.5v9a2.5 2.5 0 01-2.5 2.5h-3v-1h3c.83 0 1.5-.67 1.5-1.5V7H4v7.5c0 .83.67 1.5 1.5 1.5h3v1h-3A2.5 2.5 0 013 14.5v-9A2.5 2.5 0 015.5 3h9zm0 1h-9C4.67 4 4 4.67 4 5.5V6h12v-.5c0-.83-.67-1.5-1.5-1.5zM11 9a1 1 0 11-2 0 1 1 0 012 0zm.88 5.07a.5.5 0 01-.7.06l-.68-.56v3.93a.5.5 0 11-1 0v-3.93l-.68.56a.5.5 0 01-.64-.76l1.5-1.25a.5.5 0 01.64 0l1.5 1.25c.21.17.24.49.06.7z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span>Today</span>
                                    </div>
                                    <div>
                                        <span>Wed</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <div class="due-icon">
                                        <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                            <path d="M17 5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h4.1c-.16-.32-.3-.65-.4-1H5.5A1.5 1.5 0 014 14.5V7h12v2.2c.35.1.68.24 1 .4V5.5zM5.5 4h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4zM19 14.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm-2.15.35a.5.5 0 00.15-.35.5.5 0 00-.15-.35l-2-2a.5.5 0 00-.7.7L15.29 14H12.5a.5.5 0 000 1h2.8l-1.15 1.15a.5.5 0 00.7.7l2-2z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span>Tomorrow</span>
                                    </div>
                                    <div>
                                        <span>Thu</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <div class="due-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 3C15.8807 3 17 4.11929 17 5.5V9.59971C16.6832 9.43777 16.3486 9.30564 16 9.20703V7H4V14.5C4 15.3284 4.67157 16 5.5 16H9.20703C9.30564 16.3486 9.43777 16.6832 9.59971 17H5.5C4.11929 17 3 15.8807 3 14.5V5.5C3 4.11929 4.11929 3 5.5 3H14.5ZM14.5 4H5.5C4.67157 4 4 4.67157 4 5.5V6H16V5.5C16 4.67157 15.3284 4 14.5 4Z" fill="#212121"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M19 14.5C19 16.9853 16.9853 19 14.5 19C12.0147 19 10 16.9853 10 14.5C10 12.0147 12.0147 10 14.5 10C16.9853 10 19 12.0147 19 14.5ZM17.4497 14.8713L15.682 16.6391C15.4867 16.8343 15.1701 16.8343 14.9749 16.6391C14.7796 16.4438 14.7796 16.1272 14.9749 15.932L16.3891 14.5178L14.9749 13.1036C14.7796 12.9083 14.7796 12.5917 14.9749 12.3964C15.1701 12.2012 15.4867 12.2012 15.682 12.3964L17.4497 14.1642C17.645 14.3595 17.645 14.6761 17.4497 14.8713ZM12.1464 12.3964C11.9512 12.5917 11.9512 12.9083 12.1464 13.1036L13.5607 14.5178L12.1464 15.932C11.9512 16.1272 11.9512 16.4438 12.1464 16.6391C12.3417 16.8343 12.6583 16.8343 12.8536 16.6391L14.6213 14.8713C14.8166 14.6761 14.8166 14.3595 14.6213 14.1642L12.8536 12.3964C12.6583 12.2012 12.3417 12.2012 12.1464 12.3964Z" fill="#212121"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span>Next week</span>
                                    </div>
                                    <div>
                                        <span>Mon</span>
                                    </div>
                                </div>
                            </li>
                        </div>
                        
                        <li><hr class="dropdown-divider"></li>
                        <div class="dropdown-choose">
                            <li>
                                <div class="d-flex justify-content-between">
                                    <div class="due-icon">
                                        <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                            <path d="M17 5.5A2.5 2.5 0 0014.5 3h-9A2.5 2.5 0 003 5.5v9A2.5 2.5 0 005.5 17h4.1c-.16-.32-.3-.65-.4-1H5.5A1.5 1.5 0 014 14.5V7h12v2.2c.35.1.68.24 1 .4V5.5zM5.5 4h9c.83 0 1.5.67 1.5 1.5V6H4v-.5C4 4.67 4.67 4 5.5 4zm9 15a4.5 4.5 0 100-9 4.5 4.5 0 000 9zm-.5-6.5a.5.5 0 011 0V14h1a.5.5 0 010 1h-1.5a.5.5 0 01-.5-.5v-2z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span>Pick a date</span>
                                    </div>
                                </div>
                            </li>
                        </div>       
                    </ul>
                </div>
                <div class="reminderButton-container">
                    <button class="reminderButton" aria-haspopup="true">
                        <div>
                            <div class="ms-TooltipHost root-42">
                                <div class="taskCreation-labelcontainer">
                                    <div class="taskCreation-icon">
                                        <svg class="fluentIcon reminderButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 2a5.92 5.92 0 015.98 5.36l.02.22V11.4l.92 2.22a1 1 0 01.06.17l.01.08.01.13a1 1 0 01-.75.97l-.11.02L16 15h-3.5v.17a2.5 2.5 0 01-5 0V15H4a1 1 0 01-.26-.03l-.13-.04a1 1 0 01-.6-1.05l.02-.13.05-.13L4 11.4V7.57A5.9 5.9 0 0110 2zm1.5 13h-3v.15a1.5 1.5 0 001.36 1.34l.14.01c.78 0 1.42-.6 1.5-1.36V15zM10 3a4.9 4.9 0 00-4.98 4.38L5 7.6V11.5l-.04.2L4 14h12l-.96-2.3-.04-.2V7.61A4.9 4.9 0 0010 3z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="reminderDate-text isPlaceHolderText">
                                        <span class="screenreader-only">Remind me</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="recurringButton-container">
                    <button class="recurringButton" aria-haspopup="true">
                        <div>
                            <div class="ms-TooltipHost root-42">
                                <div class="taskCreation-labelcontainer">
                                    <div class="taskCreation-icon">
                                        <svg class="fluentIcon recurringButton-icon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5 6.67a.5.5 0 01.3.1l.08.07.01.02A5 5 0 0113.22 15L13 15H6.7l1.65 1.65c.18.17.2.44.06.63l-.06.07a.5.5 0 01-.63.06l-.07-.06-2.5-2.5a.5.5 0 01-.06-.63l.06-.07 2.5-2.5a.5.5 0 01.76.63l-.06.07L6.72 14h.14L7 14h6a4 4 0 003.11-6.52.5.5 0 01.39-.81zm-4.85-4.02a.5.5 0 01.63-.06l.07.06 2.5 2.5.06.07a.5.5 0 010 .56l-.06.07-2.5 2.5-.07.06a.5.5 0 01-.56 0l-.07-.06-.06-.07a.5.5 0 010-.56l.06-.07L13.28 6h-.14L13 6H7a4 4 0 00-3.1 6.52c.06.09.1.2.1.31a.5.5 0 01-.9.3A4.99 4.99 0 016.77 5h6.52l-1.65-1.65-.06-.07a.5.5 0 01.06-.63z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="recurrence-text isPlaceHolderText">
                                        <span class="screenreader-only">Repeat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <button aria-label="Add" class="baseAdd-button baseAdd-disabledButton taskcreation" tabindex="-1" disabled="">Add</button>
        </div>
    </div>
</div>        
@endsection
@section('scripts')
    <script type="module">
        $("#formAddTodo").on('submit', function(e){
            e.preventDefault();
            let name = $("#todo_name").val()
            let url = $(this).attr('action')
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    'name': name, 
                }
            })
        })
    </script>
@endsection