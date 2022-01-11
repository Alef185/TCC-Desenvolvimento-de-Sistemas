<template>
    <div class="clock">
        <h2>The time is now</h2>
        <div class="clockTimer">8:23PM</div>
    </div>
</template>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" ></script>
<script>
    const clock = document.getElementById('clock');
    setInterval(() => {
        const now = moment();
        const humanReadabled = now.format('hh:mm:ssA');
        clock.textContent = humanReadabled;
    }, 1000);
</script>

<style>
.callout.calendar-day { padding: .8rem 1.9rem; }
.callout.calendar-day h1 {
    margin: 0 1rem 0 0;
    color: #2540F4;
}
.callout.calendar-day h6 { margin: 0; }
.callout.calendar-day h6.light { color: #A8B4CB; }
</style>