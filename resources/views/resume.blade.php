<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alejandro's Resume</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(-45deg, #4e54c8, #8f94fb, #6a11cb, #2575fc);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
    color: white;
    overflow-x: hidden;
}

@keyframes gradientBG {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 60px 20px;
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1; transform: translateY(0);}
}

h1 {
    font-size: 3rem;
    text-align: center;
    font-weight: 600;
    margin-bottom: 5px;
}

.subtitle {
    text-align: center;
    margin-bottom: 50px;
    opacity: 0.9;
}


.logout-btn {
    position: fixed;
    top: 20px;
    right: 20px;
    background: white;
    color: #4e54c8;
    padding: 12px 25px;
    border-radius: 12px;
    font-weight: 500;
    text-decoration: none;
    transition: 0.3s;
}
.logout-btn:hover { background: #f2f2f2; transform: translateY(-2px); }

.cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.card {
    width: 250px;
    height: 250px;
    perspective: 1000px;
    opacity: 0;
    animation: fadeInCard 0.8s forwards;
}

.card:nth-child(1){ animation-delay: 0.1s; }
.card:nth-child(2){ animation-delay: 0.3s; }
.card:nth-child(3){ animation-delay: 0.5s; }
.card:nth-child(4){ animation-delay: 0.7s; }
.card:nth-child(5){ animation-delay: 0.9s; }
.card:nth-child(6){ animation-delay: 1.1s; }

@keyframes fadeInCard {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
    border-radius: 18px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.12);
}

.card:hover .card-inner {
    transform: rotateY(180deg);
}

.card-front, .card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 18px;
    backface-visibility: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    flex-direction: column;
    gap: 10px;
}

.card-front {
    background: white;
    color: #4e54c8;
    font-size: 1.5rem;
    font-weight: 600;
}

.card-back {
    background: rgba(255,255,255,0.9);
    color: #333;
    transform: rotateY(180deg);
    font-size: 1rem;
    overflow-y: auto;
}

.card-icon {
    font-size: 2rem;
}


.particle {
    position: absolute;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    pointer-events: none;
    opacity: 0.8;
    transform: translate(0,0);
    animation: particleAnim 0.8s forwards;
    background: var(--particle-color, #ffffff);
}

@keyframes particleAnim {
    to {
        transform: translate(var(--x), var(--y)) scale(0);
        opacity: 0;
    }
}
</style>
</head>
<body>

<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-btn">Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<div class="container">
    <h1>Alejandro's Resume</h1>
    <p class="subtitle">Final Project • Web Development</p>

    <div class="cards">
        <div class="card">
            <div class="card-inner">
                <div class="card-front"><div class="card-icon">👨‍💻</div>About Me</div>
                <div class="card-back">I'm Alejandro G Lozano Jr, born at the Philippines, here to serve you with my clean Resume.</div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front"><div class="card-icon">💡</div>Skills</div>
                <div class="card-back">
                    <ul>
                        <li>HTML, CSS, JavaScript</li>
                        <li>Laravel Framework</li>
                        <li>MySQL Database</li>
                        <li>Git & GitHub</li>
                        <li>Python</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front"><div class="card-icon">🎓</div>Education</div>
                <div class="card-back">
                    <strong>BSCS (Bachelor of Science in Computer Science)</strong><br>
                    City College of Angeles
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front"><div class="card-icon">⚡</div>Projects</div>
                <div class="card-back">
                    <ul>
                        <li>School Website (CFSI Mabiga)</li>
                        <li>Personal Portfolio Website</li>
                        <li>Simple Login & Registration System</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front"><div class="card-icon">🏆</div>Gaming Achivement</div>
                <div class="card-back">Peaked Master at League of Legends<br>
                 Peaked Diamond at Valorant<br>
                  2200 Total Level on Runescape.</div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front"><div class="card-icon">📫</div>Contact</div>
                <div class="card-back">
                    Email:Ajlozano23@cca.edu.ph<br>
                    GitHub:github.com/Nyeq/<br>
                    FB:Jandy Lozano
                </div>
            </div>
        </div>
    </div>
</div>

<script>

const colors = ['#4e54c8', '#8f94fb', '#ffffff', '#6a11cb', '#2575fc'];

document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const xRel = e.clientX - rect.left;
        const yRel = e.clientY - rect.top;

        const particle = document.createElement('span');
        particle.classList.add('particle');

        
        const color = colors[Math.floor(Math.random() * colors.length)];
        particle.style.setProperty('--particle-color', color);

        const angle = Math.random() * 2 * Math.PI;
        const radius = 30 + Math.random()*20;
        const x = Math.cos(angle) * radius + 'px';
        const y = Math.sin(angle) * radius + 'px';

        particle.style.left = xRel + 'px';
        particle.style.top = yRel + 'px';
        particle.style.setProperty('--x', x);
        particle.style.setProperty('--y', y);

        card.appendChild(particle);
        setTimeout(() => particle.remove(), 800);
    });
});
</script>

</body>
</html>
