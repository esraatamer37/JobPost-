<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messaging Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Messages</h1>
        </header>
        <div class="chat-container">
            <div class="sidebar">
                <h2>Recent Conversations</h2>
                <div class="conversation">
                    <div class="avatar"><img src="https://media.licdn.com/dms/image/v2/C4D03AQERiq_1M4N29g/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1663626900641?e=1733961600&v=beta&t=S6JK4BcH1KH-gdtzBFZfFjxnKczwbQ37x_wAKeYlR9U" alt="User 1"></div>
                    <div class="info">
                        <strong>Nagwa Ali</strong>
                        <p>Last message from Nagwa Ali</p>
                    </div>
                </div>
                <div class="conversation">
                    <div class="avatar"><img src="https://media.licdn.com/dms/image/v2/D4D03AQGc2RvGVkTy6g/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1701883876076?e=1733961600&v=beta&t=4ir3iF3ZohjJl_oZuW8cAb19T1Z1_i9lR2e6ipiB9hM" alt="Abdullah Abdelaziz"></div>
                    <div class="info">
                        <strong>Abdullah Abdelaziz</strong>
                        <p>Last message from Abdullah Abdelaziz</p>
                    </div>
                </div>
                <!-- Add more conversations as needed -->
            </div>
            <div class="messages">
                <div class="message received">
                    <div class="avatar"><img src="avatar1.jpg" alt="User 1"></div>
                    <div class="message-content">
                        <p>Hello! How are you?</p>
                        <span class="time">10:00 AM</span>
                    </div>
                </div>
                <div class="message sent">
                    <div class="avatar"><img src="your-avatar.jpg" alt="You"></div>
                    <div class="message-content">
                        <p>I'm good, thank you! What about you?</p>
                        <span class="time">10:01 AM</span>
                    </div>
                </div>
                <div class="message received">
                    <div class="avatar"><img src="https://media.licdn.com/dms/image/v2/D4D03AQF92kN4r7kiIg/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1725807902835?e=1733961600&v=beta&t=1jcyzwmBeniSSg4yRDseFVrYBJZHP7f8xp0Xd5bQnNQ" alt="rawan samir"></div>
                    <div class="message-content">
                        <p>I'm working on a new project. Do you have time to discuss it?</p>
                        <span class="time">10:02 AM</span>
                    </div>
                </div>
                <div class="message sent">
                    <div class="avatar"><img src="your-avatar.jpg" alt="You"></div>
                    <div class="message-content">
                        <p>Sure, I'll be available later this afternoon.</p>
                        <span class="time">10:03 AM</span>
                    </div>
                </div>
            </div>
        </div>
        <form class="message-form">
            <input type="text" placeholder="Type a message..." required>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
