<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="alert alert-success">
<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>
</div>

