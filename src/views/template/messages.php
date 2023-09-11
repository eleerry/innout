<?php

if($exception ){
    $message = [
        'type' => 'error',
        'message' => $message->getMessage()
    ];
}
?>

<?php if($message): ?>
    <div class="my-2 alert alert-danger" role="alert">
        <?= $message['message'] ?>
    </div>
<?php endif ?>