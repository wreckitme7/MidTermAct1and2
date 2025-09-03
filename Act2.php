<?php
$username = "LeBron_James";
$role = "member";
$isActive = true;
$isPremium = true;
$lastLoginDaysAgo = 69;

$welcomeMessage = ($role === "administrator") 
    ? "Welcome, Administrator $username!" 
    : "Welcome, $username!";
echo $welcomeMessage . "\n";

$loginMessage = ($lastLoginDaysAgo <= 1) 
    ? "You logged in recently." 
    : "Your last login was $lastLoginDaysAgo days ago.";
echo $loginMessage . "\n\n";


if (!$isActive) {
    echo "Yur account is inactive. Please contact support.\n";
} else {
    
    if ($role === "administrator") {
        echo "access to all features: User Management, Content Moderation, System Settings.\n";
    } elseif ($role === "moderator") {
        echo "access to Forum Posts, Comments Moderation, and Profile Editor.\n";
        
        if ($isPremium) {
            echo "premium content library unlocked!\n";
        }
    } elseif ($role === "member") {
        echo "access to Forum Posts and Profile Editor.\n";
       
        if ($isPremium) {
            echo "premium content library unlocked!\n";
        }
    } else {
        echo "limited access as a guest. Please register for full access.\n";
    }
}

echo "\n";

$notificationPreference = "email";

switch ($notificationPreference) {
    case "email":
        echo "email notifications are enabled.\n";
        break;
    case "sms":
        echo "SMS notifications are enabled.\n";
        break;
    case "both":
        echo "Email and SMS notifications are enabled.\n";
        break;
    case "none":
        echo "Notifications are disabled.\n";
        break;
    default:
        echo "Unknown notification preference. Please update your settings.\n";
}
?>