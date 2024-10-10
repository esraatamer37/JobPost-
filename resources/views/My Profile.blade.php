<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedIn Profile Simulation</title>
    <link  href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
        // JavaScript to trigger file upload and show alert message
        document.addEventListener("DOMContentLoaded", function() {
            const profileUpload = document.getElementById('profile-upload');
            const profileImg = document.getElementById('profileImg');

            profileImg.onclick = function () {
                alert('Add a profile picture!');
            };

            profileUpload.onchange = function (event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        profileImg.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            };
        });
    </script>
</head>
<body>
<!-- Top Navbar -->
<nav class="navbar">
    <div class="container">
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="#">My Network</a>
            <a href="job-listings.html">Jobs</a>
            <a href="Messaging.html">Messaging</a>
            <a href="#">Notifications</a>
            <a href="#">Me</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
    </div>
</nav>




<div class="main-container">
    <!-- Left Sidebar -->
    <aside class="sidebar">
        <div class="profile-overview">
            <div class="profile-picture-container">
                <label for="profile-upload" class="profile-picture">
                    <img src="default-profile.png" alt="Profile Picture" id="profileImg">
                </label>
                <input type="file" id="profile-upload" style="display: none;" accept="image/*">
            </div>
            <div class="profile-info">
                <h1>Dr. Esraa Tamer</h1>
                <p class="title">Professor of Computer Science</p>
                <p class="location">Cairo, Egypt</p>
                <button class="connect-btn"><p>Connections: <strong>500+</strong></p></button>
                <button class="Followers-btn"><p>Followers: <strong>1200</strong></p></button>
            </div>

    </aside>

    <!-- Main Content -->
    <main class="profile-content">
        <!-- About Section -->
        <div class="about-section">
            <h2>About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis odio nec orci luctus volutpat. Integer sit amet fermentum eros, a laoreet sapien.</p>
        </div>

        <!-- Experience Section -->
        <div class="experience-section">
            <h2>Experience</h2>
            <div class="experience-item">
                <h3>Senior Professor</h3>
                <p>University of Cairo</p>
                <span>2015 - Present</span>
                <p>Leading a research team on AI and Data Science, overseeing 10+ PhD students.</p>
            </div>
            <div class="experience-item">
                <h3>Assistant Professor</h3>
                <p>University of Alexandria</p>
                <span>2010 - 2015</span>
                <p>Taught courses on Machine Learning and Data Structures. Published 10+ papers.</p>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="skills-section">
            <h2>Skills</h2>
            <ul class="skills-list">
                <li>Python Programming</li>
                <li>Data Analysis</li>
                <li>Machine Learning</li>
                <li>Deep Learning</li>
                <li>Natural Language Processing</li>
            </ul>
        </div>

        <!-- Education Section -->
        <div class="education-section">
            <h2>Education</h2>
            <div class="education-item">
                <h3>PhD in Computer Science</h3>
                <p>University of Cambridge</p>
                <span>2005 - 2010</span>
            </div>
        </div>

        <!-- Activity Section -->
        <div class="activity-section">
            <h2>Activity</h2>
            <button class="create-post-btn">Create a post</button>

            <div class="posts-section">
                <h3>Posts</h3>
                <div class="post">
                    <div class="post-header">
                        <strong>Esraa Tamer</strong> posted this • 2w
                    </div>
                    <p>
                        Developed a PHP-based TODO application with user authentication, note management, and task organization features. The app allows users to securely register, log in, and manage tasks with advanced security measures, including password hashing and validation. You can check out the project on GitHub <a href="https://lnkd.in/eyhazVpH" target="_blank">(https://lnkd.in/eyhazVpH)</a>.
                        <br><br>
                        Additional task-tracking features are being planned as part of continuous improvement, such as the seamless transfer of completed tasks to a dedicated page.
                        <br><br>
                        #PHP #WebDevelopment #TaskManagement #UserAuthentication #PasswordHashing #ProjectDevelopment #MindsetTraining #BackendDevelopment
                    </p>
                    <div class="post-interactions">
                        <span>❤️ 9</span> |
                        <span>💬 4 comments</span> |
                        <span>🔁 1 repost</span>
                    </div>
                </div>

                <div class="post">
                    <div class="post-header">
                        <strong>Esraa Tamer</strong> posted this • 3w
                    </div>
                    <p>
                        I am excited to share my latest project, Student Management System, which I developed as part of a task from Mindset Training with Nagwa Ali!
                        <br><br>
                        Technologies used:
                        <br>HTML & CSS: For a sleek, neomorphic-inspired UI that enhances user experience.
                        <br>PHP: For robust server-side functionality and seamless form handling.
                        <br>MySQL: To efficiently manage and store student data in a structured way.
                        <br><br>
                        Check out the project here: <a href="https://lnkd.in/e56GEeup" target="_blank">(https://lnkd.in/e56GEeup)</a>.
                        <br><br>
                        #webdevelopment #php #mysql #html #css #studentmanagement #programming #learning #MindsetTraining
                    </p>
                    <div class="post-interactions">
                        <span>❤️ 11</span> |
                        <span>💬 4 comments</span> |
                        <span>🔁 2 reposts</span>
                    </div>
                </div>

                <button class="show-more-btn">Show all posts</button>
            </div>
        </div>
    </main>
</div>
</body>
</html>

