{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="store-countdown-wrapper">
        
        <!-- Icona o Immagine -->
        <div class="store-icon-floating">
            <i class="fa fa-shopping-cart"></i>
        </div>

        <h1 class="store-title">Aetheria Store</h1>
        <p class="store-subtitle">
            We're preparing legendary offers for you.<br>
            The store will officially open in:
        </p>

        <!-- COUNTDOWN -->
        <div id="countdown" class="countdown-grid">
            <div class="time-box">
                <span class="time-number" id="days">00</span>
                <span class="time-label">Days</span>
            </div>
            <div class="time-box">
                <span class="time-number" id="hours">00</span>
                <span class="time-label">Hours</span>
            </div>
            <div class="time-box">
                <span class="time-number" id="minutes">00</span>
                <span class="time-label">Minutes</span>
            </div>
            <div class="time-box">
                <span class="time-number" id="seconds">00</span>
                <span class="time-label">Seconds</span>
            </div>
        </div>

        <!-- Final Message (Hidden at start) -->
        <div id="store-open-msg" style="display:none; margin-top: 30px;">
            <h2 style="color: #2ecc71;">THE STORE IS OPEN!</h2>
            <p>Refresh the page to access.</p>
        </div>

        <div class="ui divider" style="opacity: 0.2; margin: 40px 0;"></div>

        <a href="https://discord.gg/CEPyDKM2" target="_blank" class="ui button primary large">
            <i class="fab fa-discord"></i> Join Discord for updates
        </a>

    </div>

</div>

<!-- SCRIPT COUNTDOWN -->
<script>
    // LAUNCH DATE: February 12, 2026, 4:00 PM (or midnight)
    // Format: "Month Day, Year HH:mm:ss"
    const launchDate = new Date("Feb 12, 2026 16:00:00").getTime();

    const timer = setInterval(function() {
        const now = new Date().getTime();
        const distance = launchDate - now;

        // Mathematical calculations
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Insert into HTML
        document.getElementById("days").innerText = days < 10 ? "0" + days : days;
        document.getElementById("hours").innerText = hours < 10 ? "0" + hours : hours;
        document.getElementById("minutes").innerText = minutes < 10 ? "0" + minutes : minutes;
        document.getElementById("seconds").innerText = seconds < 10 ? "0" + seconds : seconds;

        // If the countdown is finished
        if (distance < 0) {
            clearInterval(timer);
            document.getElementById("countdown").style.display = "none";
            document.getElementById("store-open-msg").style.display = "block";
        }
    }, 1000);
</script>

{include file='footer.tpl'}
