<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(120deg, #4e54c8, #8f94fb, #6a11cb, #2575fc);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
    height: 100vh;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    overflow: hidden;
}

@keyframes gradientBG {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}

.container {
    animation: fadeIn 1.5s ease-in-out;
}

h1 {
    font-size: 3.5rem;
    font-weight: 600;
    margin-bottom: 10px;
}

p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
}

/* Buttons */
.btn {
    background: white;
    color: #4e54c8;
    padding: 12px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    margin: 5px;
    display: inline-block;
    transition: 0.3s;
    box-shadow: 0 0 10px rgba(255,255,255,0.3);
    position: relative;
    overflow: hidden;
}

.btn:hover {
    transform: scale(1.1);
    box-shadow: 0 0 30px rgba(255,255,255,0.8);
}

/* Particle effect */
.particle {
    position: absolute;
    width: 6px;
    height: 6px;
    background: #4e54c8;
    border-radius: 50%;
    pointer-events: none;
    opacity: 0.8;
    transform: translate(0,0);
    animation: particleAnim 0.8s forwards;
}

@keyframes particleAnim {
    to {
        transform: translate(var(--x), var(--y)) scale(0);
        opacity: 0;
    }
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>

<div class="container">
    <h1>Welcome to Alejandro's Project</h1>
    <p>Please login or register to view my portfolio.</p>

    <a href="{{ route('login.form') }}" class="btn">Login</a>
    <a href="{{ route('register.form') }}" class="btn">Register</a>
</div>

<script>
// Particle trailing effect on hover for buttons
document.querySelectorAll('.btn').forEach(button => {
    let mouseMoveHandler;
    button.addEventListener('mouseenter', () => {
        mouseMoveHandler = (e) => {
            const rect = button.getBoundingClientRect();
            const xRel = e.clientX - rect.left;
            const yRel = e.clientY - rect.top;

            const particle = document.createElement('span');
            particle.classList.add('particle');

            const angle = Math.random() * 2 * Math.PI;
            const radius = 40 + Math.random()*20; // distance of particle
            const x = Math.cos(angle) * radius + 'px';
            const y = Math.sin(angle) * radius + 'px';

            particle.style.left = xRel + 'px';
            particle.style.top = yRel + 'px';
            particle.style.setProperty('--x', x);
            particle.style.setProperty('--y', y);

            button.appendChild(particle);
            setTimeout(() => particle.remove(), 800);
        };

        button.addEventListener('mousemove', mouseMoveHandler);
    });

    button.addEventListener('mouseleave', () => {
        button.removeEventListener('mousemove', mouseMoveHandler);
    });
});
</script>

</body>
</html>
