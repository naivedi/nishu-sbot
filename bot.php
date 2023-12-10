<?php

// Get user input from the form or any other source
$userInput = isset($_POST['user_input']) ? $_POST['user_input'] : '';

// Simple decision tree for responses
function getBotResponse($userInput) {
    $responses = [
        'hello' => 'Hi there! How can I help you?',
        'how are you' => 'I am just a bot, but thanks for asking!',
        'bye' => 'Goodbye! Have a great day.',
        'default' => 'I'm sorry, I didn't understand that. Can you please rephrase or ask another question?'
    ];

    // Convert user input to lowercase for case-insensitive matching
    $userInput = strtolower($userInput);

    // Check if there's a specific response for the user input
    if (isset($responses[$userInput])) {
        return $responses[$userInput];
    } else {
        return $responses['default'];
    }
}

// Get the bot's response
$botResponse = getBotResponse($userInput);

// Output the bot's response
echo json_encode(['bot_response' => $botResponse]);
