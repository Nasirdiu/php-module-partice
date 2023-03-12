<?php
class MyExpcetion extends Exception
{
}
class NetworkExpcetion extends Exception
{
}

function testException()
{
    throw new NetworkExpcetion();
}
try {
    testException();
} catch (MyExpcetion $e) {
    echo "MyExection Caught";
} catch (NetworkExpcetion $e) {
    echo "NetworkExection Caught";
} catch (Exception $e) {
    echo "Exection Caught";
} finally {
    echo "\n Cleaned Up";
}
