casper.test.begin('Test Upgrade', 1, function suite(test) {
    casper.start("http://localhost:8000/upgrade.php", function () {
        test.assertHttpStatus(200);       
    });

    casper.run(function () {
        test.done();
    });
});