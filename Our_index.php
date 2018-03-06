<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<body>
    <section class="congratulations">
        <h1>Any student!</h1>
        <p>Student of group 8V4A TPU</p>
        <p>This site is running on PHP <?= phpversion() ?></p>
    </section>
