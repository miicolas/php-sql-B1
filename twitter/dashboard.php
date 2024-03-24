<?php

require 'protectRoute.php';
require 'connectionDb.php';
require 'controllers/dashboardController.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

    <main>
        <section id="nav">
            <div class="nav_container">
                <nav>
                    <img src="images/LogoT.webp" alt="Twitter Logo">
                    <ul class="list_nav">
                        <li><a href="dashboard.php">
                                <div class="nav_button">
                                    <div>
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group">
                                                <path id="Vector" d="M27.225 7.1875L14.5938 0.371252C14.2225 0.171252 13.7763 0.171252 13.4063 0.371252L0.781258 7.1875C0.173758 7.5175 -0.0524924 8.275 0.275008 8.8825C0.500008 9.30125 0.931258 9.53875 1.37501 9.53875C1.57501 9.53875 1.78001 9.49125 1.96876 9.38875L2.88626 8.89375L4.87376 22.9563C5.14376 24.4738 6.51126 25.5338 8.19876 25.5338H19.8013C21.4888 25.5338 22.8563 24.4738 23.1288 22.9238L25.1138 8.8925L26.035 9.39C26.6413 9.71875 27.4 9.4925 27.7275 8.885C28.0563 8.2775 27.8275 7.51875 27.2225 7.19125L27.225 7.1875ZM14 17.2938C11.7563 17.2938 9.93751 15.475 9.93751 13.2313C9.93751 10.9875 11.7563 9.16875 14 9.16875C16.2438 9.16875 18.0625 10.9875 18.0625 13.2313C18.0625 15.475 16.2438 17.2938 14 17.2938Z" fill="#000000" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div>Home</div>
                                </div>
                            </a></li>
                        <li><a href="#search">
                                <div class="nav_button">
                                    <div>
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group">
                                                <path id="Vector" d="M27.225 7.1875L14.5938 0.371252C14.2225 0.171252 13.7763 0.171252 13.4063 0.371252L0.781258 7.1875C0.173758 7.5175 -0.0524924 8.275 0.275008 8.8825C0.500008 9.30125 0.931258 9.53875 1.37501 9.53875C1.57501 9.53875 1.78001 9.49125 1.96876 9.38875L2.88626 8.89375L4.87376 22.9563C5.14376 24.4738 6.51126 25.5338 8.19876 25.5338H19.8013C21.4888 25.5338 22.8563 24.4738 23.1288 22.9238L25.1138 8.8925L26.035 9.39C26.6413 9.71875 27.4 9.4925 27.7275 8.885C28.0563 8.2775 27.8275 7.51875 27.2225 7.19125L27.225 7.1875ZM14 17.2938C11.7563 17.2938 9.93751 15.475 9.93751 13.2313C9.93751 10.9875 11.7563 9.16875 14 9.16875C16.2438 9.16875 18.0625 10.9875 18.0625 13.2313C18.0625 15.475 16.2438 17.2938 14 17.2938Z" fill="#000000" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div>Explore</div>
                                </div>
                            </a></li>
                            <li><a href="">
                                <div class="nav_button">
                                    <div>
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group">
                                                <path id="Vector" d="M27.225 7.1875L14.5938 0.371252C14.2225 0.171252 13.7763 0.171252 13.4063 0.371252L0.781258 7.1875C0.173758 7.5175 -0.0524924 8.275 0.275008 8.8825C0.500008 9.30125 0.931258 9.53875 1.37501 9.53875C1.57501 9.53875 1.78001 9.49125 1.96876 9.38875L2.88626 8.89375L4.87376 22.9563C5.14376 24.4738 6.51126 25.5338 8.19876 25.5338H19.8013C21.4888 25.5338 22.8563 24.4738 23.1288 22.9238L25.1138 8.8925L26.035 9.39C26.6413 9.71875 27.4 9.4925 27.7275 8.885C28.0563 8.2775 27.8275 7.51875 27.2225 7.19125L27.225 7.1875ZM14 17.2938C11.7563 17.2938 9.93751 15.475 9.93751 13.2313C9.93751 10.9875 11.7563 9.16875 14 9.16875C16.2438 9.16875 18.0625 10.9875 18.0625 13.2313C18.0625 15.475 16.2438 17.2938 14 17.2938Z" fill="#000000" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div>Notifications</div>
                                </div>
                            </a></li>
                            <li><a href="">
                                <div class="nav_button">
                                    <div>
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group">
                                                <path id="Vector" d="M27.225 7.1875L14.5938 0.371252C14.2225 0.171252 13.7763 0.171252 13.4063 0.371252L0.781258 7.1875C0.173758 7.5175 -0.0524924 8.275 0.275008 8.8825C0.500008 9.30125 0.931258 9.53875 1.37501 9.53875C1.57501 9.53875 1.78001 9.49125 1.96876 9.38875L2.88626 8.89375L4.87376 22.9563C5.14376 24.4738 6.51126 25.5338 8.19876 25.5338H19.8013C21.4888 25.5338 22.8563 24.4738 23.1288 22.9238L25.1138 8.8925L26.035 9.39C26.6413 9.71875 27.4 9.4925 27.7275 8.885C28.0563 8.2775 27.8275 7.51875 27.2225 7.19125L27.225 7.1875ZM14 17.2938C11.7563 17.2938 9.93751 15.475 9.93751 13.2313C9.93751 10.9875 11.7563 9.16875 14 9.16875C16.2438 9.16875 18.0625 10.9875 18.0625 13.2313C18.0625 15.475 16.2438 17.2938 14 17.2938Z" fill="#000000" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div>Messages</div>
                                </div>
                            </a></li>
                            <li><a href="">
                                <div class="nav_button">
                                    <div>
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group">
                                                <path id="Vector" d="M27.225 7.1875L14.5938 0.371252C14.2225 0.171252 13.7763 0.171252 13.4063 0.371252L0.781258 7.1875C0.173758 7.5175 -0.0524924 8.275 0.275008 8.8825C0.500008 9.30125 0.931258 9.53875 1.37501 9.53875C1.57501 9.53875 1.78001 9.49125 1.96876 9.38875L2.88626 8.89375L4.87376 22.9563C5.14376 24.4738 6.51126 25.5338 8.19876 25.5338H19.8013C21.4888 25.5338 22.8563 24.4738 23.1288 22.9238L25.1138 8.8925L26.035 9.39C26.6413 9.71875 27.4 9.4925 27.7275 8.885C28.0563 8.2775 27.8275 7.51875 27.2225 7.19125L27.225 7.1875ZM14 17.2938C11.7563 17.2938 9.93751 15.475 9.93751 13.2313C9.93751 10.9875 11.7563 9.16875 14 9.16875C16.2438 9.16875 18.0625 10.9875 18.0625 13.2313C18.0625 15.475 16.2438 17.2938 14 17.2938Z" fill="#000000" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div>Bookmarks</div>
                                </div>
                            </a></li>
                            <li><a href="">
                                <div class="nav_button">
                                    <div>
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group">
                                                <path id="Vector" d="M27.225 7.1875L14.5938 0.371252C14.2225 0.171252 13.7763 0.171252 13.4063 0.371252L0.781258 7.1875C0.173758 7.5175 -0.0524924 8.275 0.275008 8.8825C0.500008 9.30125 0.931258 9.53875 1.37501 9.53875C1.57501 9.53875 1.78001 9.49125 1.96876 9.38875L2.88626 8.89375L4.87376 22.9563C5.14376 24.4738 6.51126 25.5338 8.19876 25.5338H19.8013C21.4888 25.5338 22.8563 24.4738 23.1288 22.9238L25.1138 8.8925L26.035 9.39C26.6413 9.71875 27.4 9.4925 27.7275 8.885C28.0563 8.2775 27.8275 7.51875 27.2225 7.19125L27.225 7.1875ZM14 17.2938C11.7563 17.2938 9.93751 15.475 9.93751 13.2313C9.93751 10.9875 11.7563 9.16875 14 9.16875C16.2438 9.16875 18.0625 10.9875 18.0625 13.2313C18.0625 15.475 16.2438 17.2938 14 17.2938Z" fill="#000000" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div>Lists</div>
                                </div>
                            </a></li>
                            <li><a href="">
                                <div class="nav_button">
                                    <div>
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group">
                                                <path id="Vector" d="M27.225 7.1875L14.5938 0.371252C14.2225 0.171252 13.7763 0.171252 13.4063 0.371252L0.781258 7.1875C0.173758 7.5175 -0.0524924 8.275 0.275008 8.8825C0.500008 9.30125 0.931258 9.53875 1.37501 9.53875C1.57501 9.53875 1.78001 9.49125 1.96876 9.38875L2.88626 8.89375L4.87376 22.9563C5.14376 24.4738 6.51126 25.5338 8.19876 25.5338H19.8013C21.4888 25.5338 22.8563 24.4738 23.1288 22.9238L25.1138 8.8925L26.035 9.39C26.6413 9.71875 27.4 9.4925 27.7275 8.885C28.0563 8.2775 27.8275 7.51875 27.2225 7.19125L27.225 7.1875ZM14 17.2938C11.7563 17.2938 9.93751 15.475 9.93751 13.2313C9.93751 10.9875 11.7563 9.16875 14 9.16875C16.2438 9.16875 18.0625 10.9875 18.0625 13.2313C18.0625 15.475 16.2438 17.2938 14 17.2938Z" fill="#000000" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div>Profile</div>
                                </div>
                            </a></li>
                            <li><a href="">
                                <div class="nav_button">
                                    <div>
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group">
                                                <path id="Vector" d="M27.225 7.1875L14.5938 0.371252C14.2225 0.171252 13.7763 0.171252 13.4063 0.371252L0.781258 7.1875C0.173758 7.5175 -0.0524924 8.275 0.275008 8.8825C0.500008 9.30125 0.931258 9.53875 1.37501 9.53875C1.57501 9.53875 1.78001 9.49125 1.96876 9.38875L2.88626 8.89375L4.87376 22.9563C5.14376 24.4738 6.51126 25.5338 8.19876 25.5338H19.8013C21.4888 25.5338 22.8563 24.4738 23.1288 22.9238L25.1138 8.8925L26.035 9.39C26.6413 9.71875 27.4 9.4925 27.7275 8.885C28.0563 8.2775 27.8275 7.51875 27.2225 7.19125L27.225 7.1875ZM14 17.2938C11.7563 17.2938 9.93751 15.475 9.93751 13.2313C9.93751 10.9875 11.7563 9.16875 14 9.16875C16.2438 9.16875 18.0625 10.9875 18.0625 13.2313C18.0625 15.475 16.2438 17.2938 14 17.2938Z" fill="#000000" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div>More</div>
                                </div>
                            </a></li>
                    </ul>
                </nav>
                <button class="button_primary">Tweet</button>

            </div>
            <div class="profile_container">
                <div class="profile_content">
                    <div class="information_container">
                        <h3> <?php echo $_SESSION["user"]["username"] ?></h3>
                        <p><?php echo $_SESSION["user"]["name"] ?></p>
                    </div>
                    <div class="profile_picture">
                        <a href="controllers/deconnectController.php">
                            <button class="button_secondary">Deconnect</button>
                        </a>
                </div>

            </div>
        </section>
        <section id="home">
            <div class="container_home">
                <div class="make_tweet_container">
                    
                    <form action="controllers/addTweetController.php" method="POST" class="addtweet_container">
                        <input type="hidden" name="form" value="tweet">
                        <textarea name="tweetContent" id="addTweet" cols="30" rows="10" placeholder="What's happening?"></textarea>
                        <button type="submit" class="button_primary">Tweet</button>
                    </form>
                </div>
                <div class="tweets">
                    <ul>

                        <?php

                            date_default_timezone_set('Europe/Paris'); // Définit le fuseau horaire par défaut à Paris
                            if (!empty($tweet)) {
                                foreach ($tweet as $data) { // Parcours les tweets

                                    $tweetTime = strtotime($data['created_at']); // Convertit la date de création du tweet en timestamp
                                    
                                    $currentTime = time(); // Récupère le timestamp actuel
                                    $timeDiff = $currentTime - $tweetTime; // Calcule la différence de temps entre le tweet et l'heure actuelle

                                    $seconds = $timeDiff; // Initialise les secondes
                                    $minutes = floor($seconds / 60); // Calcule les minutes
                                    $hours = floor($minutes / 60); // Calcule les heures
                                    $days = floor($hours / 24); // Calcule les jours

                                    if ($days > 0) {
                                        $elapsed = $days . ' days ago';
                                    } elseif ($hours > 0) {
                                        $elapsed = $hours . ' hours ago';
                                    } elseif ($minutes > 0) {
                                        $elapsed = $minutes . ' minutes ago';
                                    } else {
                                        $elapsed = 'Just now';
                                    }

                                    // var_dump($tweetTime, $currentTime, $timeDiff, $seconds, $minutes, $hours, $days, $elapsed);

                        
                                    echo '
                                        
                                        <li class="tweet_container">
                                            <div class="tweet_content">
                                                <div class="tweet_user_info">

                                                    <p class="user_username">  @' . $data['username'] . '</p><p class="user_name"> '. $data['name'] . '</p> • ' . $elapsed . '

                                                </div>
                                                <p>
                                                    
                                                    ' . $data['content'] . '  

                                                    </p>';
                                                
                                                if ($data['id_user'] == $_SESSION['user']['id']) echo ' 
                                                <form  action="controllers/deleteTweetController.php" method="POST">
                                                    <input type="hidden" name="tweetId" value="' . $data['id'] . '">
                                                    <button type="submit" class="button_secondary">Delete</button>
                                                </form>
                                                ' . '
                                            </div>
                                        </li>
                                        ';
                                }
                            } else {
                            echo '<li>No tweets found.</li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </section>
        <section id="search">

            <form action="search.php" method="GET">
                <input type="hidden" name="form" value="search">
                <input type="text" name="search" id="search" placeholder="Search Twitter" class="searchbar">
                <button type="submit" class="button_primary">Search</button>
            </form>

        </section>

    </main>

</body>

</html>