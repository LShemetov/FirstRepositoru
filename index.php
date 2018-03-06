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

    <section class="instructions">
        <h2>Here are usefull information</h2>
        <ul>
            <li><a href="https://www.intuit.ru/">Intuit courses</a></li>
            <li><a href="http://video.lisa-alisa.ru/">Usefull video</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP.rds.html">Coursera courses</a>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-ec2.html">Information security tests</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-resources.html">Advices</a></li>
        </ul>

        <h2>PHP manuals</h2>
        <ul>
            <li><a href="http://aws.amazon.com/sdkforphp">PHP manual #1</a></li>
            <li><a href="http://aws.amazon.com/php">PHP manual #2</a></li>
            <li><a href="https://github.com/aws/aws-sdk-php">PHP manual #3</a></li>
        </ul>
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
