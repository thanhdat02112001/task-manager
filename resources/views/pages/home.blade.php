@extends('layouts.master')
@section('content')
  <div class="home-wrapper">
    <div class="home-content">
      <div class="d-flex align-items-center">
        <div aria-hidden="true" class="me-2 mt-1">
          <svg class="fluentIcon ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="24" height="24" viewBox="0 0 20 20" 
            xmlns="http://www.w3.org/2000/svg" focusable="false">
            <path d="M9 2.39a1.5 1.5 0 012 0l5.5 4.94c.32.28.5.69.5 1.12v7.05c0 .83-.67 1.5-1.5 1.5H13a1.5 1.5 0 01-1.5-1.5V12a.5.5 0 00-.5-.5H9a.5.5 0 00-.5.5v3.5c0 .83-.67 1.5-1.5 1.5H4.5A1.5 1.5 0 013 15.5V8.45c0-.43.18-.84.5-1.12L9 2.39zm1.33.74a.5.5 0 00-.66 0l-5.5 4.94a.5.5 0 00-.17.38v7.05c0 .28.22.5.5.5H7a.5.5 0 00.5-.5V12c0-.83.67-1.5 1.5-1.5h2c.83 0 1.5.67 1.5 1.5v3.5c0 .28.22.5.5.5h2.5a.5.5 0 00.5-.5V8.45a.5.5 0 00-.17-.38l-5.5-4.94z" fill="currentColor"></path>
          </svg>
        </div>
        <span class="home-title mt-1">Home</span>
      </div>
      <div class="row mt-5">
        <div class="col-md-8">
          <div class="d-flex justify-content-between">
            <div class="card w-25">
              <div class="card-body">
                <h5 class="card-title">Running Task</h5>
                <div class="card-text d-flex align-items-center">
                  <div class="icon rotate">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.75 3a2.25 2.25 0 0 1 2.248 2.25v13.5a2.25 2.25 0 1 1-4.498 0V5.25A2.25 2.25 0 0 1 5.75 3Zm6.5 4a2.25 2.25 0 0 1 2.248 2.25v9.5a2.25 2.25 0 1 1-4.498 0v-9.5A2.25 2.25 0 0 1 12.25 7Zm6.5 4a2.25 2.25 0 0 1 2.248 2.25v5.5a2.25 2.25 0 1 1-4.498 0v-5.5A2.249 2.249 0 0 1 18.75 11Z" fill="#3398DB"/>
                    </svg>
                  </div>
                  <div class="statistic ms-5">
                    <span>RUNNING</span>
                    <span><strong>12</strong></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card w-25">
              <div class="card-body">
                <h5 class="card-title">Running Task</h5>
                <div class="card-text d-flex align-items-center">
                  <div class="icon rotate">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.75 3a2.25 2.25 0 0 1 2.248 2.25v13.5a2.25 2.25 0 1 1-4.498 0V5.25A2.25 2.25 0 0 1 5.75 3Zm6.5 4a2.25 2.25 0 0 1 2.248 2.25v9.5a2.25 2.25 0 1 1-4.498 0v-9.5A2.25 2.25 0 0 1 12.25 7Zm6.5 4a2.25 2.25 0 0 1 2.248 2.25v5.5a2.25 2.25 0 1 1-4.498 0v-5.5A2.249 2.249 0 0 1 18.75 11Z" fill="#3398DB"/>
                    </svg>
                  </div>
                  <div class="statistic ms-5">
                    <span>RUNNING</span>
                    <span><strong>12</strong></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card w-25">
              <div class="card-body">
                <h5 class="card-title">Completed Task</h5>
                <div class="card-text d-flex align-items-center">
                  <div class="icon rotate">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="m8.5 16.586-3.793-3.793a1 1 0 0 0-1.414 1.414l4.5 4.5a1 1 0 0 0 1.414 0l11-11a1 1 0 0 0-1.414-1.414L8.5 16.586Z" fill="#3398DB"/>
                    </svg>
                  </div>
                  <div class="statistic ms-5">
                    <span>COMPLETED</span>
                    <span><strong>12</strong></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <canvas id="chart" aria-label="chart" class="mt-5"></canvas>
          </div>
        </div>
        <div class="col-md-4">
          <div class="calendar" id="calendar"></div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
  <script src="{{mix('js/chart.js')}}" defer></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>
@endsection