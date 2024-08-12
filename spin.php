<?php
header('Content-Type: application/json');

// Define rewards and their corresponding angles on the wheel
$rewards = [
    1 => 30,
    2 => 90,
    3 => 150,
    10 => 210,
    20 => 270,
    100 => 330
];

// Randomly select a reward
$reward_keys = array_keys($rewards);
$selected_reward = $reward_keys[array_rand($reward_keys)];

// Calculate random degree for spinning (ensuring it lands on the selected reward)
$base_degrees = $rewards[$selected_reward];
$degrees = $base_degrees + rand(0, 59);

// Send the result back to the frontend
echo json_encode(['reward' => $selected_reward, 'degrees' => $degrees]);
?>
