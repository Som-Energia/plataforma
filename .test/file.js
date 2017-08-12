casper.test.begin('Test File page all', 2, function suite(test) {
    casper.start("http://localhost:8000/file/all", function () {
        test.assertHttpStatus(200);       
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});