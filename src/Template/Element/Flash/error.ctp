<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger">
<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>
</div>

