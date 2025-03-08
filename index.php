<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['query'];
    $apiUrl = 'https://router.huggingface.co/fireworks-ai/v1/chat/completions';
    $apiKey = 'your_api_key';

    $data = json_encode([
        'model' => 'accounts/perplexity/models/r1-1776',
        'messages' => [
            [
                'role' => 'user',
                'content' => $userInput
            ]
        ],
        'max_tokens' => 500,
        'stream' => false,
    ]);

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    }

    curl_close($ch);

    $result = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AI Chatbox</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="chat-container">
        <h2>Ask the AI</h2>
        <form method="POST">
            <input type="text" name="query" placeholder="Type your question..." required>
            <button type="submit">Send</button>
        </form>

        <?php if (!empty($result)): ?>
            <div class="response">
                <h3>AI Response:</h3>
                <?php 
                    $responseContent = htmlspecialchars($result['choices'][0]['message']['content'] ?? 'No response');
                    $formattedResponse = nl2br($responseContent);
                    echo "<p>$formattedResponse</p>";
                ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>