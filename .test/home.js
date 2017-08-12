casper.test.begin('Test Home', 2, function suite(test) {
    casper.start("http://localhost:8000", function () {
        test.assertHttpStatus(200);
        test.assertExists('div #login-dropdown a');

    });

    casper.run(function () {
        test.done();
    });
});