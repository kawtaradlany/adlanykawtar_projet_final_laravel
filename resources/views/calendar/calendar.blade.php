@extends('layouts.index')
@section('content')
@include('home.components.navbar')



<div class="" style="background-image: url('img/image.png'); background-size: cover; background-position: center; height: auto;">>
    <h1 class="pt-52 text-4xl md:text-6xl lg:text-8xl font-bold mb-8 text-center px-4 text-white hover:text-[#48230e]">Réservez dès maintenant pour une expérience parfaite !
    </h1>
    <div class="pt-85 w-1/2 mx-auto opacity-80 bg-[#ca8920]  border-none" id="calendar">
    
    </div>
    @include('calendar.component.modal')
<div class="flex flex-col flex-wrap gap-5">

    @foreach ($reservations as $reservation)
    <div class="bg-pink-500 py-4 w-44 ">
    
        <h1>{{ $reservation->title }}</h1>
        <h2>{{ $reservation->timeStart }}</h2>
    </div>
    @endforeach
</div>
<script>
    document.addEventListener('DOMContentLoaded', async function() {

        const {
            data
        } = await axios.get("/calendar/show")

        const events = data.events;



        var myCalendar = document.getElementById('calendar');


        var calendar = new FullCalendar.Calendar(myCalendar, {
            headerToolbar: {
                left: 'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                right: 'listMonth,listWeek,listDay'
            },
            views: {
                listDay: { // Customize the name for listDay
                    buttonText: 'Day Events',
                },
                listWeek: { // Customize the name for listWeek
                    buttonText: 'Week Events'
                },
                listMonth: { // Customize the name for listMonth
                    buttonText: 'Month Events'
                },
                timeGridWeek: {
                    buttonText: 'Week', // Customize the button text
                },
                timeGridDay: {
                    buttonText: "Day",
                },
                dayGridMonth: {
                    buttonText: "Month",
                },

            },


            initialView: "timeGridWeek",
            slotMinTime: "09:00:00", // min  time  appear in the calendar
            slotMaxTime: "19:00:00",
            nowIndicator: true,
            selectable: true,
            selectMirror: true,
            selectOverlap: true,
            weekends: true,

            // events  hya  property dyal full calendar
            //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
            events: events,

            selectAllow: (info) => {
                let instant = new Date()
                return info.start > instant
            },

            select: (info) => {

                let start = info.start
                let end = info.end


                if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                    alert("rak khditi bzaf dyal l wa9t")
                    calendar.unselect()
                    return
                }
                document.getElementById("date-start").value = formatDate(start).day
                if (info.allDay) {
                    document.getElementById("date-end").value = formatDate(start).day
                    document.getElementById("time-start").value = "09:00:00"
                    document.getElementById("time-end").value = "19:00:00"
                } else {
                    document.getElementById("date-end").value = formatDate(end).day
                    document.getElementById("time-start").value = formatDate(start).time
                    document.getElementById("time-end").value = formatDate(end).time
                }


                document.getElementById("clickMe").click()


            },

            eventClick: (info) => {
                // alert("event clicked")

                console.log(info);
            }


        });


        calendar.render();


        function formatDate(date) {
            let year = String(date.getFullYear())
            let month = String(date.getMonth() + 1).padStart(2, 0)
            let day = String(date.getDate()).padStart(2, 0)

            let hour = String(date.getHours()).padStart(2, 0)
            let min = String(date.getMinutes()).padStart(2, 0)
            let sec = String(date.getSeconds()).padStart(2, 0)

            return {
                day: `${year}-${month}-${day}`,
                time: `${hour}:${min}:${sec}`
            }


        }
    });
</script>

    
@endsection

</div>
